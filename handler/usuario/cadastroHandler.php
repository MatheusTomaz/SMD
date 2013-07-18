<?php
    require_once('../bean/bean.php');
    require_once('../dao/UsuarioDAO.php');
    
    class cadastroHandler{
        
        public $msg;
        
        private $usuario, $usuarioDAO;
    
        function cadastroHandler(){
            
            $this->usuarioDAO = new UsuarioDAO();
            
            $this->usuario = new usuario();
            $this->usuario->setNome(utf8_decode($_POST['nome']));
            $this->usuario->setLogin($_POST['login']);
            $this->usuario->setSenha($_POST['senha']);
            $this->usuario->setEmail($_POST['email']);
            $this->usuario->setTelefone($_POST['telefone']);
            $this->usuario->setGrupo($_POST['grupo']);
            
            if(isset($_POST['acao'])){
 
                $this->cadastrar();

                /*    case "getUsuario":{
                        $getUsuario = new usuario;
                        $getUsuario->nome = $_POST['nome'];

                        $getUsuario->getUsuario();
                        $getUsuario->relatorio;
                    }
                    break;*/
            }
        }
        
        function validarDados(){
            $res = $this->usuarioDAO->recuperarUsuario($this->usuario->getLogin(), $this->usuario->getEmail());
            return (mysql_num_rows($res)>0);
        }
                
        function cadastrar(){
            if(!$this->validarDados()){
                $this->usuarioDAO->cadastrar($this->usuario);
            }else{
                $this->msg = "Login/Email já existente!";
            }
        }
    
    }
?>
