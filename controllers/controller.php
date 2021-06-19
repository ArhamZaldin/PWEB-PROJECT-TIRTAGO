<?php
    require_once '/Applications/XAMPP/xamppfiles/htdocs/models/model.php';
    
    class Controller {
        public $model;
        function __construct() {
            $this->model = new Model();
        }

        function index() {
            if (isset($_SESSION['username'])) {
                $linkPasang = "pasang-air";
                $linkPesan = "pesan-air";
                $riwayatMenu = "";
                $masuk_btn = "d-none";
                $profil_btn = "";
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/index.php';
            } else {
                $linkPasang = "petunjuk-pasang-air";
                $linkPesan = "petunjuk-pesan-air";
                $riwayatMenu = "d-none";
                $masuk_btn = "";
                $profil_btn = "d-none";
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/index.php';
            }
        }

        function petunjukPasang() {
            require_once '/Applications/XAMPP/xamppfiles/htdocs/views/petunjuk-pasang-air.php';
        }

        function petunjukPesan() {
            require_once '/Applications/XAMPP/xamppfiles/htdocs/views/petunjuk-pesan-air.php';
        }

        function pasangAir() {
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pasang-air.php';
            } else {
                $this->petunjukPasang();
            }
        }

        function pesanAir() {
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pesan-air.php';
            } else {
                $this->petunjukPesan();
            }
        }

        function riwayat() {
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/riwayat.php';
            } else {
                $this->login();
            }
        }

        function tentang() {
            if (isset($_SESSION['username'])) {
                $linkPasang = "pasang-air";
                $linkPesan = "pesan-air";
                $riwayatMenu = "";
                $masuk_btn = "d-none";
                $profil_btn = "";
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/tentang.php';
            } else {
                $linkPasang = "petunjuk-pasang-air";
                $linkPesan = "petunjuk-pesan-air";
                $riwayatMenu = "d-none";
                $masuk_btn = "";
                $profil_btn = "d-none";
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/tentang.php';
            }
        }

        function kontak() {
            if (isset($_SESSION['username'])) {
                $linkPasang = "pasang-air";
                $linkPesan = "pesan-air";
                $riwayatMenu = "";
                $masuk_btn = "d-none";
                $profil_btn = "";
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/kontak.php';
            } else {
                $linkPasang = "petunjuk-pasang-air";
                $linkPesan = "petunjuk-pesan-air";
                $riwayatMenu = "d-none";
                $masuk_btn = "";
                $profil_btn = "d-none";
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/kontak.php';
            }
        }

        function profil() {
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/profile.php';
            } else {
                $this->login();
            }
        }

        function profilEdit() {
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/profile-edit.php';
            } else {
                $this->login();
            }
        }

        function login() {
            $alert = "d-none";
            $e = "";
            require_once '/Applications/XAMPP/xamppfiles/htdocs/views/login.php';
        }

        function register() {
            $alert = "d-none";
            $e = "";
            require_once '/Applications/XAMPP/xamppfiles/htdocs/views/register.php';
        }

        function logout() {
            session_start();
            session_unset();
            session_destroy();
            setcookie('pass', '', 0);
            require_once '/Applications/XAMPP/xamppfiles/htdocs/views/index.php';
        }

        // submit form //
        
        function submitLayanan() {
            $service = $_POST['service'];
            $status = $_POST['status'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            if (!empty($name) && !empty($address)) {
                $this->model->setService($service, $status, $email, $phone, $name, $address);
                $alert = "d-none";
                $e = "";
                if ($service == "Pasang Air") {
                    require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pasang-air.php';
                } elseif ($service == "Pesan Air") {
                    require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pesan-air.php';

                }
            } else {
                $alert = "";
                $e = "Data tidak sesuai.";
                if ($service == "Pasang Air") {
                    require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pasang-air.php';
                } elseif ($service == "Pesab Air") {
                    require_once '/Applications/XAMPP/xamppfiles/htdocs/views/pesan-air.php';
                }
            }
        }

        function submitLogin() {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $auth = $this->model->auth($email, $password);
            if ($auth == 1) {
                $alert = "d-none";
                $e = "";
                session_start();
                $_SESSION['username'] = $email;
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/index.php';
            } else {
                $alert = "";
                $e = "Data tidak sesuai.";
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/login.php';
            }
        }

        function submitRegister() {
            $email = $_POST['email'];
            $user = $_POST['username'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $conPass = $_POST['conPassword'];
            $check = $this->model->getUser($email);
            if (!empty($email) && !empty($user) && !empty($phone) && !empty($password) && !empty($conPass) && empty($check) && $password == $conPass) {
                $alert = "d-none";
                $e = "";
                session_start();
                $_SESSION['username'] = $email;
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/index.php';
            } else {
                $alert = "";
                $e = "Data tidak sesuai kriteria formulir.";
                require_once '/Applications/XAMPP/xamppfiles/htdocs/views/register.php';
            }
        }

    }

?>