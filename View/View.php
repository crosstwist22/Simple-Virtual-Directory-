<?php

namespace Ikigami\View;
use Ikigami\View\Controller as Controller;
use Ikigami\View\Modal as Modal;

class View {
    function __construct() {
        new Controller\View_Controller();
        new Modal\View_Modal();
        echo __CLASS__ . "<br>";
    }
}

