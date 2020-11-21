from django.contrib import admin
from .models import Station


class StationAdmin(admin.ModelAdmin):
    list_display = ('station_name','station_organization')
    list_display_links = ('station_name',)


admin.site.register(Station, StationAdmin)

# Register your models here.
