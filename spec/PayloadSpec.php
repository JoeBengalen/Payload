<?php

namespace spec\JoeBengalen\Payload;

use JoeBengalen\Payload\PayloadStatus;
use PhpSpec\ObjectBehavior;

class PayloadSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('JoeBengalen\Payload\Payload');
    }

    function it_can_hold_a_status()
    {
        $this->getStatus()->shouldReturn(null);

        $this->setStatus(PayloadStatus::SUCCESS)->shouldReturn($this);

        $this->getStatus()->shouldReturn(PayloadStatus::SUCCESS);
    }

    function it_can_hold_a_message()
    {
        $this->getMessage()->shouldReturn(null);

        $this->setMessage('some status message')->shouldReturn($this);

        $this->getMessage()->shouldReturn('some status message');
    }

    function it_can_hold_mixed_input_data()
    {
        $this->getInput()->shouldReturn(null);

        $data = ['key1' => 'val1'];

        $this->setInput($data)->shouldReturn($this);
        $this->getInput()->shouldReturn($data);

        $this->setInput(true)->shouldReturn($this);
        $this->getInput()->shouldReturn(true);

        $this->setInput(20.1)->shouldReturn($this);
        $this->getInput()->shouldReturn(20.1);

        $obj = (object) [];

        $this->setInput($obj)->shouldReturn($this);
        $this->getInput()->shouldReturn($obj);
    }

    function it_can_hold_mixed_output_data()
    {
        $this->getOutput()->shouldReturn(null);

        $data = ['key1' => 'val1'];

        $this->setOutput($data)->shouldReturn($this);
        $this->getOutput()->shouldReturn($data);

        $this->setOutput(true)->shouldReturn($this);
        $this->getOutput()->shouldReturn(true);

        $this->setOutput(20.1)->shouldReturn($this);
        $this->getOutput()->shouldReturn(20.1);

        $obj = (object) [];

        $this->setOutput($obj)->shouldReturn($this);
        $this->getOutput()->shouldReturn($obj);
    }
}
