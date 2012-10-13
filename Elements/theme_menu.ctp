<?php
    $output = '';

    switch ($menu['region']) {
        case 'main-menu':
            echo $this->Layout->menu($menu, array('id' => 'top-menu', 'class' => 'nav'));
        break;

        default:
            echo $this->Layout->menu($menu);
        break;
    }
