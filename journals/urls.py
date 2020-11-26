from django.urls import path
from . import views
from .views import JournalCreateView
from django.views.i18n import JavaScriptCatalog

urlpatterns = [
    path('jsi18n', JavaScriptCatalog.as_view(), name='js-catlog'),
    path('create/', views.JournalCreateView, name='create')
]