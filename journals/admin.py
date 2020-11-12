from django.contrib import admin
from .models import JournalContractor, JournalNotice, JournalOrderObject, JournalOrderTurningOff, JournalOrderTurningOn, \
    TypeOfWork


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


class JournalOrderObjectAdmin(admin.ModelAdmin):
    list_display = ('journal_order_object_subdivision', 'journal_order_object_type_of_work',
                    'journal_order_object_application_note', 'journal_order_object_pub_date',
                    #'journal_order_object_journal_order_turning_on', 'journal_order_object_journal_order_turning_off',
                    )
    list_display_links = ('journal_order_object_subdivision',)


class JournalOrderTurningOffAdmin(admin.ModelAdmin):
    list_display = ('journal_order_turning_off_inclusion_number', 'journal_order_turning_off_datetime_off',
                    'journal_order_turning_off_responsible_shns_user_off',
                    #'journal_order_turning_off_responsible_shchd_user_off', 'journal_order_turning_off_description',
                    'journal_order_turning_off_pub_date',)
    list_display_links = ('journal_order_turning_off_inclusion_number',)


class JournalOrderTurningOnAdmin(admin.ModelAdmin):
    list_display = ('journal_order_turning_on_permit_number', 'journal_order_turning_on_datetime_on',
                    'journal_order_turning_on_responsible_shns_user_on',
                    'journal_order_turning_on_responsible_shchd_user_on', 'journal_order_turning_on_allowed_ds',
                    #'journal_order_turning_on_pub_date',
                    )
    list_display_links = ('journal_order_turning_on_permit_number',)


class TypeOfWorkAdmin(admin.ModelAdmin):
    list_display = ('type_of_work_title',)
    list_display_links = ('type_of_work_title',)


admin.site.register(JournalContractor, JournalContractorAdmin)
admin.site.register(JournalNotice, JournalNoticeAdmin)
admin.site.register(JournalOrderObject, JournalOrderObjectAdmin)
admin.site.register(JournalOrderTurningOff, JournalOrderTurningOffAdmin)
admin.site.register(JournalOrderTurningOn, JournalOrderTurningOnAdmin)
admin.site.register(TypeOfWork, TypeOfWorkAdmin)
