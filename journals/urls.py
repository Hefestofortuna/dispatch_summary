from django.urls import path

from . import views

urlpatterns = [
    path('FactoryOfWork/create/', views.JournalFactoryOfWorkCreateView.as_view(), name='JournalFactoryOfWorkCreateView'),
    path('FactoryOfWork/index/', views.JournalFactoryOfWorkListView.as_view(), name='JournalFactoryOfWorkListView'),
    path('FactoryOfWork/print/', views.JournalFactoryOfWorkPrint.as_view(), name='JournalFactoryOfWorkPrint'),
    path('FactoryOfWork/view/<int:pk>', views.JournalFactoryOfWorkView.as_view(), name='JournalFactoryOfWorkView'),
    path('FactoryOfWork/update/<int:pk>', views.JournalFactoryOfWorkUpdateView.as_view(), name='JournalFactoryOfWorkUpdate'),
    path('FactoryOfWork/delete/<int:pk>', views.JournalFactoryOfWorkDeleteView.as_view(), name='JournalFactoryOfWorkDelete'),
]
