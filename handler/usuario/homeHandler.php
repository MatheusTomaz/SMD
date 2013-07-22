<?php
    require_once('../bean/bean.php');
    require_once('../dao/UsuarioDAO.php');
    
    class homeHandler{
        
        public $saldo, $color;
        private $usuario, $usuarioDAO;
        
        function homeHandler($id){
            $this->usuarioDAO = new UsuarioDAO();
            
            $this->usuario = new Usuario();
            $this->usuario->setId($id);
            
            $this->buscarUsuario();
                
        }
        
        function buscarUsuario(){
            $query = $this->usuarioDAO->selecionaID($this->usuario->getId());
            $row = mysql_fetch_array($query);
            $this->saldo = $row['saldo'];
            if($this->saldo >= 0){
                $this->color = '#00CC00';
            }else{
                $this->color = '#FF0000';
            }
        }
        
        
    }
?>
