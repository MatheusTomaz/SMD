<?php
    require_once('../bean/bean.php');
    require_once('../dao/ContaDAO.php');
    
    class operacoesHandler{
        
        public $msg, $color, $nome;
        private $usuario, $contaDAO, $saldoOff, $saldoOn;
    
        function operacoesHandler($id){
            
            $this->contaDAO = new ContaDAO();
            
            $this->usuario = new usuario();
            $this->usuario->setId($_GET['id']);
            $this->usuario->setDesc($_POST['descricao']);
            $this->usuario->setTipo($_POST['tipo']);
            $this->usuario->setValor($_POST['valor']);
            $this->usuario->setLogin($id);
            
            $this->buscarUsuario($this->usuario->getId());
            
            if(isset($_POST['acao'])){
                $this->cadastrar();
            }
            
        }
        
        function buscarUsuario($id){
            $query = $this->contaDAO->buscarUsuario($id);
            $row = mysql_fetch_array($query);
            $this->nome = $row['nome'];
            $this->saldo = $row['saldo'];
        }
                
        function cadastrar(){
            $query = $this->contaDAO->cadastrar($this->usuario);
            if($query){
                $this->msg .= "<div class='alert alert-success'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Cadastro realizado com sucesso!</b>";
                $this->msg .= "</div>";
            }else{
                $this->msg .= "<div class='alert alert-error'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Erro ao Cadastrar!</b>";
                $this->msg .= "</div>";
            }
        }
    }        
?>
