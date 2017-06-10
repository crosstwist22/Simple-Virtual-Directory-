<?php

namespace Ikigami\Controller;
use Ikigami\Controller\View as View;
use Ikigami\Controller\Modal as Modal;

class Controller {
    function __construct() {
        new View\Control_View();
        new Modal\Control_Modal();
        echo __CLASS__ . "<br>";
    }
}
