# Generated by Django 3.1.3 on 2020-11-06 12:50

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Tag',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('tag_title', models.CharField(max_length=64, unique=True, verbose_name='Наименование тега')),
            ],
            options={
                'verbose_name': 'Теги',
                'verbose_name_plural': 'Тег',
            },
        ),
        migrations.CreateModel(
            name='Feed',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('feed_title', models.CharField(max_length=128, verbose_name='Наименование новости')),
                ('feed_text', models.TextField(blank=True, null=True, verbose_name='Текст новости')),
                ('feed_pub_date', models.DateTimeField(auto_now_add=True, verbose_name='Дата публикации')),
                ('feed_author', models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to=settings.AUTH_USER_MODEL, verbose_name='Автор новости')),
                ('tags', models.ManyToManyField(blank=True, null=True, to='feeds.Tag')),
            ],
            options={
                'verbose_name': 'Новости',
                'verbose_name_plural': 'Новость',
            },
        ),
    ]
