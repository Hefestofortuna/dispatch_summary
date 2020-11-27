from django.shortcuts import render
from .forms import JournalFactoryOfWorkForm


def JournalFactoryOfWorkCreateView(request):
    form = JournalFactoryOfWorkForm(initial={'supervisor':request.user})
    return render(request, 'JournalFactoryOfWork/create.html', {'form': form})
