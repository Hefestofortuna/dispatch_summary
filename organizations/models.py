from django.db import models
from django.utils.translation import ugettext_lazy as _


class Organization(models.Model):
    organization_title = models.CharField(_('наименование организации'), max_length=128)
    short_title = models.CharField(_('Короткое название организациия'), max_length=16)
    asui_code = models.CharField(_('Код АСУИ'), max_length=64, blank=True, null=True)

    def __str__(self):
        return self.short_title

    class Meta:
        verbose_name_plural = "Организации"
        verbose_name = "Организация"


class Contractor(models.Model):
    contractor_title = models.CharField(_('Подрядная организация'), max_length=64)

    def __str__(self):
        return self.contractor_title

    class Meta:
        verbose_name_plural = "Подрядные организациия"
        verbose_name = "Подрядная организация"
