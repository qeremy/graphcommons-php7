<?php
header('content-type: text/plain; charset=utf-8');

// dump functions
function pre($input, $exit = false){
    if ($input === null) {
        printf("NULL\n");
    } else {
        printf("%s\n", preg_replace(
            '~\[(.+):(?:.*?):(private)\]~', '[\\1:\\2]', print_r($input, true)));
    }
    if ($exit) {
        exit;
    }
}
function prd($input, $exit = false){
    var_dump($input);
    if ($exit) {
        exit;
    }
}
