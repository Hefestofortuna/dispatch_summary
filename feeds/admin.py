from django.contrib import admin
from .models import Feed, Tag
from .forms import FeedForm


class FeedAdmin(admin.ModelAdmin):
    list_display = ('feed_title', 'feed_text', 'feed_pub_date', 'feed_author', 'get_tags')
    list_display_links = ('feed_title',)
    filter_horizontal = ('feed_tags', 'feed_file',)
    fields = ['feed_title', 'feed_text', 'feed_file', 'feed_tags', ]
    form = FeedForm
    icon_name = 'chat_bubble_outline'


class TagAdmin(admin.ModelAdmin):
    list_display = ('tag_title',)
    list_display_links = ('tag_title',)


admin.site.register(Feed, FeedAdmin)
admin.site.register(Tag, TagAdmin)



