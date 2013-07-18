<?php
    class UsuarioDAO{
        
        public function UsuarioDAO(){
                        
        }
        
        public function recuperarUsuario($login, $email){
            $query = mysql_query("SELECT * FROM usuario WHERE login = '$login' OR email = '$email'");
            return $query;
        }

        public function cadastrar($usuario){
            $nome = utf8_encode($usuario->getNome());
            $query = mysql_query("INSERT INTO usuario VALUES (null,
            '$nome',
            '{$usuario->getLogin()}',
            '{$usuario->getSenha()}',
            '{$usuario->getEmail()}',
            '{$usuario->getTelefone()}',
            '{$usuario->getGrupo()}')");
            
            return $query;
        }
        
        public function buscarUsuario($nome){
            $query = mysql_query("SELECT * FROM usuario WHERE nome like '%$nome%'");
            return $query;
        }
        
    }
?>
