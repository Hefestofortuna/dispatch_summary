from django.shortcuts import redirect
from django.urls import reverse
from django.views.generic import CreateView
from .forms import JournalFactoryOfWorkForm


class JournalFactoryOfWorkCreateView(CreateView):
    template_name = 'JournalFactoryOfWork/create.html'
    form_class = JournalFactoryOfWorkForm

    def get_form_kwargs(self):
        kwargs = super(JournalFactoryOfWorkCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs
