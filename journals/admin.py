from django.contrib import admin
from .models import JournalContractor


class JournalContractorAdmin(admin.ModelAdmin):
    list_display = ('journal_contractor_subdivision', 'journal_contractor_contractor', 'journal_contractor_date_start',
                    'journal_contractor_date_finish', 'get_organization')
    list_display_links = ('journal_contractor_subdivision',)
    filter_horizontal = ('journal_contractor_file',)


admin.site.register(JournalContractor, JournalContractorAdmin)
