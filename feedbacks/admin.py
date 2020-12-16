from django.contrib import admin
from .models import FeedBack


class FeedBackAdmin(admin.ModelAdmin):
    list_display = ('feedback_user', 'feedback_theme', 'feedback_message', 'feedback_state', 'feedback_pub_date')
    list_display_links = ('feedback_theme',)


admin.site.register(FeedBack, FeedBackAdmin)



