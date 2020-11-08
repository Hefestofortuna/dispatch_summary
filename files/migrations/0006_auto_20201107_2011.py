# Generated by Django 3.1.3 on 2020-11-07 12:11

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('files', '0005_auto_20201107_2007'),
    ]

    operations = [
        migrations.AlterField(
            model_name='file',
            name='file_author',
            field=models.ForeignKey(default=0, on_delete=django.db.models.deletion.DO_NOTHING, to='users.user', verbose_name='Автор файла'),
            preserve_default=False,
        ),
    ]
