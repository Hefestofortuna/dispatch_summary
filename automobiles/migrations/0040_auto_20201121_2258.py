# Generated by Django 3.1.3 on 2020-11-21 14:58

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0039_auto_20201121_2149'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 21, 22, 58, 15, 397733), verbose_name='Дата формирования заявки'),
        ),
    ]
