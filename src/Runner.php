namespace Hexlet\Php\Runner;
<?php
function run()
{
    $collection = collect([taylor, abigail, null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}
