<?php
    require_once('../bean/bean.php');
    require_once('../dao/UsuarioDAO.php');
    
    class consultaHandler{
        
        public $relatorio, $msg, $numRes, $class;
        private $usuario, $usuarioDAO;
        
        function consultaHandler(){
            $this->usuarioDAO = new UsuarioDAO();
            
            $this->usuario = new Usuario();
            $this->usuario->setNome(utf8_decode($_POST['usuario_busca']));
            
            if(isset($_POST['acao'])){
                $this->buscarUsuario();
            }
        }
        
        function buscarUsuario(){
            $query = $this->usuarioDAO->buscarUsuario($this->usuario->getNome());
            $numRes = mysql_num_rows($query);
            $this->numRes = $numRes;
            if($numRes > 0){
                $this->relatorio .= "<table class='table table-hover' style='background:#F8F8F8;'>";
                $this->relatorio .= "<thead>";
                $this->relatorio .= "<tr>";
                $this->relatorio .= "<th>Conta</th>";
                $this->relatorio .= "<th>Nome</th>";
                $this->relatorio .= "<th>Login</th>";
                $this->relatorio .= "<th>E-mail</th>";
                $this->relatorio .= "</tr>";
                $this->relatorio .= "</thead>";
                
                while ($row = mysql_fetch_array($query)) {
                    $this->relatorio .= "<tr>";
                    $this->relatorio .= "<td>{$row['cod_usuario']}</td>";
                    $this->relatorio .= "<td>{$row["nome"]}</td>";
                    $this->relatorio .= "<td>{$row['login']}</td>";
                    $this->relatorio .= "<td>{$row['email']}</td>";
                    $this->relatorio .= "</tr>";
                }
                
                $this->relatorio .= "</table>";
                $this->class = "text-success";
                $this->msg = "Sua busca retornou <b>$numRes</b> resultado(s)";
                
            }else{
                
                $this->class = "text-error";
                $this->msg = "<b>Nenhum Resultado!</b>";
            }
        }
    }

?>
