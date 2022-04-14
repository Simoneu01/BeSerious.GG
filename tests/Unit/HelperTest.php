<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function test_str_ordinal()
    {
        $result = str_ordinal(1);

        $this->assertSame('1st', $result);
    }

    public function test_str_ordinal_greater_then_11()
    {
        $this->assertSame('11th', str_ordinal(11));
        $this->assertSame('12th', str_ordinal(12));
        $this->assertSame('13th', str_ordinal(13));
    }

    public function test_str_ordinal_with_superscript()
    {
        $result = str_ordinal(1, true);

        $this->assertSame('1<sup>st</sup>', $result);
    }

    public function test_str_ordinal_greater_then_11_with_superscript()
    {
        $this->assertSame('11<sup>th</sup>', str_ordinal(11, true));
        $this->assertSame('12<sup>th</sup>', str_ordinal(12, true));
        $this->assertSame('13<sup>th</sup>', str_ordinal(13, true));
    }
}
