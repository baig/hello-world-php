<?php

namespace My\Utils;

function lines($str) {
    return explode("\n", $str);
}

function unlines($arr) {
    return join("\n", $arr);
}
