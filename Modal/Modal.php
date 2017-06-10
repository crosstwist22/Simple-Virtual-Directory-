<?php

namespace Ikigami\Modal;
use Ikigami\Modal\Controller as Controller;
use Ikigami\Modal\View as View;

class Modal {
    function __construct() {
        new Controller\Modal_Controller();
        new View\Modal_View();
        echo __CLASS__ . "<br>";
    }
}

