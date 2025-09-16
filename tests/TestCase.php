<?php

namespace Tests;

use PHPUnit\Framework\TestCase as TestCaseBase;
use Prophecy\PhpUnit\ProphecyTrait;
use Prophecy\Prophet;

class TestCase extends TestCaseBase
{
    use ProphecyTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $this->prophet = new Prophet();
    }


    protected function tearDown(): void
    {
        parent::tearDown();

        $this->prophet->checkPredictions();
    }
}
