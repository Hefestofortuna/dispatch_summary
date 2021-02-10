from django.urls import path

from . import views

urlpatterns = [
    path('AutomobileRequest/create/', views.AutomobileRequestCreateView.as_view(), name='AutomobileRequestCreateView'),
    path('AutomobileRequest/index/', views.AutomobileRequestListView.as_view(), name='AutomobileRequestListView'),
   # path('automobile/AutomobileRequest/print/', views.AutomobileRequestPrint.as_view(), name='AutomobileRequestPrint'),
    #path('automobile/AutomobileRequest/view/<int:pk>', views.AutomobileRequestView.as_view(), name='AutomobileRequestView'),
    path('AutomobileRequest/update/<int:pk>', views.AutomobileRequestUpdateView.as_view(), name='AutomobileRequestUpdate'),
    path('AutomobileRequest/agree/<int:pk>', views.AutomobileRequestAgreeUpdateView.as_view(), name='AutomobileRequestAgreeUpdateView'),
    path('AutomobileRequest/delete/<int:pk>', views.AutomobileRequestDeleteView.as_view(), name='AutomobileRequestDelete'),
]