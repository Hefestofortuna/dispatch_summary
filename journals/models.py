from django.db import models
from django.utils.translation import ugettext_lazy as _
import organizations.models
import subdivisions.models
import users.models


class JournalContractor(models.Model):
    journal_contractor_contractor = models.ForeignKey(organizations.models.Contractor, on_delete=models.SET_NULL,
                                                      null=True, blank=False, verbose_name='Подряная организация')
    journal_contractor_subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.SET_NULL,
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
        return '%s - %s c  %s по %s' % (self.journal_contractor_contractor, self.journal_contractor_subdivision,
                                        self.journal_contractor_date_start, self.journal_contractor_date_finish)

    class Meta:
        verbose_name = 'Работа подрядной организации'
        verbose_name_plural = 'Работа подрядных организаций'


class JournalNotice(models.Model):
    journal_notice_date_plan = models.DateTimeField(_('Дата выполенния работ'), null=False, blank=False)
    journal_notice_time_start = models.TimeField(_('Начальное время по МСК'), null=False, blank=False)
    journal_notice_time_end = models.TimeField(_('Конечное время по МСК'), null=False, blank=False)
    journal_notice_subdivision = models.ForeignKey(subdivisions.models.Subdivision, on_delete=models.SET_NULL,
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
        return '%s - %s' % (self.journal_notice_subdivision, self.journal_notice_number_acceptance)

    class Meta:
        verbose_name = 'Предупреждение на производство работы'
        verbose_name_plural = 'Предупреждения на производство работ'
