<?php
    class Usuario{
        
        private $id, $nome, $login, $senha, $email, $telefone, $grupo;
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
                
        public function getNome(){
            return $this->nome;
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getGrupo() {
            return $this->grupo;
        }

        public function setGrupo($grupo) {
            $this->grupo = $grupo;
        }

        /*        
        function getUsuario(){
            $getUsuario = mysql_query("SELECT * FROM usuario WHERE nome like '%$this->nome%'");
            while($row = mysql_fetch_assoc($getUsuario)){
                $this->id = $row["cod_usuario"];
                $this->nome = utf8_encode($row["nome"]);
                $this->login = $row["login"];
                $this->email = $row["email"];
                $this->telefone = $row["telefone"];
                $this->grupo = $row["grupo"];
                
                $this->relatorio .= "<td>$this->id</td>";
                $this->relatorio .= "<td>$this->nome</td>";
                $this->relatorio .= "<td>$this->login</td>";
                $this->relatorio .= "<td>$this->email</td>";
                
                print_r($this->relatorio);
            }
        }*/
    }
?>
