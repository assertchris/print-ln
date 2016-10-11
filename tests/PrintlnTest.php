<?php

use PHPUnit\Framework\TestCase;

class PrintlnTest extends TestCase
{
    /**
     * @test
     */
    function prints_correctly_to_cli() {
        ob_start();
        println("foo", "bar", "baz");
        $actual = ob_get_contents();
        ob_end_clean();

        $expected = "foo\nbar\nbaz\n";

        $this->assertEquals($expected, $actual);
    }
}
