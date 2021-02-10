from django.test import TestCase
from django.urls import reverse

class KipDeviceUpdateTestCase(TestCase):
    def setUp(self):
        pass

    def test_kip_device_update_page(self):
        response = self.client.get(reverse('kip_device_update'))
        self.assertEqual(response.status_code, 200)
        self.assertTemplateUsed(response, 'kip_device/kip_device_update.html')