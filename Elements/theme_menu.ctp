<?php
    $output = '';

    switch ($menu['region']) {
        case 'main-menu':
            echo $this->Menu->render($menu, array('id' => 'top-menu', 'class' => 'nav'));
        break;

        default:
            echo $this->Menu->render($menu);
        break;
    }
