from django.shortcuts import redirect, render
from django.urls import reverse
from .models import JournalFactoryOfWork
from django.views.generic import CreateView, ListView, View
from .forms import JournalFactoryOfWorkForm


class JournalFactoryOfWorkCreateView(CreateView):
    template_name = 'JournalFactoryOfWork/create.html'
    form_class = JournalFactoryOfWorkForm

    def get_form_kwargs(self):
        kwargs = super(JournalFactoryOfWorkCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs

class JournalFactoryOfWorkListView(ListView):
    def get(self, request):
        FactoryOfWork = JournalFactoryOfWork.objects.all()
        return render(request,"JournalFactoryOfWork/index.html",{"FactoryOfWorkList": FactoryOfWork})

class JournalFactoryOfWorkView(View):
    def get(self, request, pk):
        FactoryOfWork = JournalFactoryOfWork.objects.get(id=pk)
        return render(request,"JournalFactoryOfWork/view.html",{"FactoryOfWorkView": FactoryOfWork,
                                                                "title": FactoryOfWork.journal_factory_of_work_user})

