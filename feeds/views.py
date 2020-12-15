from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from django.shortcuts import render
from .models import Feed
from django.views.generic import CreateView, UpdateView, View
from .forms import FeedForm


class FeedView(View):
    def get(self, request, pk):
        feed_list = Feed.objects.get(id=pk)
        return render(request, "feeds/view.html", {"feed_list": feed_list,
                                                                  "title": feed_list.feed_title})


class FeedCreateView(CreateView):
    template_name = 'feeds/create.html'
    form_class = FeedForm
    success_url = '/feed/index/'

    def form_valid(self, form):
        form.instance.feed_author = self.request.user
        return super(FeedCreateView, self).form_valid(form)

    def get_form_kwargs(self):
        kwargs = super(FeedCreateView, self).get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs


class FeedUpdateView(UpdateView):
    template_name = 'feeds/update.html'
    form_class = FeedForm
    success_url = '/feed/index/'


def feed(request):
    if request.user.is_authenticated:
        news = Feed.objects.order_by('-id')
        return render(request, 'feeds/index.html', {'title': 'Новости', 'news': news})
    else:
        return render(request, 'feeds/index.html', {'title': 'Работает'})


def post_list(request):
    object_list = Feed.objects.order_by('-id')  # order_by('-id')
    paginator = Paginator(object_list, 3)  # .. поста на каждой странице
    page = request.GET.get('page')
    if paginator.num_pages >= 8:
        last_index_minus3 = paginator.num_pages - 3
        last_index_minus5 = paginator.num_pages - 5
    else:
        last_index_minus3 = paginator.num_pages
        last_index_minus5 = paginator.num_pages
    try:
        posts = paginator.page(page)
    except PageNotAnInteger:
        # Если страница не является целым числом, поставим первую страницу
        posts = paginator.page(1)
    except EmptyPage:
        # Если страница больше максимальной, доставить последнюю страницу результатов
        posts = paginator.page(paginator.num_pages)
    if paginator.num_pages > 8:
        index_minus2 = int(page) - 2
        index_plus2 = int(page) + 2
    else:
        index_minus2 = 0
        index_plus2 = 0
    return render(request, 'feeds/index.html', {'title': 'Новости', 'page': page, 'news': posts,
                                                'last_index_minus5': last_index_minus5,
                                                'index_minus2': index_minus2,
                                                'index_plus2': index_plus2,
                                                'last_index_minus3': last_index_minus3})
