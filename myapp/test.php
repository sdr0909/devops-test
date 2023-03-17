<?php

$str = 'Hello, world!';

if (function_exists('mb_strlen')) {
    $len = mb_strlen($str);
    echo "The string '$str' contains $len characters.\n";
} else {
    echo "The mbstring extension is not installed.\n";
}
