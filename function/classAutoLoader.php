<?php
//classAutoLoader.php

function classAutoLoader($className)
{
    require_once './classes/' . $className . ".php";
}