# Generated by Django 3.1.3 on 2020-11-27 06:18

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0049_auto_20201127_0049'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 27, 14, 18, 17, 252678), verbose_name='Дата формирования заявки'),
        ),
    ]