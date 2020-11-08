from django.db import models
from django.utils.translation import ugettext_lazy as _
from django.conf import settings
import users.models
import folders.models


def upload_to(instance, filename):
    return '%s/%s' % (instance.file_author.get_organization(), filename)


class File(models.Model):
    file_title = models.CharField(_('Наименование файла'), max_length=128, null=False, blank=False)
    file_name = models.FileField(_('Файл'), blank=True, null=True, upload_to=upload_to)
    file_author = models.ForeignKey(users.models.User, on_delete=models.DO_NOTHING, verbose_name='Автор файла')
    file_folder = models.ForeignKey(folders.models.Folder, on_delete=models.CASCADE,
                                    verbose_name='Папка в которой распологается файл', null=True, blank=True)

    class Meta:
        verbose_name_plural = "Файл"
        verbose_name = "Файлы"
