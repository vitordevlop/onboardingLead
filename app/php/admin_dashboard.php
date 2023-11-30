<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="../css/style_admin_dashboard.css">
</head>
<body>
    <div id="header">
        <h1>Painel Administrativo</h1>
    </div>

    <div id="container">
        <h2>Visão Geral das Simulações</h2>

        <div id="summary">
            <div class="box">
                <h3>Total de Simulações</h3>
                <p>256</p>
            </div>
            <div class="box">
                <h3>Aprovadas</h3>
                <p>168</p>
            </div>
            <div class="box">
                <h3>Rejeitadas</h3>
                <p>45</p>
            </div>
        </div>

        <h2>Simulações Recentes</h2>

        <table>
            <tr>
                <th>Data</th>
                <th>Nome do Cliente</th>
                <th>Valor</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>2023-05-15</td>
                <td>João Silva</td>
                <td>R$ 5.000,00</td>
                <td>Aprovada</td>
            </tr>
            <tr>
                <td>2023-05-14</td>
                <td>Maria Souza</td>
                <td>R$ 8.500,00</td>
                <td>Rejeitada</td>
            </tr>
            <tr>
                <td>2023-05-13</td>
                <td>Carlos Pereira</td>
                <td>R$ 12.000,00</td>
                <td>Pendente</td>
            </tr>
        </table>

        <a href="#">Ver Todas as Simulações</a>
    </div>
</body>
</html>
