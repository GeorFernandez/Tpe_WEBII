<?php
    require_once ("./Views/LoginView.php");
    require_once ("./Models/LoginModel.php");
    require_once ("./helpers/asistenteLog.php");
//     class LoginController{
//         private $model;
//         private $view;
//         private $aux;
//         public function __construct(){
//             $this->model = new LoginModel;
//             $this->view = new LoginView();
//             $this->aux = new AsistenteLog();
//         }
//         public function login(){
//             $this->view->muestraLogin();
//         }
//         public function register(){
//             $email =$_POST['email'];
//             $password = $_POST['password'];
//             $usuario = $this->model->InsertarUsuario($email,$password);
            
//         }
//         public function verifyLogin($mensaje){
//             $email =$_GET['email'];
//             $password = $_GET['password'];
//             $usuario = $this->model->GetUsuario($email);
//             if((!empty($usuario))&& password_verify($password,$usuario->password)){
//                 $this->aux->login($usuario);
//                 header ("Location: ". DORAMA);
//             }else{
//                 $this->view->muestraLogin("Error al ingresar usuario");
//             }

//         }
//         public function logout() {
//         $this->authHelper->logout();
//         header('Location: ' . LOGIN);
//     }


// }
class LoginController {

    private $model;
    private $view;

	function __construct(){
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }
    
    public function IniciarSesion(){
        $password = $_POST['password'];

        $usuario = $this->model->GetPassword($_POST['user']);

        if (isset($usuario) && $usuario != null && password_verify($password, $usuario->password)){
            session_start();
            $_SESSION['user'] = $usuario->email;
            $_SESSION['userId'] = $usuario->id;
            header("Location: " . DORAMA);
        }else{
            header("Location: " . LOGIN);
        }
       // header("Location: " . BASE_URL);
    }

    public function Login(){
        $this->view->muestraLogin();
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

    
}
