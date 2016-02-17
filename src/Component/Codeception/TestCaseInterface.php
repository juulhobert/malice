<?php

namespace Alsbury\Malice\Component\Codeception;

use Alsbury\Malice\Fixtures\FixtureConfig;

interface TestCaseInterface
{
    /**
     * @return FixtureConfig
     */
    public function getFixtureConfig();
}