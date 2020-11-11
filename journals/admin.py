from django.contrib import admin
from .models import JournalContractor, JournalNotice


class JournalContractorAdmin(admin.ModelAdmin):
    list_display = ('journal_contractor_subdivision', 'journal_contractor_contractor', 'journal_contractor_date_start',
                    'journal_contractor_date_finish', 'get_organization')
    list_display_links = ('journal_contractor_subdivision',)
    filter_horizontal = ('journal_contractor_file',)


class JournalNoticeAdmin(admin.ModelAdmin):
    list_display = ('journal_notice_date_plan', 'journal_notice_create_user', 'journal_notice_time_start',
                    'journal_notice_time_end', 'journal_notice_subdivision', 'journal_notice_place',
                    'journal_notice_description', 'journal_notice_date_of_entry_in_arm_lp',
                    'journal_notice_translate_user', 'journal_notice_number_acceptance',
                    'journal_notice_fact_delivery_date',)
    list_display_links = ('journal_notice_number_acceptance',)


admin.site.register(JournalContractor, JournalContractorAdmin)
admin.site.register(JournalNotice, JournalNoticeAdmin)
