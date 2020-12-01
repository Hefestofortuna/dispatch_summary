import django_filters
from .models import *

class JournalFactoryOfWorkFilter(django_filters.FilterSet):
    class Meta:
        model = JournalFactoryOfWork
        fields = '__all__'