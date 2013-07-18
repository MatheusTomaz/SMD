<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname( dirname( __FILE__ ) ) . DS );
    
    require_once BASE_DIR . 'assets' . DS . 'config' . DS . 'conn.php';
    require_once BASE_DIR . 'bean' . DS . 'bean.php';
    require_once BASE_DIR . 'dao' . DS . 'UsuarioDAO.php';
    
    class LoginHandler{
        
        public $msg, $nome, $grupo;
        private $login, $usuario, $usuarioDAO;
        
        function LoginHandler(){
            
            $this->login = new Login();
            
            $this->usuarioDAO = new UsuarioDAO;
            
            $this->usuario = new usuario();
            $this->usuario->setLogin($_POST['login']);
            $this->usuario->setSenha($_POST['senha']);
                        
            if(isset($_POST['acao'])){
                $this->autenticar();
            }
            
            $this->recuperarUsuario();
            
            $logout = $_GET['logout'];
            $this->logout($logout);
        }            
        
        function autenticar(){
            if ($this->login->logar($this->usuario->getLogin(), $this->usuario->getSenha())){
                header("Location:usuario/principal.php");
            }else{ 
                $this->msg = "Login/Senha Inválidos!";
            }
        }
        
        function recuperarUsuario(){
            $res = $this->usuarioDAO->recuperarUsuario($this->login->getLogin(), nao);
            $row = mysql_fetch_array($res);
            $this->nome = $row["nome"];
        }
                
        function verificar(){
            if (!$this->login->verificar('../index.php'))
                exit;
        }
        
        function logout($logout){
            if($logout==1){
                $this->login->logout('../index.php');
            }
        }
    }
?>
