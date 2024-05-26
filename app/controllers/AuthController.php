<?php 
class AuthController extends Controller {
    public function login() {
        $this->view('login/index');
    }

    public function loginProcess() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $petugasModel = $this->model('Petugas_Model');
            $petugas = $petugasModel->getPetugasByUsername($username);
    
            if ($petugas && $password === $petugas['password']) {  // Perbandingan langsung tanpa hashing
                // Set session
                session_start();
                // Set session
                $_SESSION['user_id'] = $petugas['kode_petugas'];  
                $_SESSION['username'] = $petugas['username'];      
                $_SESSION['nama'] = $petugas['nama']; // Pastikan nama pengguna disimpan dalam sesi
                header('Location:' . BASEURL . '/Admin/index.php');
                exit();
            } else {
                // Password salah atau pengguna tidak ditemukan
                header('Location:' . BASEURL . '/login/index.php?error=username/password tidak valid, harap ulangi');
                exit();
            }
        } else {
            header('Location:' . BASEURL . '/login/index.php?error=username/password tidak pas, harap ulangi');
            exit();
        }
    }
    

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL .'/login/index.php');
        exit();
    }
}
?>