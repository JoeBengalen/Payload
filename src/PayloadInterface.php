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
 * Domain payload interface.
 *
 * Provied a simple communication between the domain and the using application.
 *
 * Holds the status and result of the performed action or the result of a fetch.
 *
 * WARNING: Do not rely on the Payload::STATUS_* integer values as they may
 *          change over time! Always use the constants by its name.
 */
interface PayloadInterface
{
    /**
     * Get the status.
     *
     * @return mixed|null Payload status, null if not set.
     */
    public function getStatus();

    /**
     * Get the message.
     *
     * @return string|null Payload message, null if not set.
     */
    public function getMessage();

    /**
     * Get the input.
     *
     * @return mixed|null Payload input, null if not set.
     */
    public function getInput();

    /**
     * Get the output.
     *
     * @return mixed|null Payload output, null if not set.
     */
    public function getOutput();
}
