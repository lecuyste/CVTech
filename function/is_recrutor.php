<?php
function is_recrutor()
{
    if (is_logged()) {
        if ($_SESSION['login']['role'] == 'recruteur') {
            return true;
        }
    }
    return false;
}