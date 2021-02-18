from django.contrib.auth.models import AbstractUser
from django.db import models
from django.utils.translation import ugettext_lazy as _
import subdivisions.models
import organizations.models


path = lambda instance, filename: '{username}/{filename}'.format(
        username=instance.pk, filename=filename)


class User(AbstractUser):
    middle_name = models.CharField(_('Отчество'), max_length=150, blank=True, null=True)
    subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.PROTECT, blank=True, null=True,
                                    verbose_name='Подразделение')
    phone = models.CharField(_('Номер телефона'), max_length=11, blank=True, null=True)
    email = models.EmailField(_('Электронная почта'), blank=True, null=True)
    working = models.BooleanField(_('Работает'), default=True)
    remark = models.TextField(_('Примечание'), blank=True, null=True)
    avatar = models.ImageField(_('Аватар'), blank=True, null=True)
    """, upload_to=path"""

    def get_fio(self):
        return '%s %s %s' % (self.last_name, self.first_name, self.middle_name)
    get_fio.short_description = "ФИО"

    def get_organization(self):
        return organizations.models.Organization.objects.filter(subdivision__user=self.pk).get()
    get_organization.short_description = "Организация"

    def get_groups(self):
        return ",\n".join([str(p) for p in self.groups.all()])
    get_groups.short_description = "Группы"

    def get_short_full_name(self):
        return '%s %s. %s.' % (self.last_name, self.first_name[0], self.middle_name[0])

    def __str__(self):
        return self.get_fio()

    class Meta:
        verbose_name_plural = "Пользователи"
        verbose_name = "Пользователь"