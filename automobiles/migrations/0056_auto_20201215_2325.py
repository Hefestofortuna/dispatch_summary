# Generated by Django 3.1.3 on 2020-12-15 15:25

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0055_auto_20201215_2322'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 12, 15, 23, 25, 26, 424271), verbose_name='Дата формирования заявки'),
        ),
    ]
