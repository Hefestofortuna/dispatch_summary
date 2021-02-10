from django.views.generic.edit import UpdateView
from django.urls import reverse_lazy

from kips.models import KipDevice

class KipDeviceUpdateView(UpdateView):
    model = KipDevice
    fields = '__all__'
    template_name = "kip_device/kip_device_update.html"
    success_url = reverse_lazy('kip_device_list')
