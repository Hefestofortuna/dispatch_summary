from django.contrib import admin
from .models import Feed, Tag
from .forms import FeedForm


class FeedAdmin(admin.ModelAdmin):
    list_display = ('feed_title', 'feed_text', 'feed_pub_date', 'feed_author', 'get_tags')
    list_display_links = ('feed_title',)
    list_filter = ('feed_title', 'feed_text', 'feed_pub_date', 'feed_author',)
    filter_horizontal = ('feed_tags', 'feed_file',)
    fields = ['feed_title', 'feed_text', 'feed_file', 'feed_tags', ]
    form = FeedForm
    icon_name = 'chat_bubble_outline'

    def save_model(self, request, obj, form, change):
        super(FeedAdmin, self).save_model(request, obj, form, change)
        obj.feed_author = request.user
        obj.save()


class TagAdmin(admin.ModelAdmin):
    list_display = ('tag_title',)
    list_display_links = ('tag_title',)


admin.site.register(Feed, FeedAdmin)
admin.site.register(Tag, TagAdmin)



