from django.urls import path
from .views import LogoutView
from . import views
from django.contrib.auth.views import LoginView

urlpatterns = [
    path('/logout/', LogoutView.as_view(template_name = 'main/login.html') , name='logout'),
    path('/login/', LoginView.as_view(template_name = 'main/login.html'), name='login'),
]