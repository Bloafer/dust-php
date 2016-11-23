<?php
namespace Dust\Helper;

class SizeTest extends \Dust\DustTestBase {
    public function testSize() {
        $templ = '{@size key=val /}';
        $this->assertTemplate('4', $templ, (object)array("val" => array(1, 2, 3, 4)));
        $this->assertTemplate('6', $templ, (object)array("val" => 'abcdef'));
        $this->assertTemplate('2', $templ, (object)array("val" => (object)array("foo" => 12, "bar" => 15)));
        $this->assertTemplate('23', $templ, (object)array("val" => 23));
        $this->assertTemplate('3.14', $templ, (object)array("val" => 3.14));
        $this->assertTemplate('0', $templ, (object)array());
        $this->assertTemplate('0', $templ, (object)array("val" => ''));
        $this->assertTemplate('1', $templ, (object)array("val" => true));
        $this->assertTemplate('0', $templ, (object)array("val" => false));
    }

}