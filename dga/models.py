from django.db import models
from django.utils.translation import ugettext_lazy as _

class DgaList(models.Model):
    dga_list_brand = models.CharField(_('Марка ДГА'), max_length=64)
    dga_list_irreducible_stock = models.IntegerField(_('Неснижаемый запас'))