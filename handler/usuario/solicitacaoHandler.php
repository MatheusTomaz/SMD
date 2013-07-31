<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( dirname( __FILE__ ) )) . DS );
    
    require_once BASE_DIR . 'bean' . DS . 'bean.php';
    require_once BASE_DIR . 'dao' . DS . 'ContaDAO.php';  
    
    class solicitacaoHandler{
        
        public $msg, $color, $nome, $saldoOff, $saldoOn ;
        private $usuario, $contaDAO, $saldo, $saldoOp;
    
        function solicitacaoHandler(){
            
            $this->contaDAO = new ContaDAO();
            $this->usuario = new usuario();
            
            if(isset($_GET['acao'])){
                if(isset($_GET['solicitacao'])){
                    if($_GET['acao']==1){
                        
                        $this->cadastrarOperacao($_GET['solicitacao']); 
                        
                        if($this->usuario->getTipo()==1){
                            $this->buscaEmprestado();
                        }else{
                            $this->buscaPagamentoOff();
                        }
                        $this->atualizaSaldoOff();
                        
                        if($this->usuario->getTipo()==1){
                            $this->buscaEmprestimo();
                        }else{
                            $this->buscaPagamentoOn();
                        }
                        $this->atualizaSaldoOn();
                    }elseif($_GET['acao']==0){
                        $this->contaDAO->atualizaSolicitacao($_GET['solicitacao'], 2);
                    }
                }
            }
        }
        
        function buscarUsuario($id){
            $query = $this->contaDAO->buscarUsuario($id);
            $row = mysql_fetch_array($query);
            $this->nome = $row['nome'];
            $this->saldo = $row['saldo'];
            $this->saldoOp = $row['saldo'];
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
        
        function atualizaSaldoOff(){
            $query = $this->contaDAO->atualizaSaldo($this->saldoOff,$this->usuario->getCodOff());
            if($query){
                $this->msg .= "<div class='alert alert-error'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Erro ao Atualizar o Saldo!</b>";
                $this->msg .= "</div>";   
            }
        }
        
        function atualizaSaldoOn(){
            $query = $this->contaDAO->atualizaSaldo($this->saldoOn,$this->usuario->getCodOn());
            if($query){
                $this->msg .= "<div class='alert alert-error'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Erro ao Atualizar o Saldo!</b>";
                $this->msg .= "</div>";   
            }
        }
        
        function cadastrarOperacao($solicitacao){
            $query = $this->contaDAO->buscarOperacao($solicitacao);
            $row = mysql_fetch_array($query);
            $this->usuario->setCodOn($row['cod_usuario_on']);
            $this->usuario->setCodOff($row['cod_usuario_off']);
            $this->usuario->setTipo($row['tipoOperacao']);
            $this->usuario->setDesc($row['descricao']);
            $this->usuario->setValor($row['valor']);
            $this->usuario->setData($row['data_operacao']);
            if($this->contaDAO->cadastrarOperacao($this->usuario)){
                $this->msg .= "<div class='alert alert-success'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Solicitação Aceita!</b>";
                $this->msg .= "</div>"; 
                $this->contaDAO->atualizaSolicitacao($solicitacao, 0);
            }else{
                $this->msg .= "<div class='alert alert-error'>";
                $this->msg .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                $this->msg .= "<b>Erro ao Cadastrar Solicitação!</b>";
                $this->msg .= "</div>";  
            }
            
        }
        
        function buscaEmprestado(){
            $query = $this->contaDAO->procurarOperacao($this->usuario->getCodOff(), 'cod_usuario_off', 1);
            $row = mysql_fetch_array($query);
            $valor = $row['valor'];
            $query2 = $this->contaDAO->buscarUsuario($this->usuario->getCodOff());
            if($query2){
            $row2 = mysql_fetch_array($query2);
            $saldo = $row2['saldo'];
            $this->saldoOff = $saldo - $valor;
            }else{
                die($this->usuario->getCodOff());
            }
        }
        
        function buscaPagamentoOff(){
            $query = $this->contaDAO->procurarOperacao($this->usuario->getCodOff(), 'cod_usuario_off', 2);
            $row = mysql_fetch_array($query);
            $valor = $row['valor'];
            $query2 = $this->contaDAO->buscarUsuario($this->usuario->getCodOff());
            $row2 = mysql_fetch_array($query2);
            $saldo = $row2['saldo'];
            $this->saldoOff = $saldo + $valor;
        }
                
        function buscaEmprestimo(){
            $query = $this->contaDAO->procurarOperacao($this->usuario->getCodOn(), 'cod_usuario_on', 1);
            $row = mysql_fetch_array($query);
            $valor = $row['valor'];
            $query2 = $this->contaDAO->buscarUsuario($this->usuario->getCodOn());
            $row2 = mysql_fetch_array($query2);
            $saldo = $row2['saldo'];
            $this->saldoOn = $saldo + $valor;
        }
        
        function buscaPagamentoOn(){
            $query = $this->contaDAO->procurarOperacao($this->usuario->getCodOn(), 'cod_usuario_on', 2);
            $row = mysql_fetch_array($query);
            $valor = $row['valor'];
            $query2 = $this->contaDAO->buscarUsuario($this->usuario->getCodOn());
            $row2 = mysql_fetch_array($query2);
            $saldo = $row2['saldo'];
            $this->saldoOn = $saldo - $valor;
        }
        
    }
?>
