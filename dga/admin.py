from django.contrib import admin
from .models import DgaList


class DgaListAdmin(admin.ModelAdmin):
    list_display = ('dga_list_brand',)
    list_display_links = ('dga_list_brand',)


admin.site.register(DgaList, DgaListAdmin)
