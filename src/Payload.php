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
 * Domain payload data transfer object.
 *
 * Holds the status and result of the performed action or the result of a fetch.
 */
class Payload implements PayloadInterface
{
    /**
     * @var mixed|null Status.
     */
    protected $status;

    /**
     * @var string|null Message.
     */
    protected $message;

    /**
     * @var mixed|null Input data.
     */
    protected $input;

    /**
     * @var mixed|null Output data.
     */
    protected $output;

    /**
     * Set the status.
     *
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Set the input.
     *
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Set the output.
     *
     * @param mixed $output
     *
     * @return self
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Get the status.
     *
     * @return mixed|null Payload status, null if not set.
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the message.
     *
     * @return string|null Payload message, null if not set.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get the input.
     *
     * @return mixed|null Payload input, null if not set.
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Get the output.
     *
     * @return mixed|null Payload output, null if not set.
     */
    public function getOutput()
    {
        return $this->output;
    }
}
