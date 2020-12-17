from django.shortcuts import redirect, render
from django.urls import reverse
from .models import JournalFactoryOfWork
from django.views.generic import CreateView, ListView, View, DeleteView, UpdateView
from .forms import JournalFactoryOfWorkForm
from .filters import JournalFactoryOfWorkFilter


class JournalFactoryOfWorkCreateView(CreateView):
    template_name = 'JournalFactoryOfWork/create.html'
    form_class = JournalFactoryOfWorkForm
    success_url = '/journal/FactoryOfWork/index/'

    def get_form_kwargs(self):
        kwargs = super(JournalFactoryOfWorkCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class JournalFactoryOfWorkListView(ListView):
    model = JournalFactoryOfWork
    template_name = 'JournalFactoryOfWork/index.html'

    def get_context_data(self, **kwargs):
        journal_factory_of_work_list = JournalFactoryOfWork.objects.all()
        journal_factory_of_work_filter = JournalFactoryOfWorkFilter(self.request.GET, queryset=journal_factory_of_work_list)
        context = super().get_context_data(**kwargs)
        context['FactoryOfWorkList'] = journal_factory_of_work_list
        context['myFilter'] = journal_factory_of_work_filter
        return context


class JournalFactoryOfWorkView(View):

    def get(self, request, pk):
        FactoryOfWork = JournalFactoryOfWork.objects.get(id=pk)
        return render(request,"JournalFactoryOfWork/view.html", {"FactoryOfWorkView": FactoryOfWork,
                                                                 "title": FactoryOfWork.journal_factory_of_work_user})


class JournalFactoryOfWorkUpdateView(UpdateView):
    model = JournalFactoryOfWork
    template_name = 'JournalFactoryOfWork/update.html'
    form_class = JournalFactoryOfWorkForm
    success_url = '/journal/FactoryOfWork/index/'

    def form_valid(self, form):
        form.instance.feed_author = self.request.user
        return super(JournalFactoryOfWorkUpdateView, self).form_valid(form)

    def get_form_kwargs(self):
        kwargs = super(JournalFactoryOfWorkUpdateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class JournalFactoryOfWorkDeleteView(DeleteView):
    model = JournalFactoryOfWork
    success_url = '/journal/FactoryOfWork/index/'
    template_name = 'JournalFactoryOfWork/delete.html'

    def get(self, *args, **kwargs):
        return self.post(*args, **kwargs)


