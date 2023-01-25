<?php

/**
 * @param Float $celsius
 * @return Float[]
 */
function convertTemperature($celsius) {
    $celvin = $celsius + 273.15;
    $fahrenheit = ($celsius * 1.80) + 32.00;

return [$celvin,$fahrenheit];
}
