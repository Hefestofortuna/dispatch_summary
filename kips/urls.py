from django.urls import path

from kips.views import KipDeviceDeleteView
from kips.views import KipDeviceUpdateView
from kips.views import KipDeviceDetailView
from kips.views import KipDeviceCreateView
from kips.views import KipDeviceListView
urlpatterns = [
    path('kip_device/list/', KipDeviceListView.as_view(), name='kip_device_list'),
    path('kip_device/create/', KipDeviceCreateView.as_view(), name='kip_device_create'),
    path('kip_device/detail/<int:pk>/', KipDeviceDetailView.as_view(), name='kip_device_detail'),
    path('kip_device/update/<int:pk>/', KipDeviceUpdateView.as_view(), name='kip_device_update'),
    path('kip_device/delete/<int:pk>/', KipDeviceDeleteView.as_view(), name='kip_device_delete'),
    ]
