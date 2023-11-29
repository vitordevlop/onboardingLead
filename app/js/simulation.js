function simulateLoan() {
    // Obtenha o valor do empréstimo
    const loanAmount = parseFloat(document.getElementById("loanAmount").value);

    // Obtenha o prazo do empréstimo
    const loanTerm = parseInt(document.getElementById("loanTerm").value);

    // Faça cálculos e exiba a próxima página
    // ...

    // Redirecione para a página de parcelas
    window.location.href = "installments.html";
}
