from django.contrib import admin
from .models import Organization, Contractor


class OrganizationAdmin(admin.ModelAdmin):
    list_display = ('organization_title', 'short_title', 'asui_code')
    list_display_links = ('organization_title',)


class ContractorAdmin(admin.ModelAdmin):
    list_display = ('contractor_title',)
    list_display_links = ('contractor_title',)


admin.site.register(Organization, OrganizationAdmin)
admin.site.register(Contractor, ContractorAdmin)



