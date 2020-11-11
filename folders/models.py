from django.db import models
from django.utils.translation import ugettext_lazy as _
import organizations.models
import feeds.models
from mptt.models import MPTTModel, TreeForeignKey


class Folder(MPTTModel):
    name = models.CharField(_('Наименование папки'), max_length=64)
    parent = TreeForeignKey('self', on_delete=models.CASCADE, verbose_name='Родитесльская папка', null=True,
                                   blank=True)
    organization = models.ForeignKey(organizations.models.Organization, on_delete=models.CASCADE,
                                     verbose_name='Организация', null=True, blank=True)
    tag = models.ForeignKey(feeds.models.Tag, on_delete=models.SET_NULL, verbose_name='Тег', null=True, blank=True)
    folder_pub_date = models.DateTimeField(_('Дата создания'), auto_now_add=True)

    def __str__(self):
        return '%s %s' % (self.name, self.organization)

    class Meta:
        verbose_name_plural = "Папка"
        verbose_name = "Папки"
