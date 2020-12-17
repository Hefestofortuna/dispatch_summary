from django.contrib.admin.widgets import AdminDateWidget
from django.forms import ModelForm


class GlobalForm(ModelForm):
        today_date = AdminDateWidget(widget=AdminDateWidget())