from django.shortcuts import render
from .models import Feed
#from users.models import


def feed(request):
    if request.user.is_authenticated:
        #user =
        news = Feed.objects.order_by('-id')
        return render(request, 'feeds/feeds_index.html', {'title': 'Новости', 'news': news})
    else:
        return render(request, 'feeds/feeds_index.html', {'title': 'Работает'})