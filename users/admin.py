from django.contrib import admin
from django.contrib.auth.admin import UserAdmin
from .models import User


class UserAdmin(UserAdmin):
    list_display = ('get_fio', 'email', 'subdivision', 'get_groups', 'phone', 'working',)
    list_display_links = ('get_fio', 'get_groups',)
    list_filter = ('working', 'groups','subdivision',)
    fieldsets = (
        (('Аватар'), {'fields': ('avatar',)}),
        (('Данные пользователя'), {'fields': ('username', 'password',)}),
        (('Перснальная инфомрация'), {'fields': ('last_name', 'first_name','middle_name','email','remark','phone',)}),
        (('Рабочая инфомрация'), {'fields': ('subdivision', 'working',)}),
        (('Права доступа'), {'fields': ('is_active', 'is_staff','is_superuser','groups','user_permissions')}),
        (('Важные даты'), {'fields': ('last_login', 'date_joined',)}),
)


admin.site.register(User, UserAdmin)
