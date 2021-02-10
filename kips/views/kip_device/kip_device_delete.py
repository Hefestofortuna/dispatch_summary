from django.views.generic.edit import DeleteView
from django.urls import reverse_lazy

from kips.models import KipDevice

class KipDeviceDeleteView(DeleteView):
    model = KipDevice
    template_name = "kip_device/kip_device_delete.html"
    success_url = reverse_lazy('kip_device_list')