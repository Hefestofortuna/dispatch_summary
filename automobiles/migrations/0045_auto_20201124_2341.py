# Generated by Django 3.1.3 on 2020-11-24 15:41

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0044_auto_20201124_2116'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 24, 23, 41, 1, 424219), verbose_name='Дата формирования заявки'),
        ),
    ]
