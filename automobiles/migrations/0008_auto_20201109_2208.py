# Generated by Django 3.1.3 on 2020-11-09 14:08

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0007_auto_20201109_2208'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 9, 22, 8, 38, 960928), verbose_name='Дата формирования заявки'),
        ),
    ]
