# Generated by Django 3.1.3 on 2020-11-12 15:18

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0028_auto_20201112_2317'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 12, 23, 18, 1, 670288), verbose_name='Дата формирования заявки'),
        ),
    ]
