# Generated by Django 3.1.4 on 2021-02-18 17:29

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('journals', '0040_journalfactoryofwork_journal_factory_of_work_today'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='journalfactoryofwork',
            name='journal_factory_of_work_today',
        ),
    ]
