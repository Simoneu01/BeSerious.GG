<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class HelperTest extends TestCase
{
    use WithFaker;

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

    public function test_read_duration()
    {
        $result = Str::readDuration('caiaco');

        $this->assertSame(1, $result);
    }

    public function test_read_duration_long_text()
    {
        $result = Str::readDuration($this->faker->words(2800, true));

        $this->assertSame(14, $result);
    }
}
