# Generated by Django 3.1.3 on 2020-11-10 13:42

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('files', '0015_auto_20201109_1811'),
        ('journals', '0002_journalcontractor_journal_contractor_file'),
    ]

    operations = [
        migrations.AlterField(
            model_name='journalcontractor',
            name='journal_contractor_file',
            field=models.ManyToManyField(blank=True, to='files.File', verbose_name='Прикрепленные файлы'),
        ),
    ]