from django.contrib import admin
from .models import File


class FileAdmin(admin.ModelAdmin):
    list_display = ('file_title', 'file_name',)
    list_display_links = ('file_title',)
    icon_name = 'insert_drive_file'


admin.site.register(File, FileAdmin)



