from django.shortcuts import render
from .forms import JournalFactoryOfWorkForm
from users.models import User


def JournalFactoryOfWorkCreateView(request):
    form = JournalFactoryOfWorkForm(user=request.user)
    return render(request, 'JournalFactoryOfWork/create.html', {'form': form})
