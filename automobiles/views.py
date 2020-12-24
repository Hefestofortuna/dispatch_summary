from django.shortcuts import redirect, render
from django.urls import reverse
from django.views.generic import CreateView, ListView, View, DeleteView, UpdateView

from automobiles.forms import AutomobileRequestForm
from automobiles.models import AutomobileRequest


class AutomobileRequestCreateView(CreateView):
    template_name = 'AutomobileRequest/create.html'
    form_class = AutomobileRequestForm
    success_url = '/automobile/AutomobileRequest/create/'

    def get_form_kwargs(self):
        kwargs = super(AutomobileRequestCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class AutomobileRequestListView(ListView):
    model = AutomobileRequest
    template_name = 'AutomobileRequest/index.html'

    def get_context_data(self, **kwargs):
        automobile_request_list = AutomobileRequest.objects.all()
        context = super().get_context_data(**kwargs)
        # Add in a QuerySet of all the books
        context['AutomobileRequestList'] = automobile_request_list
        return context