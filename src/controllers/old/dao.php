<?php
    require_once "db.php";


    class DaoCargas{
        public static $instance;

        private function __construct(){
            //
        }

        public static function getInstance() {
            if (!isset(self::$instance))
            self::$instance = new DaoCargas();

            return self::$instance;
        }

        public function Inserir(PojoCargas $carga) {
            try {
                $sql = "INSERT INTO carga (
                    data, 
                    linha_carga,
                    reponsavel,
                    faltas) VALUES (
                    :data,
                    :linha_carga,
                    :responsavel,
                    :faltas)";
                    

                    $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":data", $usuario->getData());
            $p_sql->bindValue(":linha_carga", $usuario->getLinha_carga());
            $p_sql->bindValue(":responsavel", $usuario->getResponsavel());
            $p_sql->bindValue(":faltas", $usuario->getFaltas());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " .
$e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }
}