# Generated by Django 3.1.4 on 2021-02-16 08:01

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0066_auto_20210209_2353'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2021, 2, 16, 16, 1, 13, 56598), verbose_name='Дата формирования заявки'),
        ),
    ]
