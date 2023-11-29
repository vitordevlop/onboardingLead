// Simule dados de parcelas
const installmentsData = [
    { months: 2, amount: 1050.0 },
    { months: 4, amount: 550.0 },
    { months: 6, amount: 350.0 },
    { months: 8, amount: 260.0 },
    { months: 10, amount: 210.0 },
    { months: 12, amount: 180.0 }
];

// Exiba as parcelas na página
const installmentsList = document.getElementById("installmentsList");

installmentsData.forEach(installment => {
    const paragraph = document.createElement("p");
    paragraph.textContent = `Parcela de ${installment.months} meses: R$ ${installment.amount.toFixed(2)}`;
    installmentsList.appendChild(paragraph);
});

function redirectToUpload() {
    // Redirecione para a página de upload de documentos
    window.location.href = "upload.html";
}
