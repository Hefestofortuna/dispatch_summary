from django.contrib.auth.models import AbstractUser
from dispatch_summary.application.subdivisions.models import Subdivision
from django.db import models
from django.utils.translation import ugettext_lazy as _


class User(AbstractUser):
    middle_name = models.CharField(_('Отчество'), max_length=150, blank=True)
    subdivision = models.ForeignKey(Subdivision)

    def get_fio(self):
        return '%s %s %s' % (self.last_name, self.first_name, self.middle_name)

    def __str__(self):
        return self.get_fio()

    class Meta:
        verbose_name_plural = "Пользователи"
        verbose_name = "Пользователь"


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    phone = models.CharField(_('Номер телефона'), max_length=11, null=True)
    email = models.EmailField(_('Электронная почта'), null=True)
    working = models.BooleanField(_('Работает'))
    remark = models.TextField(_('Примечание'), null=True)