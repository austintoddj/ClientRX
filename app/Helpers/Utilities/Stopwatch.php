<?php

namespace App\Helpers\Utilities;

/**
 * Class Stopwatch
 *
 * @package App\Helpers\Utilities
 * @source https://gist.github.com/chuckreynolds/c93791dc8179288a7d08c29f31bf1080
 */
class Stopwatch
{
    /**
     * The start times of the Stopwatch.
     *
     * @var array
     */
    private static $startTimes = [];

    /**
     * Start the timer.
     *
     * @param string
     * @return void
     */
    public static function start($timerName = 'default')
    {
        self::$startTimes[$timerName] = microtime(true);
    }

    /**
     * Get the elapsed time in seconds.
     *
     * @param string
     * @return float
     */
    public static function elapsed($timerName = 'default')
    {
        return microtime(true) - self::$startTimes[$timerName];
    }
}
