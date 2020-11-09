# Generated by Django 3.1.3 on 2020-11-07 12:07

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('files', '0004_auto_20201107_2002'),
    ]

    operations = [
        migrations.AlterField(
            model_name='file',
            name='file_author',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.DO_NOTHING, to=settings.AUTH_USER_MODEL, verbose_name='Автор файла'),
        ),
    ]