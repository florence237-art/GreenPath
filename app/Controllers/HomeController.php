<?php
class HomeController {
    public function index() {
        // Exemple d'appel d'une vue
        ob_start();
        require __DIR__ . '/../Views/home.php';
        return ob_get_clean();
    }
}
