from django.contrib.admin.widgets import AdminSplitDateTime
from django.forms import ModelForm, DateField, Textarea, Select, ModelChoiceField
from django.utils.translation import ugettext_lazy as _

from users.models import User
from .models import JournalFactoryOfWork


class JournalFactoryOfWorkForm(ModelForm):
    journal_factory_of_work_date_start = DateField(widget=AdminSplitDateTime(),
                                                   label=_('Начало периода'))
    journal_factory_of_work_date_finish = DateField(widget=AdminSplitDateTime(),
                                                    label=_('Конец периода'))
    journal_factory_of_work_user = ModelChoiceField(queryset=User.objects.filter(groups__name='ШН'),
                                                    label=_('Пользователь'))
    journal_factory_of_work_user.widget.attrs.update({'class': 'uk-select', })

    def __init__(self, *args, **kwargs):
        super(JournalFactoryOfWorkForm, self).__init__(*args, **kwargs)
        self.fields['journal_factory_of_work_user'].empty_label = None

    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'
        widgets = {
            "journal_factory_of_work_note": Textarea(attrs={
                'class': 'uk-textarea',
                'placeholder': 'Введите описнаие'
            }),
            "journal_factory_of_work_classifier": Select(attrs={
                'class': 'uk-select',
            }),
            "journal_factory_of_work_subdibision": Select(attrs={
                'class': 'uk-select',
            }),
        }
