<?php
/**
 * emptyは0がTrueになるので0をFalseにした関数
 * @param mixed
 * @return mixed
 */
function isNullOrEmpty($var) {
    if (empty($var) && ($var !== 0) && ($var !== '0')) {
        return true;
    }
    return false;
}


//test
$test1 = "";
$test2 = 0;
$test3 = "0";
$test4 = null;
$test5 = false;
$test6 = array();

for ($i = 1; $i < 7; $i++) {
    if (isNullOrEmpty(${"test" . $i})) {
        echo 'True';
    } else {
        echo 'False';
    }
}


?>
