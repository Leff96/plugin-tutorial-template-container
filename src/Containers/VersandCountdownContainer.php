<?php

namespace VersandCountdown\Containers;

use Plenty\Plugin\Templates\Twig;
    
class VersandCountdownContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('VersandCountdown::content.VersandCountdown');
    }
}
