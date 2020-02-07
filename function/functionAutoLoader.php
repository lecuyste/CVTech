<?php
function functionAutoLoader($className)
{
    require_once './function/' . $className . ".php";
}