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
                $relatorio .= "<tr class='info'>";
                $relatorio .= "<td>{$row['nome']}</td>";
                $relatorio .= "<td>{$row['descricaoTipo']}</td>";
                $relatorio .= "<td>{$row['descricao']}</td>";
                $relatorio .= "<td>R$ {$row['valor']}</td>";
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