# Generated by Django 3.1.1 on 2020-11-06 03:19

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('organizations', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Subdivision',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('subdivision_title', models.CharField(max_length=64, verbose_name='Наименование подразделения')),
                ('ekasui_title', models.CharField(blank=True, max_length=64, null=True, verbose_name='Код ЕКАСУИ')),
                ('asui_code', models.CharField(blank=True, max_length=64, null=True, verbose_name='Код АСУИ')),
                ('organization', models.ForeignKey(on_delete=django.db.models.deletion.PROTECT, to='organizations.organization', verbose_name='Организация')),
            ],
            options={
                'verbose_name': 'Подразделения',
                'verbose_name_plural': 'Подразделение',
            },
        ),
    ]
