from django.db import models
from django.utils.translation import ugettext_lazy as _


class Organization(models.Model):
    organization_title = models.CharField(_('наименование организации'), max_length=128)
    short_title = models.CharField(_('Короткое название организациия'), max_length=16)
    asui_code = models.CharField(_('Код АСУИ'), max_length=64)