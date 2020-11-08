from django.contrib import admin
from .models import Folder
from mptt.admin import MPTTModelAdmin


class FolderAdmin(MPTTModelAdmin):
    list_display = ('name', 'tag', 'organization')
    list_display_links = ('name',)
    mptt_level_indent = 20


admin.site.register(Folder, FolderAdmin)
