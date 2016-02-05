<?php

namespace Akamon\Phunctional\Tests;

use function Akamon\Phunctional\call;
use function Akamon\Phunctional\do_if;
use PHPUnit_Framework_TestCase;

final class DoIfTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_call_the_fn_if_predicates_are_true()
    {
        $this->assertEquals(5, call(do_if($this->sumOne(), [$this->isOdd()]), [4]));
    }

    /** @test */
    public function it_should_return_null_if_all_predicates_are_not_true()
    {
        $this->assertNull(call(do_if($this->sumOne(), [$this->isGreaterThanOne(), $this->isOdd()]), [3]));
    }

    private function sumOne()
    {
        return function ($num) {
            return $num + 1;
        };
    }

    private function isOdd()
    {
        return function ($num) {
            return $num % 2 === 0;
        };
    }

    private function isGreaterThanOne()
    {
        return function ($num) {
            return $num > 1;
        };
    }
}
