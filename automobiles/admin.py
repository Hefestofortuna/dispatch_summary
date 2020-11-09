from django.contrib import admin
from .models import Automobile, AutomobileType, AutomobileClass, AutomobileFuel, AutomobileRequest


class AutomobileAdmin(admin.ModelAdmin):
    list_display = ('automobile_model', 'automobile_number', 'automobile_date_of_inspection', 'automobile_organization')
    list_display_links = ('automobile_number',)


class AutomobileTypeAdmin(admin.ModelAdmin):
    list_display = ('automobile_type_text',)
    list_display_links = ('automobile_type_text',)


class AutomobileClassAdmin(admin.ModelAdmin):
    list_display = ('automobile_class_text',)
    list_display_links = ('automobile_class_text',)


class AutomobileFuelAdmin(admin.ModelAdmin):
    list_display = ('automobile_fuel_text',)
    list_display_links = ('automobile_fuel_text',)


class AutomobileRequestAdmin(admin.ModelAdmin):
    list_display = ('automobile_request_mission',)
    list_display_links = ('automobile_request_mission',)


admin.site.register(Automobile, AutomobileAdmin)
admin.site.register(AutomobileType, AutomobileTypeAdmin)
admin.site.register(AutomobileClass, AutomobileClassAdmin)
admin.site.register(AutomobileFuel, AutomobileFuelAdmin)
admin.site.register(AutomobileRequest, AutomobileRequestAdmin)
