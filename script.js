function capturarLead(event) {
    event.preventDefault(); // Impede a página de recarregar
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;

    if (!nome || !email) {
        alert("Por favor, preencha todos os campos para receber o acesso.");
        return;
    }

    // AQUI: No futuro, você integrará com o Brevo/N8N.
    // Por enquanto, damos um feedback visual para o usuário.
    
    const btn = event.target.querySelector('button');
    const textoOriginal = btn.innerText;
    
    btn.innerText = "Enviando...";
    btn.disabled = true;

    // Simulação de envio (espera 1.5 segundos)
    setTimeout(() => {
        alert(`Obrigado, ${nome}! O link de acesso foi enviado para ${email}.`);
        btn.innerText = "Enviado com Sucesso!";
        btn.classList.add('bg-green-600', 'hover:bg-green-700');
        btn.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
        document.getElementById('form-comunidade').reset();
    }, 1500);
}
