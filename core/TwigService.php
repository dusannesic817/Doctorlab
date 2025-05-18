<?php

namespace App\Core;

class TwigService {
    public static function getTwig($controller) {
        $loader = new \Twig\Loader\FilesystemLoader('./views');
        $twig = new \Twig\Environment($loader, [
            'debug' => true,
            'cache' => './twig-cache',
            'auto_reload'=> true
        ]);

        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $twig->addGlobal('base_url', \Configruation::BASE_URL);

        $session = $controller->getSession();
        $twig->addGlobal('auth', $session->get('user_id'));
        $twig->addGlobal('role', $session->get('role'));

        return $twig;
    }
}
