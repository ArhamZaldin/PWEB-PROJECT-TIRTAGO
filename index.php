<?php

require_once '/Applications/XAMPP/xamppfiles/htdocs/controllers/controller.php';

$controller = new Controller();

if (!isset($_GET['act'])) {
    $controller->index();
} else {
    switch ($_GET['act']) {

        // batas menu awal //

        case 'index':
            $controller->index();
            break;

        case 'petunjuk-pasang-air':
            $controller->petunjukPasang();
            break;

        case 'petunjuk-pesan-air':
            $controller->petunjukPesan();

        case 'pasang-air':
            $controller->pasangAir();
            break;

        case 'pesan-air':
            $controller->pesanAir();
            break;

        case 'riwayat':
            $controller->riwayat();
            break;

        case 'tentang':
            $controller->tentang();
            break;

        case 'kontak':
            $controller->kontak();
            break;
            
        case 'profil':
            $controller->profil();
            break;

        case 'profil-edit':
            $controller->profilEdit();
            break;

        case 'login':
            $controller->login();
            break;

        case 'register':
            $controller->register();
            break;

        case 'logout':
            $controller->logout();
            break;

        // batas menu akhir //

        // form awal //

        case 'form-layanan':
            $controller->submitLayanan();
            break;

        case 'form-login':
            $controller->submitLogin();
            break;

        case 'form-register':
            $controller->submitRegister();
            break;

        // form akhir //
        
        default:
            $controller->index();
            break;
    }
}

?>