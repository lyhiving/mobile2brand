<?php

use lyhiving\Mobile\Mobile2Brand;

/**
* Phone Test
*/
class PhoneTest extends PHPUnit_Framework_TestCase
{
    protected $phone = null;

    public function setUp()
    {
        $this->phone = new Mobile2Brand();
    }

    public function testPhoneUrl()
    {
        $info = $this->phone->url('https://raw.githubusercontent.com/lyhiving/mobile2brand/master/src/icons/')->find('Meizu','16th');
        $this->assertNotEmpty($info);
    }

    public function testPhoneFind()
    {
        $info = $this->phone->find('Xiaomi','MI MAX 2');
        $this->assertNotEmpty($info);
    }
}
