from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth.views import LogoutView, LoginView

class LogoutView(LoginRequiredMixin, LogoutView):
    None


class LoginView(LoginView):
    None

