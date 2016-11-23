<?php
namespace Dust\Helper;

class LteTest extends ComparisonTestBase {
    public function __construct() { parent::__construct('lte'); }

    public function testLte() {
        $this->assertValidResult(12, 12, true);
        $this->assertValidResult(12, '12', true);
        $this->assertValidResult(12, 15, true);
        $this->assertValidResult(15, 12, false);
        $this->assertValidResult(array(1, 2), array(3, 4), true);
        $this->assertValidResult('foo', 'bar', false);
        $this->assertValidResult('bar', 'foo', true);
        $this->assertValidResult('foo', 'foo', true);
    }

}