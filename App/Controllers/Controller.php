<?php

namespace LISENDER\LaPointeRouge\Controllers;

class Controller
{
    const VIEWPATH = __DIR__ . '/../../Views/';
    const EXT = '.tmpl.php';
    const PAGETITLE = 'LaPointeRouge';

    public function render($layout, $view, $data = null, $data2 = null): array|string
    {
        // Récupère le layout
        $layout_ar = explode('.', $layout);
        ob_start();
        require_once(self::VIEWPATH . ucfirst($layout_ar[0]) . '/' . $layout_ar[1] . self::EXT);
        $layout_content = ob_get_contents();
        ob_end_clean();
        $layout = str_replace('{pageTitle}', self::PAGETITLE, $layout_content);

        // Récupère le template de contenus
        $view_ar = explode('.', $view);
        ob_start();
        require_once(self::VIEWPATH . ucfirst($view_ar[0]) . '/' . $view_ar[1] . self::EXT);
        $view_content = ob_get_contents();
        ob_end_clean();
        return str_replace('{pageContent}', $view_content, $layout);
    }

    // foction générale de redirection
    public function redirect($location)
    {
        header('Location:' . $location);
    }
}
