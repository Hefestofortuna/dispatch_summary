# Generated by Django 3.1.3 on 2020-11-12 14:17

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0018_auto_20201111_1711'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 12, 22, 17, 5, 531245), verbose_name='Дата формирования заявки'),
        ),
    ]
