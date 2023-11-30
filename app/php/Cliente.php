<?php

require_once 'Conexao.php';


class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;

    // Construtor
    public function __construct($nome, $cpf, $email, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Métodos Getter e Setter

    // Método para Salvar um Cliente no Banco de Dados
    public function salvar() {
        // Implementa a lógica para inserir um novo cliente no banco de dados
        // Retorna o ID gerado para o cliente
        // Exemplo com SQL:
        $conexao = Conexao::obterConexao();
        $sql = "INSERT INTO clientes (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssss", $this->nome, $this->cpf, $this->email, $this->telefone);
        $stmt->execute();
        $this->id = $stmt->insert_id;
        $stmt->close();
    }

    // Método para Atualizar os Dados de um Cliente no Banco de Dados
    public function atualizar() {
        // Implementa a lógica para atualizar os dados de um cliente no banco de dados
        // Exemplo com SQL:
        $conexao = Conexao::obterConexao();
        $sql = "UPDATE clientes SET nome=?, cpf=?, email=?, telefone=? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssi", $this->nome, $this->cpf, $this->email, $this->telefone, $this->id);
        $stmt->execute();
        $stmt->close();
    }

    // Método Estático para Buscar um Cliente pelo ID
    public static function buscarPorId($id) {
        // Implementa a lógica para buscar um cliente pelo ID no banco de dados
        // Retorna um objeto Cliente se encontrado, ou null se não encontrado
        // Exemplo com SQL:
        $conexao = Conexao::obterConexao();
        $sql = "SELECT * FROM clientes WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $cliente = $result->fetch_assoc();
            return new Cliente($cliente['nome'], $cliente['cpf'], $cliente['email'], $cliente['telefone']);
        } else {
            return null;
        }
    }

    // Método Estático para Listar Todos os Clientes
    public static function listarTodos() {
        // Implementa a lógica para listar todos os clientes no banco de dados
        // Retorna um array de objetos Cliente
        // Exemplo com SQL:
        $conexao = Conexao::obterConexao();
        $clientes = array();
        $sql = "SELECT * FROM clientes";
        $result = $conexao->query($sql);
        while ($cliente = $result->fetch_assoc()) {
            $clientes[] = new Cliente($cliente['nome'], $cliente['cpf'], $cliente['email'], $cliente['telefone']);
        }
        return $clientes;
    }

    // Método para Excluir um Cliente do Banco de Dados
    public function excluir() {
        // Implementa a lógica para excluir um cliente do banco de dados pelo ID
        // Exemplo com SQL:
        $conexao = Conexao::obterConexao();
        $sql = "DELETE FROM clientes WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $stmt->close();
    }

    // Métodos Adicionais

    // ...

    // Método para Converter o Cliente para JSON
    public function toJSON() {
        // Retorna os dados do cliente em formato JSON
        return json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'telefone' => $this->telefone
        ]);
    }
}
?>
