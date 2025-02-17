<?php

namespace Rector\Tests\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector\Fixture;

function run()
{
    $a = 1;
    $func = fn($b) => $a + $b + $c;

    return $func(2);
}

?>
-----
<?php

namespace Rector\Tests\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector\Fixture;

function run()
{
    $c = null;
    $a = 1;
    $func = fn($b) => $a + $b + $c;

    return $func(2);
}

?>
