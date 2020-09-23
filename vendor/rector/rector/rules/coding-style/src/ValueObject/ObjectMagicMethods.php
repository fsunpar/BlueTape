<?php

declare(strict_types=1);

namespace Rector\CodingStyle\ValueObject;

use Rector\Core\ValueObject\MethodName;

final class ObjectMagicMethods
{
    /**
     * @var string[]
     */
    public const METHOD_NAMES = [
        '__call',
        '__callStatic',
        '__clone',
        MethodName::CONSTRUCT,
        '__debugInfo',
        MethodName::DESCTRUCT,
        '__get',
        '__invoke',
        '__isset',
        '__serialize',
        '__set',
        '__set_state',
        '__sleep',
        '__toString',
        '__unserialize',
        '__unset',
        '__wakeup',
    ];
}
