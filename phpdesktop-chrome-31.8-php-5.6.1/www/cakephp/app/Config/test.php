<?php
function print_url_variables()
{
    $url_vars = [];
    foreach ($_SERVER as $k => $v) {
        if (is_array($v)) {
            continue;
        }
        if (strpos($v, "test.php") !== false
                || strpos($v, "webroot") !== false
                || strpos($v, "xyz") !== false
                || strpos($v, "foo") !== false
                || strpos($v, "bar") !== false
                || $k == "REQUEST_METHOD"
                || $k == "REQUEST_URI") {
            $url_vars[$k] = $v;
        }
    }
    print "<pre style='background:#ddd;'>";
    print_r($url_vars);
    print "</pre>";
}
print_url_variables();
?>
