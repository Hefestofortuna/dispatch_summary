import django_filters
from .models import *

class JournalFactoryOfWorkFilter(django_filters.FilterSet):

    def __init__(self, data=None, queryset=None, *, request=None, prefix=None):
        super(JournalFactoryOfWorkFilter, self).__init__(data=data, queryset=queryset, request=request, prefix=prefix)

    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'
