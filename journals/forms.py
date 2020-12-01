from django.contrib.admin.widgets import AdminSplitDateTime
from django.forms import ModelForm, Textarea, Select, ModelChoiceField, SplitDateTimeField
from django.utils.translation import ugettext_lazy as _

from subdivisions.models import Subdivision
from users.models import User
from .models import JournalFactoryOfWork, ClassifierOfWork


class JournalFactoryOfWorkForm(ModelForm):
    journal_factory_of_work_date_start = SplitDateTimeField(widget=AdminSplitDateTime(),
                                                            label=_('Начало периода'))
    journal_factory_of_work_date_finish = SplitDateTimeField(widget=AdminSplitDateTime(),
                                                             label=_('Конец периода'))
    journal_factory_of_work_user = ModelChoiceField(queryset=User.objects.
                                                    filter(subdivision__organization__short_title='ИрЦУАТ'),
                                                    label=_('Пользователь'),
                                                    empty_label=None)
    journal_factory_of_work_subdibision = ModelChoiceField(queryset=Subdivision.objects.
                                                           filter(organization__short_title='ИрЦУАТ'),
                                                           label=_('Подразделение'),
                                                           empty_label=None)
    journal_factory_of_work_classifier = ModelChoiceField(queryset=ClassifierOfWork.objects.all(),
                                                          label=_('Классификация записи'),
                                                          empty_label=None)
    journal_factory_of_work_user.widget.attrs.update({'class': 'uk-select', })
    journal_factory_of_work_subdibision.widget.attrs.update({'class': 'uk-select', })
    journal_factory_of_work_classifier.widget.attrs.update({'class': 'uk-select', })

    def __init__(self, user, *args, **kwargs):
        super(JournalFactoryOfWorkForm, self).__init__(*args, **kwargs)
        self.fields['journal_factory_of_work_user'].initial = user.pk
        self.fields['journal_factory_of_work_subdibision'].initial = user.subdivision

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
