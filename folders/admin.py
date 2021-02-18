from django.contrib import admin
from .models import Folder
from mptt.admin import MPTTModelAdmin


class FolderAdmin(MPTTModelAdmin):
    list_display = ('name', 'tag', 'organization', 'get_folder_full_path')
    list_display_links = ('name',)
    mptt_level_indent = 20
    icon_name = 'folder'


admin.site.register(Folder, FolderAdmin)
