import datetime
from django.db import models
from django.utils.translation import ugettext_lazy as _
from django.db.models import Q
from django.contrib.auth.models import Group
import users.models
import organizations.models
import subdivisions.models


class Automobile(models.Model):
    automobile_model = models.CharField(_('Марка автомобиля'), max_length=32)
    automobile_number = models.CharField(_('Гос номер'), max_length=9, unique=True)
    automobile_date_of_inspection = models.DateTimeField(_('Дата осмотра'), null=True, blank=True)
    automobile_type = models.ForeignKey('AutomobileType', on_delete=models.SET_NULL, null=True, blank=False,
                                        verbose_name='Тип транспортного средства')
    automobile_class = models.ForeignKey('AutomobileClass', on_delete=models.SET_NULL, null=True, blank=False,
                                         verbose_name='Тип транспортного средства по классификатору')
    automobile_fuel = models.ForeignKey('AutomobileFuel', on_delete=models.SET_NULL, null=True, blank=False,
                                        verbose_name='Вид топлива')
    automobile_organization = models.ForeignKey(organizations.models.Organization, on_delete=models.SET_NULL, null=True,
                                                blank=False, verbose_name='Организация')

    def __str__(self):
        return '%s %s' % (self.automobile_model, self.automobile_number)

    class Meta:
        verbose_name_plural = "Автомобили"
        verbose_name = "Автомобиль"


class AutomobileType(models.Model):
    automobile_type_text = models.CharField(_('Тип транспортного средства'), max_length=32)

    def __str__(self):
        return self.automobile_type_text

    class Meta:
        verbose_name_plural = "Виды транспорта"
        verbose_name = "Вид транспорта"


class AutomobileClass(models.Model):
    automobile_class_text = models.CharField(_('Тип транспортного средства по классификатору'), max_length=128)

    def __str__(self):
        return self.automobile_class_text

    class Meta:
        verbose_name_plural = "Классификации"
        verbose_name = "Классификация"


class AutomobileFuel(models.Model):
    automobile_fuel_text = models.CharField(_('Вид топлива'), max_length=128)

    def __str__(self):
        return self.automobile_fuel_text

    class Meta:
        verbose_name_plural = "Виды топлива"
        verbose_name = "Виды топлива"


class AutomobileRequest(models.Model):
    automobile_request_mission = models.CharField(_('Цель поездки'), max_length=128)
    automobile_request_subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.SET_NULL,
                                                       null=True, blank=False, verbose_name='Подразделение')
    automobile_request_client = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True, blank=False,
                                                  verbose_name='Заказчик')
    automobile_request_executor = models.ForeignKey(users.models.User, limit_choices_to=Q(groups__name='Водители'),
                                                    on_delete=models.SET_NULL, null=True, blank=True,
                                                    related_name='+', verbose_name='Исполнитель')
    automobile_request_automobile = models.ForeignKey('Automobile',
                                                    on_delete=models.SET_NULL, null=True, blank=True, verbose_name='Автотранспорт')
    automobile_request_date_of_travel = models.DateField(_('Дата поездки'), null=True, blank=False)
    automobile_request_put_date = models.DateField(_('Дата формирования заявки'),
                                                   auto_now_add=True)
    automobile_request_arrival_time = models.TimeField(_('Время прибытия'), null=True, blank=True)
    automobile_request_return_time = models.TimeField(_('Время возвращения'), null=True, blank=True)
    automobile_request_odometer = models.IntegerField(_('Одометр'), null=True, blank=True)
    automobile_request_agreed = models.BooleanField(_('Согласовано'), null=True, blank=True)

    def __str__(self):
        return '%s %s %s' % (self.automobile_request_date_of_travel, self.automobile_request_subdivision,
                             self.automobile_request_mission)

    class Meta:
        verbose_name_plural = "Заявки"
        verbose_name = "Заявка"
