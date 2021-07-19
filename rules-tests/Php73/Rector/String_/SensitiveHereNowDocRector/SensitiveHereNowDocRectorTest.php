<?php

declare(strict_types=1);

namespace Rector\Tests\Php73\Rector\String_\SensitiveHereNowDocRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class SensitiveHereNowDocRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
=======
<<<<<<< HEAD
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
=======
        if (strncasecmp(PHP_OS, 'WIN', 3) === 0) {
>>>>>>> 387759e1c (skip SensitiveHereNowDocRectorTest on windows)
>>>>>>> 5b6ac363a (skip ReturnThisRemoveRectorTest on windows)
=======
        if (strncasecmp(PHP_OS, 'WIN', 3) === 0) {
>>>>>>> 2a06c833a (extract VendorLocationDetector and make it Windows compatible)
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
