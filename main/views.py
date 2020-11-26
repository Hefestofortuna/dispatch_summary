from django.shortcuts import render
from django.contrib.auth.views import LogoutView
from django.contrib.auth.mixins import LoginRequiredMixin

class BBLogoutView(LoginRequiredMixin, LogoutView):
    template_name = 'main/logout.html'
