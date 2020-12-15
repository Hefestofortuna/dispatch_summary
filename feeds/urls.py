from django.urls import path
from . import views

urlpatterns = [
    path('index/', views.post_list, name='feed'),
    path('create/', views.FeedCreateView.as_view(), name='FeedCreate'),
    path('update/', views.FeedUpdateView.as_view(), name='FeedUpdate'),
    path('view/<int:pk>', views.FeedView.as_view(), name='FeedView')
]