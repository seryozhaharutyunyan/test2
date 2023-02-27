<?php

namespace Classes;

interface TimeToWordConverterInterface
{
    /**
     * @param int $hours
     * @param int $minutes
     * @return string
     */
    public function convert(int $hours, int $minutes):string;

}
