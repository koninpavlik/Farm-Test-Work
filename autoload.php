<?php

spl_autoload_register(function ($class_name) {
    include 'App/' . $class_name . '.php';
});