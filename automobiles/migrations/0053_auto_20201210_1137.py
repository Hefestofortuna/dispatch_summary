# Generated by Django 3.1.3 on 2020-12-10 08:37

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0052_auto_20201201_0101'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 12, 10, 11, 37, 43, 222001), verbose_name='Дата формирования заявки'),
        ),
    ]
