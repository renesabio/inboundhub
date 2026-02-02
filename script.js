// Função para mostrar o Gerador de Prompt e esconder os cards
function abrirGerador() {
    document.getElementById('grid-ferramentas').classList.add('hidden');
    document.getElementById('area-gerador').classList.remove('hidden');
}

// Função para voltar aos cards
function fecharGerador() {
    document.getElementById('area-gerador').classList.add('hidden');
    document.getElementById('grid-ferramentas').classList.remove('hidden');
}

// Lógica do Gerador de Prompt
function gerarPrompt() {
    const nicho = document.getElementById('nicho').value;
    const publico = document.getElementById('publico').value;

    if (!nicho || !publico) {
        alert("Preencha os campos de Nicho e Público para prosseguir.");
        return;
    }

    const promptTexto = `Atue como Estrategista Sênior de RevOps e Inbound.
Desenvolva uma estrutura de campanha para o nicho "${nicho}" visando o público "${publico}".

ENTREGÁVEIS:
1. Mapeamento de objeções ocultas na decisão de compra.
2. 3 Pautas de conteúdo fundo de funil focadas em conversão.
3. Sugestão de Lead Magnet técnico (Planilha, Checklist ou Audit).

Tom: Analítico, direto e focado em ROI.`;

    document.getElementById('promptOutput').value = promptTexto;
    document.getElementById('resultadoPrompt').classList.remove('hidden');
}
