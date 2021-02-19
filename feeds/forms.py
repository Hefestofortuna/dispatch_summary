from django.utils.translation import ugettext_lazy as _
from .models import Feed
from django.forms import ModelForm, TextInput, Textarea, SelectMultiple
from django import forms
from material import admin
from django.contrib.admin import ModelAdmin


class FeedForm(ModelForm):


    class Meta:
        model = Feed
        fields = '__all__'