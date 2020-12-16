from django.contrib import admin
from .models import KipDevice


class KipDeviceAdmin(admin.ModelAdmin):
    list_display = ('kip_device_number', 'kip_device_station', 'kip_device_type',
                    'kip_device_calibration_date', 'kip_device_name', 'kip_device_pub_date',)
    list_display_links = ('kip_device_number',)


admin.site.register(KipDevice, KipDeviceAdmin)