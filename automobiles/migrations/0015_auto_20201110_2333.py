# Generated by Django 3.1.3 on 2020-11-10 15:33

import datetime
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0014_auto_20201110_2217'),
    ]

    operations = [
        migrations.AlterField(
            model_name='automobilerequest',
            name='automobile_request_put_date',
            field=models.DateTimeField(default=datetime.datetime(2020, 11, 10, 23, 33, 33, 356284), verbose_name='Дата формирования заявки'),
        ),
    ]