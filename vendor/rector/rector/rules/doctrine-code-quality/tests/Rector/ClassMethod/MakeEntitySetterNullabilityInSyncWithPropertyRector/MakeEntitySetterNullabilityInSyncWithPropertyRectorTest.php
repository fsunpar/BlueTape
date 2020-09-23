<?php

declare(strict_types=1);

namespace Rector\DoctrineCodeQuality\Tests\Rector\ClassMethod\MakeEntitySetterNullabilityInSyncWithPropertyRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\DoctrineCodeQuality\Rector\ClassMethod\MakeEntitySetterNullabilityInSyncWithPropertyRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class MakeEntitySetterNullabilityInSyncWithPropertyRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return MakeEntitySetterNullabilityInSyncWithPropertyRector::class;
    }
}
