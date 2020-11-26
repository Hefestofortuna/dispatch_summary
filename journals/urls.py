from django.urls import path
from . import views
from .views import JournalCreateView

urlpatterns = [
    path('create/', views.JournalCreateView, name='create')
]