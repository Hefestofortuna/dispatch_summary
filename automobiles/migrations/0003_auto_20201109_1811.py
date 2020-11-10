# Generated by Django 3.1.3 on 2020-11-09 10:11

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('automobiles', '0002_auto_20201109_1758'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='automobilefuel',
            options={'verbose_name': 'Виды топлива', 'verbose_name_plural': 'Виды топлива'},
        ),
        migrations.AlterField(
            model_name='automobile',
            name='automobile_date_of_inspection',
            field=models.DateTimeField(blank=True, null=True, verbose_name='Дата осмотра'),
        ),
    ]