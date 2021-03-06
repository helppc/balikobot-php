<?php

namespace Inspirum\Balikobot\Tests\Integration\Balikobot;

use Inspirum\Balikobot\Definitions\Shipper;

class GetActivatedServicesMethodTest extends AbstractBalikobotTestCase
{
    public function testValidRequest()
    {
        $service = $this->newBalikobot();

        $services = $service->getActivatedServices(Shipper::PPL);

        $this->assertTrue(is_bool($services['active_parcel']));
        $this->assertTrue(is_bool($services['active_cargo']));
        $this->assertTrue(count($services['service_types']) > 0);
    }
}
