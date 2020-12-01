from django.urls import path

from . import views

urlpatterns = [
    path('FactoryOfWork/create/', views.JournalFactoryOfWorkCreateView.as_view(), name='JournalFactoryOfWorkCreateView'),
    path('FactoryOfWork/list/', views.JournalFactoryOfWorkListView.as_view(), name='JournalFactoryOfWorkListView'),
    path('FactoryOfWork/view/<int:pk>', views.JournalFactoryOfWorkView.as_view(), name='JournalFactoryOfWorkView')
]
