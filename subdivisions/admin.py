from django.contrib import admin
from .models import Subdivision


class SubdivisionAdmin(admin.ModelAdmin):
    list_display = ('subdivision_title', 'ekasui_title', 'asui_code', 'organization')
    list_display_links = ('subdivision_title',)


admin.site.register(Subdivision, SubdivisionAdmin)
