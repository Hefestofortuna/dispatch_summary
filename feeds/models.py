from django.db import models
from django.utils.translation import ugettext_lazy as _
from django.conf import settings
import users.models


class Feed(models.Model):
    feed_title = models.CharField(_('Наименование новости'), max_length=128, null=False, blank=False)
    feed_text = models.TextField(_('Текст новости'), null=True, blank=True)
    feed_pub_date = models.DateTimeField(_('Дата публикации'), auto_now_add=True)
    feed_author = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, blank=True, null=True,
                                    verbose_name='Автор новости')
    tags = models.ManyToManyField('Tag', blank=True)

    def __str__(self):
        return '%s %s' % (self.feed_title, self.feed_pub_date)

    class Meta:
        verbose_name_plural = "Новости"
        verbose_name = "Новость"


class Tag(models.Model):
    tag_title = models.CharField(_('Наименование тега'), max_length=64, unique=True)

    class Meta:
        verbose_name_plural = "Теги"
        verbose_name = "Тег"



