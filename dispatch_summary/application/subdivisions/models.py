from django.db import models
from django.utils.translation import ugettext_lazy as _
from dispatch_summary.application.organizations.models import Organization
from dispatch_summary.application.users.models import User


class Subdivision(models.Model):
    organization = models.ForeignKey(Organization)
    subdivision_title = models.CharField(_('Наименование подразделения'), max_length=64)
    ekasui_title = models.CharField(_('Код в ЕКАСУИ'), max_length=64)
    asui_code = models.CharField(_('Код АСУИ'), max_length=64)
    leader = models.OneToOneField(User)