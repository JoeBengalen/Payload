<?php

/**
 * JoeBengalen Payload library.
 *
 * @author    Martijn Wennink <joebengalen@gmail.com>
 * @copyright Copyright (c) 2015 Martijn Wennink
 * @link      https://github.com/JoeBengalen/Payload
 * @license   MIT
 */

namespace JoeBengalen\Payload;

/**
 * Domain payload statuses.
 *
 * WARNING: Do not rely on the constant values as they may change over time!
 *          Always use the constants by their name.
 */
abstract class PayloadStatus
{
    /**
     * @var int Action succeeded.
     */
    const SUCCESS = 1;

    /**
     * @var int Requested data found.
     */
    const FOUND = 2;

    /**
     * @var int Requested data not found.
     */
    const NOT_FOUND = 3;

    /**
     * @var int Invalid input.
     */
    const INVALID = 4;

    /**
     * @var int Error during execution.
     */
    const ERROR = 5;
}
