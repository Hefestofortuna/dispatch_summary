from django.forms import ModelForm, TextInput, Textarea, SelectMultiple, DateField
from django.contrib.admin.widgets import AdminDateWidget, AdminTimeWidget, AdminSplitDateTime
from .models import JournalFactoryOfWork

class JournalFactortOfWorkForm(ModelForm):
    journal_factory_of_work_date_start = DateField(widget=AdminSplitDateTime())
    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'