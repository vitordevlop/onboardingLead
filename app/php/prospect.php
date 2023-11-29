<?php
// Conectar ao banco de dados (substitua com suas credenciais)
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "ProjetoLead";
$db_port = 8889;


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$cpf = $_POST['cpf'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Preparar e executar a consulta SQL
$sql = "INSERT INTO prospects (cpf, name, phone, email) VALUES ('$cpf', '$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true, 'message' => 'Dados salvos com sucesso.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao salvar dados: ' . $conn->error]);
}

$conn->close();
?>
