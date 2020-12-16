from django.db import models
from django.utils.translation import ugettext_lazy as _
import users.models


class FeedBack(models.Model):
    feedback_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, blank=True, null=True,
                                      verbose_name='Контактное лицо')
    feedback_theme = models.CharField(_('Тема сообщения'), max_length=64, null=False)
    feedback_message = models.TextField(_('Сообщение'), null=False)
    feedback_state = models.BooleanField(_('Состояние'))
    feedback_pub_date = models.DateTimeField(_('Дата'), auto_now=True, null=False)

    def __str__(self):
        return '%s %s' % (self.feedback_theme, self.feedback_pub_date)

    class Meta:
        verbose_name_plural = "Сообщения"
        verbose_name = "Обратная связь"
