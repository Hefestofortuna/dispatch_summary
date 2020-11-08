# Generated by Django 3.1.3 on 2020-11-07 16:30

from django.db import migrations
import django.db.models.deletion
import mptt.fields


class Migration(migrations.Migration):

    dependencies = [
        ('folders', '0005_genre'),
    ]

    operations = [
        migrations.AlterField(
            model_name='folder',
            name='folder_parent',
            field=mptt.fields.TreeForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, related_name='children', to='folders.folder'),
        ),
        migrations.DeleteModel(
            name='Genre',
        ),
    ]
