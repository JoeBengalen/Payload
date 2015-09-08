<?php

namespace spec\JoeBengalen\Payload;

use JoeBengalen\Payload\PayloadStatus;
use PhpSpec\ObjectBehavior;

class PayloadFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('JoeBengalen\Payload\PayloadFactory');
    }

    function it_can_create_a_success_payload()
    {
        $this->createPayload(PayloadStatus::SUCCESS)->getStatus()->shouldReturn(PayloadStatus::SUCCESS);

        $this->createSuccessPayload()->getStatus()->shouldReturn(PayloadStatus::SUCCESS);
    }

    function it_can_create_a_found_payload()
    {
        $this->createPayload(PayloadStatus::FOUND)->getStatus()->shouldReturn(PayloadStatus::FOUND);

        $this->createFoundPayload()->getStatus()->shouldReturn(PayloadStatus::FOUND);
    }

    function it_can_create_a_not_found_payload()
    {
        $this->createPayload(PayloadStatus::NOT_FOUND)->getStatus()->shouldReturn(PayloadStatus::NOT_FOUND);

        $this->createNotFoundPayload()->getStatus()->shouldReturn(PayloadStatus::NOT_FOUND);
    }

    function it_can_create_an_invalid_payload()
    {
        $this->createPayload(PayloadStatus::INVALID)->getStatus()->shouldReturn(PayloadStatus::INVALID);

        $this->createInvalidPayload()->getStatus()->shouldReturn(PayloadStatus::INVALID);
    }

    function it_can_create_an_error_payload()
    {
        $this->createPayload(PayloadStatus::ERROR)->getStatus()->shouldReturn(PayloadStatus::ERROR);

        $this->createErrorPayload()->getStatus()->shouldReturn(PayloadStatus::ERROR);
    }

    function it_can_create_a_payload_without_status()
    {
        $this->createPayload()->getStatus()->shouldReturn(null);
    }
}
