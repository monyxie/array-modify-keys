<?php

use function Monyxie\array_modify_keys;
use function Monyxie\array_modify_keys_recursive;

include 'array_modify_keys.php';

print_r(array_modify_keys(array(
    'EventTime' => '2017-03-20T07:49:17Z',
    'EventType' => 'TranscodeComplete',
    'Items' => [ [ 'Status' => 'Success', ], [ 'Status' => 'Success', ], ],
), 'lcfirst'));

print_r(array_modify_keys_recursive(array(
    'EventTime' => '2017-03-20T07:49:17Z',
    'EventType' => 'TranscodeComplete',
    'Items' => [ [ 'Status' => 'Success', ], [ 'Status' => 'Success', ], ],
), 'lcfirst'));
