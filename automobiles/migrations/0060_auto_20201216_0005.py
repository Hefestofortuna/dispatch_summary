# Generated by Django 3.1.3 on 2020-12-15 16:05

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0059_auto_20201215_2332'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 12, 16, 0, 5, 52, 293008), verbose_name='Дата формирования заявки'),
        ),
    ]
