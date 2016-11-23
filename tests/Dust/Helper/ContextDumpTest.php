<?php
namespace Dust\Helper;

class ContextDumpTest extends \Dust\DustTestBase {
    public function testContextDump() {
        $ctx = (object)array(
            "outer" => (object)array(
                "meh" => 'meh',
                "inner" => (object)array(
                    "key" => 'current',
                    "output" => 'output'
                )
            )
        );
        $templ = '{#outer outerFoo="bar"}{#inner:meh innerFoo="bar"}{@contextDump key=key to=output /}{/inner}{/outer}';
        //I really don't care what the output is, I just wanna run it
        $this->dust->renderTemplate($this->dust->compile($templ), $ctx);
        $ctx->outer->inner->key = 'full';
        $this->dust->renderTemplate($this->dust->compile($templ), $ctx);
    }

}