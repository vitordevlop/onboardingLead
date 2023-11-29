function submitProspect() {
    // Coletar dados do formulário
    const cpf = document.getElementById('cpf').value;
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;

    // Validar dados (pode adicionar mais validações aqui)

    // Enviar dados para o servidor
    const formData = new FormData();
    formData.append('cpf', cpf);
    formData.append('name', name);
    formData.append('phone', phone);
    formData.append('email', email);

    // Fazer uma requisição AJAX para o servidor (pode usar fetch ou outras bibliotecas)
    fetch('php/prospect.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Manipular a resposta do servidor, se necessário
        console.log(data);
    })
    .catch(error => {
        console.error('Erro ao enviar dados para o servidor:', error);
    });
      // Redirecione para a página de parcelas
     window.location.href = "simulation.html";
}
