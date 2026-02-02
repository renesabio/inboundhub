function gerarPrompt() {
    const nicho = document.getElementById('nicho').value;
    const publico = document.getElementById('publico').value;

    if (!nicho || !publico) {
        alert("Por favor, preencha o nicho e o público alvo para gerarmos sua estratégia.");
        return;
    }

    // Lógica do Prompt - Estrutura Profissional
    const promptTexto = `Atue como Estrategista Sênior de Inbound Marketing.
Crie um briefing estruturado para o nicho "${nicho}" focado no público-alvo "${publico}".

Requisitos da resposta:
1. Mapeamento de dores reais e ocultas desse público.
2. Sugestão de 3 pautas de conteúdo de fundo de funil (decisão).
3. Tom de voz: Autoridade técnica, porém empático e focado em resolução.
    
Evite clichês de marketing. Foque em dados e comportamento.`;

    document.getElementById('promptOutput').value = promptTexto;
    document.getElementById('resultadoArea').classList.remove('hidden');
}
