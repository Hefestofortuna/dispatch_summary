from django.contrib import admin
from .models import Organization


class OrganizationAdmin(admin.ModelAdmin):
    list_display = ('organization_title', 'short_title', 'asui_code')
    list_display_links = ('organization_title',)


admin.site.register(Organization, OrganizationAdmin)



