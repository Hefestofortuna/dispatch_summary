import self as self
from django.shortcuts import redirect, render
from django.urls import reverse
import urllib
from datetime import datetime
from django.views.generic import CreateView, ListView, View, DeleteView, UpdateView
from django.views.generic.edit import BaseUpdateView

from automobiles.forms import AutomobileRequestForm
from automobiles.models import AutomobileRequest


class AutomobileRequestCreateView(CreateView):
    template_name = 'AutomobileRequest/create.html'
    success_url = '/automobile/AutomobileRequest/create/'
    form_class = AutomobileRequestForm

    def get_form_kwargs(self):
        kwargs = super(AutomobileRequestCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class AutomobileRequestListView(ListView):
    model = AutomobileRequest
    template_name = 'AutomobileRequest/index.html'

    def get_context_data(self, **kwargs):
        MounthPicked = datetime.strptime(self.request.COOKIES.get('datetimenow'), "%d.%m.%Y")
        automobile_request_list = AutomobileRequest.objects.filter(automobile_request_date_of_travel__day=MounthPicked.day).order_by('-automobile_request_agreed')
        context = super().get_context_data(**kwargs)
        context['AutomobileRequestList'] = automobile_request_list
        return context


class AutomobileRequestDeleteView(DeleteView):
    model = AutomobileRequest
    success_url = '/automobile/AutomobileRequest/index/'
    template_name = 'AutomobileRequest/delete.html'

    def get(self, *args, **kwargs):
        return self.post(*args, **kwargs)


class AutomobileRequestUpdateView(UpdateView):
    model = AutomobileRequest
    template_name = 'AutomobileRequest/update.html'
    form_class = AutomobileRequestForm
    success_url = '/automobile/AutomobileRequest/index/'

    def form_valid(self, form):
        form.instance.feed_author = self.request.user
        return super(AutomobileRequestUpdateView, self).form_valid(form)

    def get_form_kwargs(self):
        kwargs = super(AutomobileRequestUpdateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class AutomobileRequestAgreeUpdateView(UpdateView):
    model = AutomobileRequest
    template_name = 'AutomobileRequest/agree.html'
    form_class = AutomobileRequestForm
    success_url = '/automobile/AutomobileRequest/index/'

    def form_valid(self, form):
        form.instance.feed_author = self.request.user
        return super(AutomobileRequestAgreeUpdateView, self).form_valid(form)

    def get_form_kwargs(self):
        kwargs = super(AutomobileRequestAgreeUpdateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs