from django.contrib.admin.widgets import AdminSplitDateTime, AdminTimeWidget
from django.forms import ModelForm, Textarea, Select, ModelChoiceField, SplitDateTimeField, TextInput, RadioSelect, \
    ChoiceField, CharField
from django.utils.translation import ugettext_lazy as _

from subdivisions.models import Subdivision
from users.models import User
from .models import AutomobileRequest


class AutomobileRequestForm(ModelForm):
    automobile_request_client = ModelChoiceField(queryset=User.objects.all(),
                                                    label=_('Кому'),
                                                    empty_label=None)
    automobile_request_subdivision = ModelChoiceField(queryset=Subdivision.objects.all(),
                                                           label=_('Подразделение'),
                                                           empty_label=None)
    automobile_request_executor = ModelChoiceField(queryset=User.objects.
                                                           filter(groups__name='Водители'),
                                                          label=_('Водитель'), blank=True)
    automobile_request_agreed = ChoiceField(label=_('Согласованно'), choices=((True, 'Да'), (False, 'Нет'),
                                                                              (None, 'Неизвестно')))

    def __init__(self, *args, **kwargs):
        super(AutomobileRequestForm, self).__init__(*args, **kwargs)
        self.fields['automobile_request_executor'].required = False
        self.fields['automobile_request_agreed'].required = False

    class Meta:
        model = AutomobileRequest
        fields = ['automobile_request_date_of_travel', 'automobile_request_client', 'automobile_request_subdivision',
                  'automobile_request_mission', 'automobile_request_executor', 'automobile_request_automobile',
                  'automobile_request_arrival_time', 'automobile_request_return_time', 'automobile_request_return_time',
                  'automobile_request_odometer', 'automobile_request_agreed']

