<?php

namespace Classes;

interface TimeToWordConverterInterface
{
    public function convert(int $hours, int $minutes):string;

}