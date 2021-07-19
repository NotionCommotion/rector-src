<?php

declare(strict_types=1);

namespace Rector\Tests\Defluent\Rector\ClassMethod\ReturnThisRemoveRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ReturnThisRemoveRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
<<<<<<< HEAD
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
=======
        if (strncasecmp(PHP_OS, 'WIN', 3) === 0) {
>>>>>>> 5b6ac363a (skip ReturnThisRemoveRectorTest on windows)
            $this->markTestSkipped('minor differences on windows, see https://github.com/rectorphp/rector/issues/6571');
        }

        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
