<?php

function classAutoLoader($classname) {

    require_once "./classes/" . $classname . ".pho";
}