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
        $percentChange = Stats::percentChange($currentValue, $previousValue);
        $this->assertEquals(50, $percentChange);
    }

}