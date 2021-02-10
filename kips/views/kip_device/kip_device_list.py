from django.views.generic import ListView

from kips.models import KipDevice

class KipDeviceListView(ListView):
    model = KipDevice
    template_name = "kip_device/kip_device_list.html"
