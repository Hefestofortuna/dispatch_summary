import datetime
from urllib.parse import urlencode

from django.contrib import admin
from django.contrib.admin import SimpleListFilter
from django.shortcuts import redirect
from django.template.defaulttags import now
from django_filters import FilterSet, BooleanFilter

from .models import Automobile, AutomobileType, AutomobileClass, AutomobileFuel, AutomobileRequest
from .forms import AutomobileRequestForm
from django.utils.translation import ugettext_lazy as _


class AutomobileAdmin(admin.ModelAdmin):
    list_display = ('automobile_organization', 'automobile_model', 'automobile_number', 'automobile_type')
    list_display_links = ('automobile_number',)
    list_filter = ('automobile_organization', 'automobile_model', 'automobile_number', 'automobile_type',)
    icon_name = 'directions_car'


class AutomobileTypeAdmin(admin.ModelAdmin):
    list_display = ('automobile_type_text',)
    list_display_links = ('automobile_type_text',)
    icon_name = 'rv_hookup'


class AutomobileClassAdmin(admin.ModelAdmin):
    list_display = ('automobile_class_text',)
    list_display_links = ('automobile_class_text',)


class AutomobileFuelAdmin(admin.ModelAdmin):
    list_display = ('automobile_fuel_text',)
    list_display_links = ('automobile_fuel_text',)
    icon_name = 'local_gas_station'


class AutomobileRequestAdmin(admin.ModelAdmin):
    list_display = ('automobile_request_mission', 'automobile_request_subdivision', 'automobile_request_client',
                    'automobile_request_executor', 'automobile_request_date_of_travel', 'automobile_request_agreed')
    list_display_links = ('automobile_request_mission', 'automobile_request_subdivision', 'automobile_request_client',
                          'automobile_request_executor', 'automobile_request_date_of_travel', 'automobile_request_agreed')
    list_filter = ('automobile_request_subdivision', 'automobile_request_client', 'automobile_request_executor',
                   'automobile_request_date_of_travel', 'automobile_request_agreed')
    search_fields = ('automobile_request_mission',)
    date_hierarchy = 'automobile_request_date_of_travel'
    #list_editable = ('automobile_request_agreed',)
    icon_name = 'view_list'
    form = AutomobileRequestForm

    def get_form(self, request, obj=None, change=False, **kwargs):
        automobile_form = super(AutomobileRequestAdmin, self).get_form(request, obj, **kwargs)
        automobile_form.base_fields['automobile_request_client'].initial = request.user.pk
        automobile_form.base_fields['automobile_request_subdivision'].initial = request.user.subdivision
        return automobile_form

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


admin.site.register(Automobile, AutomobileAdmin)
admin.site.register(AutomobileType, AutomobileTypeAdmin)
admin.site.register(AutomobileClass, AutomobileClassAdmin)
admin.site.register(AutomobileFuel, AutomobileFuelAdmin)
admin.site.register(AutomobileRequest, AutomobileRequestAdmin)
