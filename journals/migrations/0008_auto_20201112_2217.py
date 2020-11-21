# Generated by Django 3.1.3 on 2020-11-12 14:17

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('subdivisions', '0006_delete_contractor'),
        ('journals', '0007_journalorder_typeofwork'),
    ]

    operations = [
        migrations.CreateModel(
            name='JournalOrderObject',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('journal_order_object_application_note', models.TextField(null=True, verbose_name='Примечание заявки')),
                ('journal_order_object_pub_date', models.DateTimeField(auto_now_add=True, verbose_name='Дата публикации')),
            ],
            options={
                'verbose_name': 'Объекты подлежащие выключению|включению',
                'verbose_name_plural': 'Объект подлежащий выключению|включению',
            },
        ),
        migrations.CreateModel(
            name='JournalOrderTurningOff',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('journal_order_turning_off_inclusion_number', models.IntegerField(blank=True, null=True, unique=True, verbose_name='Номер выклчюения')),
                ('journal_order_turning_off_datetime_off', models.DateTimeField(verbose_name='Дата и время выключения')),
                ('journal_order_turning_off_description', models.TextField(blank=True, null=True, verbose_name='Примечание')),
                ('journal_order_turning_off_pub_date', models.DateTimeField(auto_now_add=True, verbose_name='Дата публикации')),
                ('journal_order_turning_off_responsible_shchd_user_off', models.ForeignKey(blank=True, limit_choices_to=models.Q(groups__name='ШЧД'), null=True, on_delete=django.db.models.deletion.SET_NULL, related_name='+', to=settings.AUTH_USER_MODEL, verbose_name='Отвественный ШЧД при выключении')),
                ('journal_order_turning_off_responsible_shns_user_off', models.ForeignKey(blank=True, limit_choices_to=models.Q(groups__name='ШН'), null=True, on_delete=django.db.models.deletion.SET_NULL, related_name='+', to=settings.AUTH_USER_MODEL, verbose_name='Ответственный ШНС при выключении')),
            ],
            options={
                'verbose_name': 'Включенные объекты',
                'verbose_name_plural': 'Включенный объект',
            },
        ),
        migrations.CreateModel(
            name='JournalOrderTurningOn',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('journal_order_turning_on_permit_number', models.IntegerField(unique=True, verbose_name='Номер разрешения')),
                ('journal_order_turning_on_datetime_on', models.DateTimeField(verbose_name='Дата и время включения')),
                ('journal_order_turning_on_allowed_ds', models.CharField(blank=True, max_length=128, null=True, verbose_name='Расшешено ДС')),
                ('journal_order_turning_on_pub_date', models.DateTimeField(auto_now_add=True, verbose_name='Дата публикации')),
                ('journal_order_turning_on_allow_shch_user', models.ForeignKey(blank=True, limit_choices_to=models.Q(groups__name='ШЧ'), null=True, on_delete=django.db.models.deletion.SET_NULL, to=settings.AUTH_USER_MODEL, verbose_name='Разрешено ШЧ')),
                ('journal_order_turning_on_responsible_shchd_user_on', models.ForeignKey(limit_choices_to=models.Q(groups__name='ШЧД'), null=True, on_delete=django.db.models.deletion.SET_NULL, related_name='+', to=settings.AUTH_USER_MODEL, verbose_name='Отвественный ШЧД при включении')),
                ('journal_order_turning_on_responsible_shns_user_on', models.ForeignKey(blank=True, limit_choices_to=models.Q(groups__name='ШН'), null=True, on_delete=django.db.models.deletion.SET_NULL, related_name='+', to=settings.AUTH_USER_MODEL, verbose_name='Ответственный ШНС при включении')),
            ],
            options={
                'verbose_name': 'Выключенные объекты',
                'verbose_name_plural': 'Выключенный объект',
            },
        ),
        migrations.DeleteModel(
            name='JournalOrder',
        ),
        migrations.AddField(
            model_name='journalorderobject',
            name='journal_order_object_journal_order_turning_off',
            field=models.OneToOneField(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to='journals.journalorderturningoff', verbose_name='Включенный объект'),
        ),
        migrations.AddField(
            model_name='journalorderobject',
            name='journal_order_object_journal_order_turning_on',
            field=models.OneToOneField(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to='journals.journalorderturningon', verbose_name='Выключенный объект'),
        ),
        migrations.AddField(
            model_name='journalorderobject',
            name='journal_order_object_subdivision',
            field=models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='subdivisions.subdivision', verbose_name='Подразделение'),
        ),
        migrations.AddField(
            model_name='journalorderobject',
            name='journal_order_object_type_of_work',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='journals.typeofwork', verbose_name='Наименовние работ'),
        ),
    ]