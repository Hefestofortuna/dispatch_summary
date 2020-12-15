import os

from django.db import models
from django.utils.translation import ugettext_lazy as _
import users.models
import folders.models
from mptt.models import TreeForeignKey


def upload_to(instance, filename):
    return '%s/%s' % (instance.file_folder.get_folder_full_path(), filename)


class File(models.Model):
    file_title = models.CharField(_('Наименование файла'), max_length=128, null=False, blank=False)
    file_name = models.FileField(_('Файл'), blank=True, null=True, upload_to=upload_to)
    file_author = models.ForeignKey(users.models.User, on_delete=models.DO_NOTHING, verbose_name='Автор файла')
    file_folder = TreeForeignKey(folders.models.Folder, on_delete=models.CASCADE,
                                 verbose_name='Папка в которой распологается файл', null=True, blank=True)

    def delete(self, *args, **kwargs):
        storage, path = self.file_name.storage, self.file_name.path
        super(File, self).delete(*args, **kwargs)
        storage.delete(path)

    def __str__(self):
        return '%s %s' % (self.file_title, self.file_folder)

    def extension(self):
        name, extension = os.path.splitext(self.file_name.name)
        return extension

    class Meta:
        verbose_name_plural = "Файлы"
        verbose_name = "Файл"
