<?php

namespace AqBanking\Command;

use PHPUnit\Framework\TestCase;

class ShellCommandTestCase extends TestCase
{
    protected function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @return \Mockery\MockInterface
     */
    protected function getShellCommandExecutorMock()
    {
        return \Mockery::mock('AqBanking\Command\ShellCommandExecutor');
    }
}
