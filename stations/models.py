from django.db import models
from django.utils.translation import ugettext_lazy as _
import organizations.models
import dga.models
import  subdivisions.models


class Station(models.Model):
    station_organization = models.ForeignKey(organizations.models.Organization, on_delete=models.SET_NULL, null=True,
                                             blank=False, verbose_name='Организация')
    station_subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.SET_NULL,null=True,
                                            blank=False, verbose_name='Подразделение')
    station_name = models.CharField(_('Навазние станции'), max_length=64)
    station_dga = models.ForeignKey(dga.models.DgaList, on_delete=models.SET_NULL, null=True, blank=True,
                                    verbose_name='Тип ДГА')
    station_type = models.CharField(_('Станция|Перегон'), choices=((1, _("Станция")), (2, _("Перегон"))), max_length=16)

    class Meta:
        verbose_name = "Станция|Перегон"
        verbose_name_plural = "Станции|Перегоны"