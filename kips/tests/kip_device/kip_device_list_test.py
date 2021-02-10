from django.test import TestCase
from django.urls import reverse

class KipDeviceListTestCase(TestCase):
    def setUp(self):
        pass

    def test_kip_device_list_page(self):
        response = self.client.get(reverse('kip_device_list'))
        self.assertEqual(response.status_code, 200)
        self.assertTemplateUsed(response, 'kip_device/kip_device_list.html')