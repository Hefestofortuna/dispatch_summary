from datetime import datetime

from django.shortcuts import redirect, render
from django.urls import reverse
from .models import JournalFactoryOfWork, JournalEMSU
from django.views.generic import CreateView, ListView, View, DeleteView, UpdateView
from .forms import JournalFactoryOfWorkForm, JournalEMSUForm
from .filters import JournalFactoryOfWorkFilter, JournalEMSUFilter


class JournalFactoryOfWorkCreateView(CreateView):
    template_name = 'JournalFactoryOfWork/create.html'
    form_class = JournalFactoryOfWorkForm
    success_url = '/journal/FactoryOfWork/index/'

    def get_form_kwargs(self):
        kwargs = super(JournalFactoryOfWorkCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs

    def form_valid(self, form):
        JournalFactoryOfWork.journal_factory_of_work_subdibision = self.request.user.subdivision
        return super(JournalFactoryOfWorkCreateView, self).form_valid(form)


class JournalFactoryOfWorkListView(ListView):
    model = JournalFactoryOfWork
    template_name = 'JournalFactoryOfWork/index.html'

    def get_context_data(self, **kwargs):
        MounthPicked = datetime.strptime(self.request.COOKIES.get('datetimenow'), "%d.%m.%Y")
        journal_factory_of_work_list = JournalFactoryOfWork.objects.filter(journal_factory_of_work_pub_date__month=MounthPicked.month )#datetime.now().month

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


class JournalFactoryOfWorkPrint(ListView):
    model = JournalFactoryOfWork
    template_name = 'JournalFactoryOfWork/print.html'

    def get_context_data(self, **kwargs):
        journal_factory_of_work_list = JournalFactoryOfWork.objects.all()
        journal_factory_of_work_filter = JournalFactoryOfWorkFilter(self.request.GET,
                                                                    queryset=journal_factory_of_work_list)
        context = super().get_context_data(**kwargs)
        context['title'] = "Печать"
        context['FactoryOfWorkList'] = journal_factory_of_work_list
        context['myFilter'] = journal_factory_of_work_filter
        return context


class JournalEMSUCreateView(CreateView):
    template_name = 'JournalEMSU/create.html'
    form_class = JournalEMSUForm
    success_url = '/journal/EMSU/index/'

    def get_form_kwargs(self):
        kwargs = super(JournalEMSUCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs

    def form_valid(self, form):
        JournalEMSU.journal_emsu_subdivision = self.request.user.subdivision
        return super(JournalEMSUCreateView, self).form_valid(form)


class JournalEMSUListView(ListView):
    model = JournalEMSU
    template_name = 'JournalEMSU/index.html'

    def get_context_data(self, **kwargs):
        journal_emsu_list = JournalEMSU.objects.all()

        journal_emsu_filter = JournalEMSUFilter(self.request.GET, queryset=journal_emsu_list)
        context = super().get_context_data(**kwargs)
        context['EMSUList'] = journal_emsu_list
        context['myFilter'] = journal_emsu_filter
        return context


class JournalEMSUView(View):

    def get(self, request, pk):
        EMSU = JournalEMSU.objects.get(id=pk)
        return render(request,"JournalEMSU/view.html", {"FactoryOfWorkView": EMSU,
                                                                 "title": EMSU.emsu_user})


class JournalEMSUUpdateView(UpdateView):
    model = JournalEMSU
    template_name = 'JournalEMSU/update.html'
    form_class = JournalEMSUForm
    success_url = '/journal/EMSU/index/'

    def form_valid(self, form):
        form.instance.feed_author = self.request.user
        return super(JournalEMSUUpdateView, self).form_valid(form)

    def get_form_kwargs(self):
        kwargs = super(JournalEMSUUpdateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class JournalEMSUDeleteView(DeleteView):
    model = JournalEMSU
    success_url = '/journal/EMSU/index/'
    template_name = 'JournalEMSU/delete.html'

    def get(self, *args, **kwargs):
        return self.post(*args, **kwargs)