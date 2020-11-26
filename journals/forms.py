from django.contrib.admin.widgets import AdminSplitDateTime
from django.forms import ModelForm, DateField, TextInput, Textarea, Select
from django.utils.translation import ugettext_lazy as _

from .models import JournalFactoryOfWork


class JournalFactortOfWorkForm(ModelForm):
    journal_factory_of_work_date_start = DateField(widget=AdminSplitDateTime(), label=_('Начало периода'))
    journal_factory_of_work_date_finish = DateField(widget=AdminSplitDateTime(), label=_('Конец периода'))

    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'
        widgets = {
            "journal_factory_of_work_note": Textarea(attrs={
                'class': 'uk-textarea',
                'placeholder': 'Введите описнаие'
            }),
            "journal_factory_of_work_user": Select(attrs={
                'class': 'uk-select',
            }),
            "journal_factory_of_work_classifier": Select(attrs={
                'class': 'uk-select',
            }),
            "journal_factory_of_work_subdibision": Select(attrs={
                'class': 'uk-select',
            }),
        }
