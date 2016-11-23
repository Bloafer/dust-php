<?php
namespace Dust\Helper;

class NeTest extends ComparisonTestBase {
    public function __construct() { parent::__construct('ne'); }

    public function testNe() {
        $this->assertValidResult(12, 12, false);
        $this->assertValidResult(12, '12', false);
        $this->assertValidResult(12, false, true);
        $this->assertValidResult(array(1, 2), array(1, 2), false);
        $this->assertValidResult('FOO', 'foo', true);
    }

}