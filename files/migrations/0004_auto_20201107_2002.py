# Generated by Django 3.1.3 on 2020-11-07 12:02

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion
import files.models


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('files', '0003_auto_20201107_1820'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='file',
            options={'verbose_name': 'Файлы', 'verbose_name_plural': 'Файл'},
        ),
        migrations.AddField(
            model_name='file',
            name='file_author',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to=settings.AUTH_USER_MODEL, verbose_name='Автор файла'),
        ),
        migrations.AlterField(
            model_name='file',
            name='file_name',
            field=models.FileField(blank=True, null=True, upload_to=files.models.upload_to, verbose_name='Файл'),
        ),
    ]
