from django.shortcuts import redirect
from django.urls import resolve
from django.utils.deprecation import MiddlewareMixin


class AuthRequiredMiddleware(MiddlewareMixin):

    def __init__(self, get_response):
        super().__init__(get_response)
        self.get_response = get_response

    def __call__(self, request):
        response = self.get_response(request)
        if not request.user.is_authenticated and resolve(request.path).url_name != 'login':
            return redirect('/main/login/')
        return response


class CookiesMiddleware(MiddlewareMixin):

    def __init__(self, get_response):
        super().__init__(get_response)
        self.get_response = get_response

    def __call__(self, request):
        response = self.get_response(request)
        if not request.user.is_authenticated and resolve(request.path).url_name != 'login':
            return redirect('/main/login/')
        return response