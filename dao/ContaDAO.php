<?php
    class ContaDAO{
        
        public function ContaDAO(){
                        
        }
        
        public function recuperarUsuario($login, $email){
            $query = mysql_query("SELECT * FROM usuario WHERE login = '$login' OR email = '$email'");
            return $query;
        }

        public function cadastrar($usuario){
            $data = date("Y-m-d H:i:s");
            $query = mysql_query("INSERT INTO solicitacao VALUES (null,
            '{$usuario->getLogin()}',
            '{$usuario->getId()}',
            '{$usuario->getTipo()}',
            '{$usuario->getDesc()}',
            '{$usuario->getValor()}',
            '1',    
            '$data')");
            
            return $query;
        }
        //
        public function buscarUsuario($id){
            $query = mysql_query("SELECT * FROM usuario WHERE cod_usuario = $id");
            return $query;
        }
        
        public function cadastrarOperacao($usuario){
            $query = mysql_query("INSERT INTO operacoes VALUES (null,
            '{$usuario->getCodOn()}',
            '{$usuario->getCodOff()}',
            '{$usuario->getTipo()}',
            '{$usuario->getDesc()}',
            '{$usuario->getValor()}',
            '{$usuario->getData()}')");
            
            return $query;
        }
        
        public function buscarOperacao($solicitacao){
            $query = mysql_query("
                SELECT * FROM solicitacao WHERE cod_solicitacao = '$solicitacao'
            ");
            return $query;
        }
        
        public function procurarOperacao($id, $usuario, $tipo){
            $query = mysql_query("
                SELECT * FROM operacoes WHERE $usuario = '$id' and tipoOperacoes = '$tipo' ORDER BY data_operacao DESC LIMIT 1
            ");
            return $query;
        }
        
        public function selecionaID($id){
            $query = mysql_query("SELECT * FROM usuario WHERE cod_usuario = '$id'");
            return $query;
        }
        
        public function atualizaSaldo($saldo,$id){
            $query = mysql_query("UPDATE usuario SET saldo = '$saldo' where cod_usuario = '$id' ");
        }
        
        public function atualizaSolicitacao($solicitacao, $ativo){
            $query = mysql_query("UPDATE solicitacao SET ativo = $ativo where cod_solicitacao = '$solicitacao' ");
        }
        
        public function buscaSolicitacao($id){
            $query = mysql_query("
                SELECT 
                    S.cod_solicitacao, U.nome, T.descricaoTipo, S.descricao, S.valor, S.data_operacao
                FROM 
                    solicitacao as S, usuario as U, tipo_operacao as T 
                WHERE
                    ativo = 1 
                    and cod_usuario_off = '$id' 
                    and U.cod_usuario = S.cod_usuario_on 
                    and T.cod_tipoOperacao = S.tipoOperacao
                ORDER BY
                    S.data_operacao DESC
            ");
            return $query;
        }
    }
?>
