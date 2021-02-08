import django_filters
from .models import *

class JournalFactoryOfWorkFilter(django_filters.FilterSet):

    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'
        filter_overrides = {
            models.CharField: {
                'filter_class': django_filters.CharFilter,
                'extra': lambda f: {
                    'lookup_expr': 'icontains',
                },
            },
            models.DateTimeField: {
                'filter_class': django_filters.CharFilter,
                'extra': lambda f: {
                    'lookup_expr': 'icontains',
                },
            },
        }


class JournalEMSUFilter(django_filters.FilterSet):

    def __init__(self, data=None, queryset=None, *, request=None, prefix=None):
        super(JournalEMSUFilter, self).__init__(data=data, queryset=queryset, request=request, prefix=prefix)

    class Meta:
        model = JournalEMSU
        fields = '__all__'
