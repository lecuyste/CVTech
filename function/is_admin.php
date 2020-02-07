<?php
function is_admin()
{
    if (is_logged()) {
        if ($_SESSION['login']['role'] == 'admin') {
            return true;
        }
    }
    return false;
}