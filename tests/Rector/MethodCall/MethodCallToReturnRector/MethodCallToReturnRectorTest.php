<?php

declare(strict_types=1);

namespace Rector\Tests\Rector\MethodCall\MethodCallToReturnRector;

use Iterator;
use Rector\Rector\MethodCall\MethodCallToReturnRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Tests\Rector\MethodCall\MethodCallToReturnRector\Source\ReturnDeny;

final class MethodCallToReturnRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
        yield [__DIR__ . '/Fixture/skip_already_return.php.inc'];
    }

    /**
     * @return mixed[]
     */
    protected function getRectorsWithConfiguration(): array
    {
        return [
            MethodCallToReturnRector::class => [
                '$methodNamesByType' => [
                    ReturnDeny::class => ['deny'],
                ],
            ],
        ];
    }
}
