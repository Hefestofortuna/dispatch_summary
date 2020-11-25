from django.contrib import admin
from .models import JournalContractor, JournalNotice, JournalOrder, JournalInspector, TypeOfWork, JournalEMSU, \
    AmperageType, JournalFactoryOfWork, ClassifierOfWork


class JournalContractorAdmin(admin.ModelAdmin):
    list_display = ('journal_contractor_station', 'journal_contractor_contractor', 'journal_contractor_date_start',
                    'journal_contractor_date_finish', 'get_organization')
    list_display_links = ('journal_contractor_station',)
    filter_horizontal = ('journal_contractor_file',)


class JournalNoticeAdmin(admin.ModelAdmin):
    list_display = ('journal_notice_date_plan', 'journal_notice_create_user', 'journal_notice_time_start',
                    'journal_notice_time_end', 'journal_notice_station', 'journal_notice_place',
                    'journal_notice_description', 'journal_notice_date_of_entry_in_arm_lp',
                    'journal_notice_translate_user', 'journal_notice_number_acceptance',
                    'journal_notice_fact_delivery_date',)
    list_display_links = ('journal_notice_number_acceptance',)


class JournalOrderAdmin(admin.ModelAdmin):
    list_display = ('journal_order_object_station', 'journal_order_object_type_of_work',
                    'journal_order_object_application_note', 'journal_order_pub_date',
                    )
    list_display_links = ('journal_order_object_station',)


class JournalEMSUAdmin(admin.ModelAdmin):
    list_display = ('journal_emsu_date_setup', 'journal_emsu_station', 'journal_emsu_switch_number',
                    'journal_emsu_power_supply', 'journal_emsu_engine_number', 'journal_emsu_date_create',)
    list_display_links = ('journal_emsu_engine_number',)


class JournalInspectorAdmin(admin.ModelAdmin):
    list_display = ('journal_inspector_date_find', 'journal_inspector_station', 'journal_inspector_parameter',
                    'journal_inspector_responsible_organization', 'journal_inspector_user_find',
                    'journal_inspector_transferred', 'journal_inspector_date_elimination',
                    'journal_inspector_date_finish',
                    'journal_inspector_control_elimination',)
    list_display_links = ('journal_inspector_parameter',)
    list_filter = ('journal_inspector_control_elimination',)


class JournalFactoryOfWorkAdmin(admin.ModelAdmin):
    list_display = ('journal_factory_of_work_note','journal_factory_of_work_user',
                    'journal_factory_of_work_date_start',
                    'journal_factory_of_work_date_finish','journal_factory_of_work_classifier',
                    'journal_factory_of_work_subdibision',
                    'journal_factory_of_work_pub_date',)
    list_display_links = ('journal_factory_of_work_note',)

class ClassifierOfWorkAdmin(admin.ModelAdmin):
    list_display = ('classifier_of_work',)
    list_display_links = ('classifier_of_work',)

class TypeOfWorkAdmin(admin.ModelAdmin):
    list_display = ('type_of_work_title',)
    list_display_links = ('type_of_work_title',)

class AmperageTypeAdmin(admin.ModelAdmin):
    list_display = ('amperage_type_title',)
    list_display_links = ('amperage_type_title',)


admin.site.register(JournalContractor, JournalContractorAdmin)
admin.site.register(JournalFactoryOfWork, JournalFactoryOfWorkAdmin)
admin.site.register(JournalNotice, JournalNoticeAdmin)
admin.site.register(JournalOrder, JournalOrderAdmin)
admin.site.register(JournalInspector, JournalInspectorAdmin)
admin.site.register(TypeOfWork, TypeOfWorkAdmin)
admin.site.register(JournalEMSU, JournalEMSUAdmin)
admin.site.register(AmperageType, AmperageTypeAdmin)
admin.site.register(ClassifierOfWork, ClassifierOfWorkAdmin)
