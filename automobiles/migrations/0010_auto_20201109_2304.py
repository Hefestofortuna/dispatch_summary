# Generated by Django 3.1.3 on 2020-11-09 15:04

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0009_auto_20201109_2301'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 9, 23, 4, 34, 338388), verbose_name='Дата формирования заявки'),
        ),
    ]
