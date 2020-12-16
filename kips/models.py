from django.db import models
from django.db.models import Q
from django.utils.translation import ugettext_lazy as _
import organizations.models
import subdivisions.models
import users.models
import stations.models


class KipDevice(models.Model):
    kip_device_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                           null=True, blank=True, verbose_name='Станция')
    kip_device_type = models.CharField(_('Тип/Марка'), null=False, blank=False, max_length=32)
    kip_device_number = models.IntegerField(_('Заводской номер'), null=False, blank=False)
    kip_device_calibration_date = models.DateField(_('Дата калибровки'), null=False, blank=False)
    kip_device_name = models.CharField(_('Наименование'), null=False, blank=False, max_length=128)
    kip_device_pub_date = models.DateTimeField(_('Дата публикации'), auto_now=True)

    def __str__(self):
        return self.kip_device_name

    class Meta:
        verbose_name = 'Измерительный прибор'
        verbose_name_plural = 'Измерительные приборы'