from django.urls import path
from . import views

urlpatterns = [
    path('/index/', views.post_list, name='feed')
]