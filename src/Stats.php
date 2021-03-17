<?php

namespace MichaelDrennen\Stats;

class Stats {


    public static function percentChange($currentValue, $previousValue) {
        if ( 0 == $currentValue ):
            return NULL;
        endif;
        return ( ( $currentValue - $previousValue ) / $currentValue ) * 100;
    }
}