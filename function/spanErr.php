<?php
function spanErr($err, $key)
{
    if (!empty($err[$key])) {
        echo "<span class=\"error\">";
        echo $err[$key];
        echo "</span>";
    };
}