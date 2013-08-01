<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( dirname( __FILE__ ) )) . DS );
    
    require_once BASE_DIR . 'bean' . DS . 'bean.php';
    require_once BASE_DIR . 'dao' . DS . 'ContaDAO.php';
    
    class buscaSolicita{
        
        private $contaDAO;
        
        function buscaSolicita($id){
            $this->contaDAO = new ContaDAO();
            $query = $this->contaDAO->buscaSolicitacao($id);
            $relatorio .= "<table class='table table-hover'>";
            while ($row = mysql_fetch_array($query)){
                if($row['descricaoTipo'] == "Empréstimo"){
                    $tipo = "emprestou-lhe";
                }else{
                    $tipo = "pagou-lhe";
                }
                $relatorio .= "<tr class='info'>";
                $relatorio .= "<td>{$row['nome']}</td>";
                $relatorio .= "<td>{$tipo}</td>";
                $relatorio .= "<td>R$ {$row['valor']}</td>";
                $relatorio .= "<td>{$row['descricao']}</td>";
                //$this->relatorio .= "<td>{$row['data_operacao']}</td>";
                $relatorio .= "<td><a class='btn' name='confirmar' title='Confirmar' href='smd_principal.php?&acao=1&solicitacao={$row['cod_solicitacao']}'><i class='icon-ok'></i></a></td>";
                $relatorio .= "<td><a class='btn' name='cancelar' title='Cancelar' href='javascript:del({$row['cod_solicitacao']})'><i class='icon-remove'></i></a></td>";
                $relatorio .= "</tr>";
            }
            $relatorio .= "</table>";
            echo $relatorio;
        }
    }
?>