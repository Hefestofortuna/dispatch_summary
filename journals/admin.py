import datetime

from django.contrib import admin
from django.http import request
from django.shortcuts import redirect
from django.utils.http import urlencode

from .forms import JournalFactoryOfWorkForm
from .models import JournalContractor, JournalNotice, JournalOrder, JournalInspector, TypeOfWork, JournalEMSU, \
    AmperageType, JournalFactoryOfWork, ClassifierOfWork, JournalDisconnection, JournalFireSystem, JournalCable


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
    icon_name = 'settings_applications'


class JournalInspectorAdmin(admin.ModelAdmin):
    list_display = ('journal_inspector_date_find', 'journal_inspector_station', 'journal_inspector_parameter',
                    'journal_inspector_responsible_organization', 'journal_inspector_user_find',
                    'journal_inspector_transferred', 'journal_inspector_date_elimination',
                    'journal_inspector_date_finish',
                    'journal_inspector_control_elimination',)
    list_display_links = ('journal_inspector_parameter',)
    list_filter = ('journal_inspector_control_elimination',)


class JournalFactoryOfWorkAdmin(admin.ModelAdmin):
    list_display = ('journal_factory_of_work_user', 'journal_factory_of_work_date_start',
                    'journal_factory_of_work_date_finish', 'journal_factory_of_work_classifier',
                    'journal_factory_of_work_note', 'journal_factory_of_work_subdibision',
                    'journal_factory_of_work_who_added')
    list_display_links = ('journal_factory_of_work_note',)
    list_filter = ('journal_factory_of_work_user', 'journal_factory_of_work_date_start',
                    'journal_factory_of_work_date_finish', 'journal_factory_of_work_classifier',
                    'journal_factory_of_work_note', 'journal_factory_of_work_subdibision',
                    'journal_factory_of_work_who_added')
    icon_name = 'directions_walk'
    date_hierarchy = 'journal_factory_of_work_date_start'
    form = JournalFactoryOfWorkForm

    def get_form(self, request, obj=None, change=False, **kwargs):
        journal_form = super(JournalFactoryOfWorkAdmin, self).get_form(request, obj, **kwargs)
        journal_form.base_fields['journal_factory_of_work_user'].initial = request.user.pk
        return journal_form

    def save_model(self, request, obj, form, change):
        super(JournalFactoryOfWorkAdmin, self).save_model(request, obj, form, change)
        obj.journal_factory_of_work_who_added = request.user
        obj.save()

    def changelist_view(self, request, extra_context=None):
        if request.GET:
            return super().changelist_view(request, extra_context=extra_context)
        date = datetime.datetime.now()
        params = ['day', 'month', 'year']
        field_keys = ['{}__{}'.format(self.date_hierarchy, i) for i in params]
        field_values = [getattr(date, i) for i in params]
        query_params = dict(zip(field_keys, field_values))
        url = '{}?{}'.format(request.path, urlencode(query_params))
        url = '{}?{}'.format(request.path, urlencode(query_params))
        return redirect(url)


class JournalDisconnectionAdmin(admin.ModelAdmin):
    list_display = ('journal_disconnection_date', 'journal_disconnection_time_start',
                    'journal_disconnection_time_finish',
                    'journal_disconnection_time_station', 'journal_disconnection_what_disconnected',
                    'journal_disconnection_description',
                    'journal_disconnection_user',)
    list_display_links = ('journal_disconnection_description',)


class JournalFireSystemAdmin(admin.ModelAdmin):
    list_display = ('journal_fire_system_date', 'journal_fire_system_character',
                    'journal_fire_system_reported',
                    'journal_fire_system_station', 'journal_fire_system_datetime_fix',
                    'journal_fire_system_reported_user',
                    'journal_fire_system_confirmed_user', 'journal_fire_system_description',
                    'journal_fire_system_finished')
    list_display_links = ('journal_fire_system_reported',)


class JournalCableAdmin(admin.ModelAdmin):
    list_display = ('journal_cable_date_find', 'journal_cable_station',
                    'journal_cable_place',
                    'journal_cable_type', 'journal_cable_brand',
                    'journal_cable_om',
                    'journal_cable_break', 'journal_cable_description',
                    'journal_cable_user', 'journal_cable_finish', 'journal_cable_date_finish',
                    'journal_cable_measures', 'journal_cable_pub_date')
    list_display_links = ('journal_cable_brand',)


class ClassifierOfWorkAdmin(admin.ModelAdmin):
    list_display = ('classifier_of_work_short_title', 'classifier_of_work_title',)
    list_display_links = ('classifier_of_work_title',)


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
admin.site.register(JournalDisconnection, JournalDisconnectionAdmin)
admin.site.register(JournalFireSystem, JournalFireSystemAdmin)
admin.site.register(AmperageType, AmperageTypeAdmin)
admin.site.register(ClassifierOfWork, ClassifierOfWorkAdmin)
admin.site.register(JournalCable, JournalCableAdmin)
