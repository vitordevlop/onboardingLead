<?php
class Conexao {
    private static $conexao;

    private function __construct() {
        // Construtor privado para evitar instâncias não autorizadas
    }

    public static function obterConexao() {
        if (!isset(self::$conexao)) {
            // Configurações do banco de dados
            $host = "seu_host";
            $usuario = "seu_usuario";
            $senha = "sua_senha";
            $banco = "seu_banco";

            // Conectar ao banco de dados (substitua com sua biblioteca de conexão preferida)
            self::$conexao = new mysqli($host, $usuario, $senha, $banco);

            // Verificar a conexão
            if (self::$conexao->connect_error) {
                die("Falha na conexão: " . self::$conexao->connect_error);
            }
        }

        return self::$conexao;
    }
}
?>
