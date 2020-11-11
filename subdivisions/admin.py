from django.contrib import admin
from .models import Subdivision


class SubdivisionAdmin(admin.ModelAdmin):
    list_display = ('subdivision_title', 'subdivision_leader', 'subdivision_ekasui_title', 'subdivision_asui_code', 'organization',)
    list_display_links = ('subdivision_title',)


admin.site.register(Subdivision, SubdivisionAdmin)
