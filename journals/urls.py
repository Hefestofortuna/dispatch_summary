from django.urls import path

from . import views

urlpatterns = [
    path('create/', views.JournalFactoryOfWorkCreateView.as_view(), name='JournalFactoryOfWorkCreateView')
]
