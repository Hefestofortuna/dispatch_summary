from django.db import models
from django.utils.translation import ugettext_lazy as _
from django.conf import settings
from organizations.models import Organization


class Subdivision(models.Model):
    organization = models.ForeignKey(Organization, on_delete=models.PROTECT, verbose_name='Организация')
    subdivision_title = models.CharField(_('Наименование подразделения'), max_length=64)
    ekasui_title = models.CharField(_('Код ЕКАСУИ'), max_length=64, blank=True, null=True)
    asui_code = models.CharField(_('Код АСУИ'), max_length=64, blank=True, null=True)
    #leader = models.OneToOneField(settings.AUTH_USER_MODEL, on_delete=models.SET_NULL, blank=True, null=True)

    class Meta:
        verbose_name_plural = "Подразделение"
        verbose_name = "Подразделения"
