<?php
defined('_JEXEC') or die;

function e($string) {
    echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
