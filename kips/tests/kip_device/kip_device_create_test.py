from django.test import TestCase
from django.urls import reverse

class KipDeviceCreateTestCase(TestCase):
    def setUp(self):
        pass

    def test_kip_device_create_page(self):
        response = self.client.get(reverse('kip_device_create'))
        self.assertEqual(response.status_code, 200)
        self.assertTemplateUsed(response, 'kip_device/kip_device_create.html')