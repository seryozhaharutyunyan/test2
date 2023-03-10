<?php

namespace Classes;

class TimeToWordConverter implements TimeToWordConverterInterface
{

    /**
     * @param int $hours
     * @param int $minutes
     * @return string
     */
    public function convert(int $hours, int $minutes): string
    {
        $minutesText = require ROOT_DIR . DS . 'minutes.php';
        $hoursText = require ROOT_DIR . DS . 'hours.php';
        $index = $hours === 12 ? 1 : $hours + 1;
        $result = '';

        if ($minutes === 0) {
            $result = $hoursText[$hours][0];
        } elseif ($minutes > 0 && $minutes < 30 && $minutes !== 15) {
            $result = $minutesText[$minutes] . 'после ' . $hoursText[$hours][1];
        } elseif ($minutes === 15) {
            $result = $minutesText[$minutes] . $hoursText[$index][1];
        } elseif ($minutes === 30) {
            $result = $minutesText[$minutes] . $hoursText[$index][1];
        } elseif ($minutes > 30 && $minutes <= 59) {
            $result = $minutesText[60 - $minutes] . 'до ' . $hoursText[$index][1];
        } else {
            return 'Некорректные данные';
        }

        return $result;
    }
}
