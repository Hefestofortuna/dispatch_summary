from django.contrib import admin
from .models import JournalContractor, JournalNotice, JournalOrder, JournalInspector, TypeOfWork


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


class JournalOrderAdmin(admin.ModelAdmin):
    list_display = ('journal_order_object_subdivision', 'journal_order_object_type_of_work',
                    'journal_order_object_application_note', 'journal_order_pub_date',
                    )
    list_display_links = ('journal_order_object_subdivision',)


class JournalInspectorAdmin(admin.ModelAdmin):
    list_display = ('journal_inspector_date_find', 'journal_inspector_subdivision', 'journal_inspector_parameter',
                    'journal_inspector_responsible_organization', 'journal_inspector_user_find',
                    'journal_inspector_transferred', 'journal_inspector_date_elimination',
                    'journal_inspector_date_finish',
                    'journal_inspector_control_elimination',)
    list_display_links = ('journal_inspector_parameter',)
    list_filter = ('journal_inspector_control_elimination',)


class TypeOfWorkAdmin(admin.ModelAdmin):
    list_display = ('type_of_work_title',)
    list_display_links = ('type_of_work_title',)


admin.site.register(JournalContractor, JournalContractorAdmin)
admin.site.register(JournalNotice, JournalNoticeAdmin)
admin.site.register(JournalOrder, JournalOrderAdmin)
admin.site.register(JournalInspector, JournalInspectorAdmin)
admin.site.register(TypeOfWork, TypeOfWorkAdmin)
