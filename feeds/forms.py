from django.utils.translation import ugettext_lazy as _
from .models import Feed
from django.forms import ModelForm, TextInput, Textarea, SelectMultiple
from django import forms
from material import admin
from django.contrib.admin import ModelAdmin


class FeedForm(ModelForm):

    def __init__(self, user, *args, **kwargs):
        super(FeedForm, self).__init__(*args, **kwargs)
        self.fields['feed_text'].label = "Содержание новости"

    class Meta:
        model = Feed
        fields = ['feed_title', 'feed_text', 'feed_file', 'feed_tags', ]