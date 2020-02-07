<?php
function is_logged()
{
    $roles = array('candidat', 'admin', 'recruteur');
    if (!empty($_SESSION['login'])) {
        if (!empty($_SESSION['login']['id']) && is_numeric($_SESSION['login']['id'])) {
            if (!empty($_SESSION['login']['nom'])) {
                if (in_array($_SESSION['login']['role'], $roles)) {
                    if (!empty($_SESSION['login']['ip'])) {
                        if (!empty($_SESSION['login']['ip']) == $_SERVER['REMOTE_ADDR']) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;
}