<?php

declare(strict_types=1);

namespace dbrattoli\ComposerWorkshop\Test;

use dbrattoli\ComposerWorkshop\PhpWorld;

use dbrattoli\Uuid\UuidInterface;

class PhpWorldTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(PhpWorldUuid::class);
        $object->shouldReceive('getUuid')->passthru();

        $this->assertSameInstanceOf(UuidInterface, $object->getHello());
    }
}
