from django.contrib import admin
from .models import Feed, Tag


class FeedAdmin(admin.ModelAdmin):
    list_display = ('feed_title', 'feed_text', 'feed_pub_date', 'feed_author', 'get_tags')
    list_display_links = ('feed_title',)
    filter_horizontal = ('tags', 'feed_file',)


class TagAdmin(admin.ModelAdmin):
    list_display = ('tag_title',)
    list_display_links = ('tag_title',)


admin.site.register(Feed, FeedAdmin)
admin.site.register(Tag, TagAdmin)



