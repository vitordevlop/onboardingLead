<?php
// Verificar as credenciais (substitua isso com a lógica real de verificação)
if ($_POST['username'] === 'admin' && $_POST['password'] === 'senha123') {
    // Iniciar a sessão e redirecionar para a página principal
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('Location: admin_dashboard.php');
    exit();
} else {
    echo 'Credenciais inválidas. Tente novamente.';
}
?>
