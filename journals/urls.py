from django.urls import path

from . import views

urlpatterns = [
    path('FactoryOfWork/create/', views.JournalFactoryOfWorkCreateView.as_view(), name='JournalFactoryOfWorkCreateView'),
    path('FactoryOfWork/index/', views.JournalFactoryOfWorkListView.as_view(), name='JournalFactoryOfWorkListView'),
    path('FactoryOfWork/print/', views.JournalFactoryOfWorkPrint.as_view(), name='JournalFactoryOfWorkPrint'),
    path('FactoryOfWork/view/<int:pk>', views.JournalFactoryOfWorkView.as_view(), name='JournalFactoryOfWorkView'),
    path('FactoryOfWork/update/<int:pk>', views.JournalFactoryOfWorkUpdateView.as_view(), name='JournalFactoryOfWorkUpdate'),
    path('FactoryOfWork/delete/<int:pk>', views.JournalFactoryOfWorkDeleteView.as_view(), name='JournalFactoryOfWorkDelete'),
    path('EMSU/create/', views.JournalEMSUCreateView.as_view(), name='JournalEMSUCreateView'),
    path('EMSU/index/', views.JournalEMSUListView.as_view(), name='JournalEMSUListView'),
    path('EMSU/view/<int:pk>', views.JournalEMSUView.as_view(), name='JournalEMSUView'),
    path('EMSU/update/<int:pk>', views.JournalEMSUUpdateView.as_view(), name='JournalEMSUUpdate'),
    path('EMSU/delete/<int:pk>', views.JournalEMSUDeleteView.as_view(), name='JournalEMSUDelete'),
]
