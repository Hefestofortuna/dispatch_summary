from django.contrib import admin
from .models import User, Profile


class UserAdmin(admin.ModelAdmin):
    list_display = ('get_fio', 'email', 'subdivision', 'get_organization')
    list_display_links = ('get_fio',)


class ProfileAdmin(admin.ModelAdmin):
    list_display = ('user', 'phone', 'working')
    list_display_links = ('user',)


admin.site.register(User, UserAdmin)
admin.site.register(Profile, ProfileAdmin)
