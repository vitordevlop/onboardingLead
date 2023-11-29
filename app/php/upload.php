<?php
// Verifica se foi enviado um arquivo
if ($_FILES["file"]["error"] > 0) {
    echo "Erro no envio do arquivo: " . $_FILES["file"]["error"];
} else {
    // Diretório para salvar os arquivos
    $uploadDir = "uploads/";

    // Cria o diretório se não existir
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Gera um nome único para o arquivo
    $fileName = uniqid() . '_' . $_FILES["file"]["name"];

    // Caminho completo do arquivo
    $filePath = $uploadDir . $fileName;

    // Move o arquivo para o diretório de uploads
    move_uploaded_file($_FILES["file"]["tmp_name"], $filePath);

    // Aqui você pode inserir a lógica para gravar o nome do arquivo no banco de dados
    // e associá-lo ao usuário ou à simulação de crédito

    // Exemplo de inserção no banco de dados usando MySQLi
    $mysqli = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    if ($mysqli->connect_error) {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
    }

    // Exemplo de inserção de dados na tabela "documentos"
    $sql = "INSERT INTO documentos (nome_arquivo, tipo_documento, id_usuario) VALUES ('$fileName', 'foto_documento', 1)";
    
    if ($mysqli->query($sql) === true) {
        echo "Arquivo enviado com sucesso.";
    } else {
        echo "Erro ao inserir no banco de dados: " . $mysqli->error;
    }

    $mysqli->close();
}
?>
