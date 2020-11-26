from django.urls import path
from .views import BBLogoutView

urlpatterns = [
    path('/logout/', BBLogoutView.as_view() , name='logout')
]