from django.views.generic import DetailView

from kips.models import KipDevice


class KipDeviceDetailView(DetailView):
    model = KipDevice
    template_name = "kip_device/kip_device_detail.html"
