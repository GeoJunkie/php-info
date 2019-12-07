<?php

class WP_PHP_InfoTest extends WP_UnitTestCase
{
    public function test_iframe_class()
    {
        $result = php_info_page();
        $this->assertContains('php_info_frame', $result);
    }
}