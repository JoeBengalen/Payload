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
 * Domain payload factory.
 */
class PayloadFactory
{
    /**
     * Create a new Payload object with the given status.
     *
     * @param mixed $status
     *
     * @return Payload
     */
    public function createPayload($status = null)
    {
        $payload = new Payload();

        if ($status) {
            $payload->setStatus($status);
        }

        return $payload;
    }

    /**
     * Create a new Payload object with status success.
     *
     * @return Payload
     */
    public function createSuccessPayload()
    {
        return $this->createPayload(PayloadStatus::SUCCESS);
    }

    /**
     * Create a new Payload object with status found.
     *
     * @return Payload
     */
    public function createFoundPayload()
    {
        return $this->createPayload(PayloadStatus::FOUND);
    }

    /**
     * Create a new Payload object with status not found.
     *
     * @return Payload
     */
    public function createNotFoundPayload()
    {
        return $this->createPayload(PayloadStatus::NOT_FOUND);
    }

    /**
     * Create a new Payload object with status invalid.
     *
     * @return Payload
     */
    public function createInvalidPayload()
    {
        return $this->createPayload(PayloadStatus::INVALID);
    }

    /**
     * Create a new Payload object with status error.
     *
     * @return Payload
     */
    public function createErrorPayload()
    {
        return $this->createPayload(PayloadStatus::ERROR);
    }
}
