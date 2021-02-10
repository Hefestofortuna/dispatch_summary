from django.views.generic.edit import CreateView
from django.urls import reverse_lazy

from kips.models import KipDevice

class KipDeviceCreateView(CreateView):
    model = KipDevice
    fields = '__all__'
    template_name = "kip_device/kip_device_create.html"
    success_url = reverse_lazy('kip_device_list')
