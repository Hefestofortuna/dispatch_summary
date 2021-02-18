from django.db import models
from django.db.models import Q
from django.utils.translation import ugettext_lazy as _
import organizations.models
import subdivisions.models
import users.models
import stations.models


class JournalContractor(models.Model):
    journal_contractor_contractor = models.ForeignKey(organizations.models.Contractor, on_delete=models.SET_NULL,
                                                      null=True, blank=False, verbose_name='Подряная организация')
    journal_contractor_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                                   null=True, blank=False, verbose_name='Место проведения работ')
    journal_contractor_date_start = models.DateTimeField(_('Дата начала'), null=False, blank=False)
    journal_contractor_date_finish = models.DateTimeField(_('Дата завершения'), null=False, blank=False)
    journal_contractor_notice = models.CharField(_('Предупреждение'), null=False, blank=False, max_length=128)
    journal_contractor_ppr = models.CharField(_('ППР'), null=False, blank=False, max_length=128)
    journal_contractor_certificate_of_admission = models.CharField(_('Акт-допуск'), null=False, blank=False,
                                                                   max_length=128)
    journal_contractor_admission_to_work = models.CharField(_('Наряд допуск'), null=False, blank=False,
                                                            max_length=128)
    journal_contractor_cable_inspection_document = models.CharField(_('Акт проверки трассы кабелей'), null=False,
                                                                    blank=False, max_length=128)
    journal_contractor_cable_responsible_executor = models.CharField(_('Ответственный исполнитель'), null=False,
                                                                     blank=False, max_length=128)
    journal_contractor_cable_responsible_manager = models.CharField(_('Ответственный руководитель'), null=False,
                                                                    blank=False, max_length=128)
    journal_contractor_cable_date_and_number_of_order = models.CharField(_('№ и дата приказа'), null=False,
                                                                         blank=False, max_length=128)
    journal_contractor_responsible_user_for_subdivision = models.ForeignKey(users.models.User,
                                                                            on_delete=models.SET_NULL, null=True,
                                                                            blank=False,
                                                                            verbose_name='Отвественный по ШЧ')
    journal_contractor_nature_of_work = models.CharField(_('Характер выполняемых работ'), max_length=128, null=False,
                                                         blank=False)
    journal_contractor_project_title = models.CharField(_('Титул проекта'), max_length=128, null=False, blank=False)
    journal_contractor_file = models.ManyToManyField('files.File', blank=True,
                                                     verbose_name='Прикрепленные файлы')

    def get_organization(self):
        return organizations.models.Organization.objects.filter(subdivision__journalcontractor=self.pk).get()

    get_organization.short_description = "Организация"

    def __str__(self):
        return '%s - %s c  %s по %s' % (self.journal_contractor_contractor, self.journal_contractor_station,
                                        self.journal_contractor_date_start, self.journal_contractor_date_finish)

    class Meta:
        verbose_name = 'Работа подрядной организации'
        verbose_name_plural = 'Работа подрядных организаций'


class JournalNotice(models.Model):
    journal_notice_date_plan = models.DateField(_('Дата выполенния работ'), null=False, blank=False)
    journal_notice_time_start = models.TimeField(_('Начальное время по МСК'), null=False, blank=False)
    journal_notice_time_end = models.TimeField(_('Конечное время по МСК'), null=False, blank=False)
    journal_notice_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                               null=True, blank=False, verbose_name='Место на предупреждение')
    journal_notice_description = models.TextField(_('Описание'), null=False, blank=False)
    journal_notice_place = models.CharField(_('Место работ (№ пути, километр, пикет)'), max_length=128, null=False,
                                            blank=False)
    journal_notice_date_of_entry_in_arm_lp = models.DateTimeField(_('Дата и время внесения в АРМ-ЛП по МСК'), null=True,
                                                                  blank=True)
    journal_notice_create_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True, blank=False,
                                                   verbose_name='Пользователь')
    journal_notice_translate_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True,
                                                      blank=False, verbose_name='Пользователь передавший в АРМ-"ЛП"',
                                                      related_name='+')
    journal_notice_number_acceptance = models.IntegerField(_('Номер принятия'), unique=True, null=False, blank=True)
    journal_notice_fact_delivery_date = models.DateTimeField(_('Время фактического конца работ'), auto_now_add=True)
    journal_notice_pub_date = models.DateTimeField(_('Время публикации'), auto_now_add=True)

    def __str__(self):
        return '%s - %s' % (self.journal_notice_station, self.journal_notice_number_acceptance)

    class Meta:
        verbose_name = 'Предупреждение на производство работы'
        verbose_name_plural = 'Предупреждения на производство работ'


class JournalOrder(models.Model):
    journal_order_object_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                                     null=True, blank=False, verbose_name='Подразделение')
    journal_order_object_type_of_work = models.ForeignKey('TypeOfWork', on_delete=models.SET_NULL, null=True,
                                                          blank=False, verbose_name='Наименовние работ')
    journal_order_object_application_note = models.TextField(_('Примечание заявки'), null=False, blank=False)

    journal_order_turning_off_permit_number = models.IntegerField(_('Номер выключения'), unique=True, null=False,
                                                                  blank=False)
    journal_order_turning_off_datetime_off = models.DateTimeField(_('Дата и время выключения'), null=True, blank=True)
    journal_order_turning_off_responsible_shns_user_off = models.ForeignKey(users.models.User,
                                                                            on_delete=models.SET_NULL,
                                                                            null=True,
                                                                            blank=True,
                                                                            limit_choices_to=Q(
                                                                                groups__name='ШН'
                                                                            ) | Q(
                                                                                groups__name='ШНС'
                                                                            ),
                                                                            verbose_name='Ответственный ШН/ШНС при '
                                                                                         'выключении',
                                                                            related_name='+')
    journal_order_turning_off_responsible_shchd_user_off = models.ForeignKey(users.models.User,
                                                                             on_delete=models.SET_NULL,
                                                                             null=True, blank=True,
                                                                             limit_choices_to=Q(
                                                                                 groups__name='ШЧД'
                                                                             ) | Q(
                                                                                 groups__name='ШЧДC'
                                                                             ),
                                                                             verbose_name='Отвественный ШЧД/ШЧДС при '
                                                                                          'выключении',
                                                                             related_name='+')
    journal_order_turning_off_allowed_ds = models.CharField(_('Расшешено ДС'), max_length=128, null=True, blank=True)
    journal_order_turning_off_allow_shch_user = models.ForeignKey(users.models.User,
                                                                  limit_choices_to=Q(groups__name='ШЧ'),
                                                                  on_delete=models.SET_NULL, null=True, blank=True,
                                                                  verbose_name='Разрешено ШЧ')

    journal_order_turning_on_inclusion_number = models.IntegerField(_('Номер включения'), unique=True, null=True,
                                                                    blank=True)
    journal_order_object_on_datetime_on = models.DateTimeField(_('Дата и время включения'), null=True, blank=True)
    journal_order_object_on_responsible_shns_user_on = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                                                         null=True, blank=True,
                                                                         limit_choices_to=Q(
                                                                             groups__name='ШН'
                                                                         ) | Q(
                                                                             groups__name='ШНС'
                                                                         ),
                                                                         verbose_name='Ответственный ШН/ШНС при '
                                                                                      'включении',
                                                                         related_name='+')
    journal_order_object_on_responsible_shchd_user_on = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                                                          null=True,
                                                                          blank=True,
                                                                          limit_choices_to=Q(
                                                                              groups__name='ШЧД'
                                                                          ) | Q(
                                                                              groups__name='ШЧДC'
                                                                          ),
                                                                          verbose_name='Отвественный ШЧД/ШЧДС при '
                                                                                       'включении',
                                                                          related_name='+')
    journal_order_turning_on_description = models.TextField(_('Примечание к включению'), null=True, blank=True)

    journal_order_pub_date = models.DateTimeField(_('Дата публикации'), auto_now_add=True)

    def __str__(self):
        return '%s-%s-%s' % (self.journal_order_object_station, self.journal_order_object_type_of_work,
                             self.journal_order_pub_date)

    class Meta:
        verbose_name = 'Приказ на включение и выключение устройства'
        verbose_name_plural = 'Приказы на включение и выключение устройств'


class JournalEMSU(models.Model):
    journal_emsu_date_setup = models.DateField(_('Дата установки'))
    journal_emsu_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL, null=True,
                                             blank=False, verbose_name='Станция')
    journal_emsu_subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.SET_NULL,
                                                 null=True, blank=False, verbose_name='Подразделение')
    journal_emsu_switch_number = models.IntegerField(_('Номер стрелки'))
    journal_emsu_power_supply = models.ForeignKey('AmperageType', on_delete=models.SET_NULL,
                                                  null=True, blank=True, verbose_name='Источник питания')
    journal_emsu_engine_number = models.IntegerField(_('Номер двигателя ЭМСУ'))
    journal_emsu_date_create = models.DateField(_('Год выпуска двигателя ЭМСУ'))

    journal_emsu_msp_normal_voltage_plus = models.DecimalField(_('Напряжение при нормальном переводе двигателя в '
                                                                 'плюсовое положение, В'),
                                                               max_digits=5, decimal_places=2, null=True)
    journal_emsu_msp_normal_voltage_minus = models.DecimalField(
        _('Напряжение при нормальном переводе двигателя в минусовое положение, В'),
        max_digits=5, decimal_places=2, null=True)

    journal_emsu_msp_friction_voltage_plus = models.DecimalField(
        _('Напряжение при работе на фрикцию двигателя в плюсовом положении, В'),
        max_digits=5, decimal_places=2, null=True)
    journal_emsu_msp_friction_voltage_minus = models.DecimalField(
        _('Напряжение при работе на фрикцию двигателя в минусовом положении, В'),
        max_digits=5, decimal_places=2, null=True)

    journal_emsu_emsu_normal_voltage_plus = models.DecimalField(
        _('Напряжение при нормальном переводе двигателя в плюсовое положение, В'),
        max_digits=5, decimal_places=2, null=True)
    journal_emsu_emsu_normal_voltage_minus = models.DecimalField(
        _('Напряжение при нормальном переводе двигателя в минусовое положение, В'),
        max_digits=5, decimal_places=2, null=True)

    journal_emsu_emsu_friction_voltage_plus = models.DecimalField(
        _('Напряжение при работе на фрикцию двигателя в плюсовом положении, В'),
        max_digits=5, decimal_places=2, null=True)
    journal_emsu_emsu_friction_voltage_minus = models.DecimalField(
        _('Напряжение при работе на фрикцию двигателя в минусовом положении, В'),
        max_digits=5, decimal_places=2, null=True)

    journal_emsu_emsu_translation_effort_plus = models.DecimalField(
        _('Усилие перевода при работе на фрикцию, кгс(1кгс = 9.81 Ньютона в плюсовом положении)'), max_digits=4,
        decimal_places=2, null=True)
    journal_emsu_emsu_translation_effort_minus = models.DecimalField(
        _('Усилие перевода при работе на фрикцию, кгс(1кгс = 9.81 Ньютона в минусовом полождении)'), max_digits=4,
        decimal_places=2, null=True)
    journal_emsu_pub_date = models.DateTimeField(_('Дата публикации записи'), auto_now_add=True)

    class Meta:
        verbose_name = 'Учет вигателей ЭМСУ'
        verbose_name_plural = 'Учет двигателя ЭМСУ'


class JournalInspector(models.Model):
    journal_inspector_date_find = models.DateField(_('Дата выявления предотказного состояния'))
    journal_inspector_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                                  null=True, blank=False,
                                                  verbose_name='Место предотказного состояния')
    journal_inspector_parameter = models.CharField(_('Параметр предотказного состояния'), max_length=512)
    journal_inspector_responsible_organization = models.ForeignKey(organizations.models.Organization,
                                                                   on_delete=models.SET_NULL,
                                                                   null=True, blank=False,
                                                                   verbose_name='Ответсвенное предприятие')
    journal_inspector_user_find = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True,
                                                    blank=False,
                                                    verbose_name='Выявил на месте')
    journal_inspector_transferred = models.CharField(_('Передано'), max_length=64)
    journal_inspector_date_elimination = models.DateField(_('Устранить замечание до'))
    journal_inspector_date_finish = models.DateField(_('Дата устранения замечания'), null=True, blank=True)
    journal_inspector_control_elimination = models.BooleanField(_('Контроль фактического устранения'), default=False)

    class Meta:
        verbose_name_plural = 'Замечания инспекторов'
        verbose_name = 'Замечание инспектора'


class JournalFactoryOfWork(models.Model):
    journal_factory_of_work_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True,
                                                     blank=False,
                                                     verbose_name='ФИО сотрудника')
    journal_factory_of_work_date_start = models.DateTimeField(_('Начало периода'))
    journal_factory_of_work_date_finish = models.DateTimeField(_('Конец периода'))
    journal_factory_of_work_classifier = models.ForeignKey('ClassifierOfWork', on_delete=models.SET_NULL, null=True,
                                                           blank=False, verbose_name='Классификация записи')
    journal_factory_of_work_note = models.CharField(_('Примечание'), max_length=256, null=True, blank=True)
    journal_factory_of_work_subdibision = models.ForeignKey(subdivisions.models.Subdivision,
                                                            on_delete=models.SET_NULL,
                                                            null=True, blank=False, verbose_name='Подразделение')
    journal_factory_of_work_who_added = models.ForeignKey(users.models.User, on_delete=models.SET_NULL, null=True,
                                                          blank=False, verbose_name='Кто добавил', related_name='+')
    journal_factory_of_work_pub_date = models.DateTimeField(_('Дата публикации'), auto_now=True)

    def __str__(self):
        return '%s-%s' % (self.journal_factory_of_work_user, self.journal_factory_of_work_date_start)

    class Meta:
        verbose_name = 'Нахождение работников'
        verbose_name_plural = 'Нахождения работников'


class JournalDisconnection(models.Model):
    journal_disconnection_date = models.DateField(_('Дата отключения'), null=False, blank=False)
    journal_disconnection_time_start = models.TimeField(_('Начало'), null=False, blank=False)
    journal_disconnection_time_finish = models.TimeField(_('Кончало'), null=False, blank=False)
    journal_disconnection_time_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                                           null=True, blank=False, verbose_name='Место')
    journal_disconnection_what_disconnected = models.CharField(_('Что отключается'), null=False, blank=False,
                                                               max_length=256)
    journal_disconnection_description = models.CharField(_('Опиасание'), null=True, blank=True,
                                                         max_length=256)
    journal_disconnection_pub_date = models.DateTimeField(_('Дата публикации'), auto_now_add=True, null=True)
    journal_disconnection_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                                   null=True, blank=False, verbose_name='Кто опубликовал')

    def __str__(self):
        return '%s %s' % (self.journal_disconnection_time_station, self.journal_disconnection_what_disconnected)

    class Meta:
        verbose_name = 'Отлючение'
        verbose_name_plural = 'Отлючения'


class JournalFireSystem(models.Model):
    journal_fire_system_date = models.DateTimeField(_('Дата'), null=False, blank=False)
    journal_fire_system_character = models.CharField(_('Характер неисправности'), null=False, blank=False,
                                                     max_length=256)
    journal_fire_system_reported = models.CharField(_('Сообщил'), null=False, blank=False,
                                                    max_length=56)
    journal_fire_system_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                                    null=True, blank=False, verbose_name='Объект')
    journal_fire_system_datetime_fix = models.DateTimeField(_('Дата устранения'), null=True, blank=True)
    journal_fire_system_reported_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                                          null=True, blank=True, verbose_name='Доложил об устранении')
    journal_fire_system_confirmed_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                                           null=True, blank=True, verbose_name='Подтвердил',
                                                           related_name='+')
    journal_fire_system_description = models.CharField(_('Примечание'), null=True, blank=True,
                                                       max_length=256)
    journal_fire_system_finished = models.BooleanField(_('Завершено'))
    journal_fire_system_pub_date = models.DateTimeField(_('Дата публикации'), auto_now_add=True, null=True)

    def __str__(self):
        return self.journal_fire_system_character

    class Meta:
        verbose_name = 'Замечание системы пожаротушения'
        verbose_name_plural = 'Замечания систем пожаротушения'


class JournalCable(models.Model):
    journal_cable_date_find = models.DateTimeField(_('Дата обнаружения'), null=False, blank=False)
    journal_cable_station = models.ForeignKey(stations.models.Station, on_delete=models.SET_NULL,
                                              null=True, blank=True, verbose_name='Станция/Перегон')
    journal_cable_place = models.CharField(_('Место укладки кабеля и длинна кабеля, м'), null=False, blank=False,
                                           max_length=256)
    journal_cable_type = models.BooleanField(_('Кабель/Устройство'))
    journal_cable_brand = models.CharField(_('Марка и жильность кабеля'), null=False, blank=False, max_length=128)
    journal_cable_om = models.FloatField(_('R изоляция (мОм)'), null=False, blank=False)
    journal_cable_break = models.BooleanField(_('Обрыв'))
    journal_cable_description = models.CharField(_('Описание'), null=False, blank=False, max_length=256)
    journal_cable_user = models.ForeignKey(users.models.User, on_delete=models.SET_NULL,
                                           null=True, blank=True,
                                           limit_choices_to=Q(
                                               groups__name='ШН'
                                           ) | Q(
                                               groups__name='ШНС'
                                           ),
                                           verbose_name='Передал')
    journal_cable_finish = models.BooleanField(_('Устранено'))
    journal_cable_date_finish = models.DateTimeField(_('Дата устранения'), null=True, blank=True)
    journal_cable_measures = models.CharField(_('Принятые меры'), null=True, blank=True, max_length=128)
    journal_cable_pub_date = models.DateTimeField(_('Дата публикации'), auto_now=True)

    def __str__(self):
        return self.journal_cable_description

    class Meta:
        verbose_name = 'Учет кабеля СЦБ'
        verbose_name_plural = 'Учет кабелей СЦБ'


class ClassifierOfWork(models.Model):
    classifier_of_work_title = models.CharField(_('Классификтор'), max_length=64)
    classifier_of_work_short_title = models.CharField(_('Сокращенное название классификатора'), max_length=64, null=True,
                                                      blank=False)

    def __str__(self):
        return self.classifier_of_work_title

    class Meta:
        verbose_name = 'Классификторы работы'
        verbose_name_plural = 'Классификтор работ'


class AmperageType(models.Model):
    amperage_type_title = models.CharField(_('Питание'), max_length=128)

    def __str__(self):
        return self.amperage_type_title

    class Meta:
        verbose_name_plural = 'Типы питания'
        verbose_name = 'Тип питания'


class TypeOfWork(models.Model):
    type_of_work_title = models.CharField(_('Наименование работ'), max_length=128, unique=True)

    def __str__(self):
        return self.type_of_work_title

    class Meta:
        verbose_name = 'Наименование работы'
        verbose_name_plural = 'Наименования работ'
