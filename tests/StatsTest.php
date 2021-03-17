<?php

namespace MichaelDrennen\Stats\Tests;

use MichaelDrennen\Stats\Stats;
use PHPUnit\Framework\TestCase;

class StatsTest extends TestCase {


    /**
     * @test
     */
    public function percentIncreaseShouldReturnValue(){
        $currentValue = 1;
        $previousValue = .5;
        $percentChange = Stats::percentIncrease($currentValue, $previousValue);
        $this->assertEquals(100, $percentChange);
    }

}