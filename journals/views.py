from django.shortcuts import render
from .forms import JournalFactortOfWorkForm


def JournalFactoryOfWorkCreateView(request):
    form = JournalFactortOfWorkForm()
    return render(request, 'JournalFactoryOfWork/create.html', {'form': form})
