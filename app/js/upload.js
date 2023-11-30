function uploadFile() {
    const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];

    if (file) {
        const formData = new FormData();
        formData.append('file', file);

        fetch('app/php/upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Exibe a resposta do servidor (pode ser removido em produção)
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    } else {
        alert('Selecione um arquivo para enviar.');
    }
}
