from django.contrib.auth.models import AbstractUser
from django.db import models
from django.utils.translation import ugettext_lazy as _
import subdivisions.models


class User(AbstractUser):
    middle_name = models.CharField(_('Отчество'), max_length=150, blank=True, null=True)
    subdivision = models.OneToOneField(subdivisions.models.Subdivision, on_delete=models.PROTECT, blank=True, null=True,
                                       verbose_name='Организация')

    def get_fio(self):
        return '%s %s %s' % (self.last_name, self.first_name, self.middle_name)
    get_fio.short_description = "ФИО"

    def __str__(self):
        return self.get_fio()

    class Meta:
        verbose_name_plural = "Пользователи"
        verbose_name = "Пользователь"


class Profile(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE, verbose_name='Пользователь')
    phone = models.CharField(_('Номер телефона'), max_length=11, blank=True, null=True)
    email = models.EmailField(_('Электронная почта'), blank=True, null=True)
    working = models.BooleanField(_('Работает'), default=True)
    remark = models.TextField(_('Примечание'), blank=True, null=True)

    class Meta:
        verbose_name_plural = "Профиль"
        verbose_name = "Профили"
