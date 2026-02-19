<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Briefing com IA | Inbound Hub</title>
    <meta name="description" content="Crie briefings de marketing perfeitos em segundos. Nossa ferramenta gera um prompt estruturado para você usar no ChatGPT, Claude ou Gemini.">
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700&display=swap" rel="stylesheet">

    <style>
        .step-active { border-color: #4f46e5; color: #4f46e5; }
        .step-completed { border-color: #10b981; color: #10b981; }
        .step-inactive { border-color: #e2e8f0; color: #94a3b8; }
        
        /* Esconder passos não ativos */
        .form-step { display: none; }
        .form-step.active { display: block; animation: fadeIn 0.5s; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <header class="bg-white border-b border-slate-200 py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="bg-indigo-100 text-indigo-700 font-bold px-3 py-1 rounded-full text-xs uppercase tracking-widest mb-4 inline-block">
                Ferramenta Gratuita
            </span>
            <h1 class="text-3xl md:text-5xl font-bold text-slate-900 font-serif mb-4">
                Gerador de Briefing <span class="text-indigo-600">com IA</span>
            </h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                Pare de receber respostas genéricas da IA. Preencha os campos abaixo e geraremos um <strong>prompt de engenharia avançada</strong> para você colar no ChatGPT e obter um plano de marketing impecável.
            </p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10">
        
        <div class="flex justify-between mb-10 relative">
            <div class="absolute top-1/2 left-0 w-full h-1 bg-slate-200 -z-10 transform -translate-y-1/2"></div>
            
            <div id="progress-1" class="step-indicator step-active bg-white border-2 w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all">1</div>
            <div id="progress-2" class="step-indicator step-inactive bg-white border-2 w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all">2</div>
            <div id="progress-3" class="step-indicator step-inactive bg-white border-2 w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all">3</div>
            <div id="progress-4" class="step-indicator step-inactive bg-white border-2 w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all">4</div>
            <div id="progress-5" class="step-indicator step-inactive bg-white border-2 w-10 h-10 rounded-full flex items-center justify-center font-bold transition-all">🚀</div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-8 md:p-12">
            
            <form id="briefingForm" onsubmit="return false;">
                
                <div id="step-1" class="form-step active">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <span class="text-indigo-600">01.</span> O Cenário
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nome da Empresa</label>
                            <input type="text" id="companyName" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: TechSolutions">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Segmento / Nicho</label>
                            <input type="text" id="industry" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: SaaS B2B para RH">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Qual é o Produto/Serviço principal?</label>
                        <textarea id="product" rows="3" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Descreva o que você vende e qual o principal diferencial competitivo (USP)."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Contexto Atual</label>
                        <textarea id="context" rows="3" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: Estamos lançando uma nova feature; ou As vendas caíram 20%; ou Queremos entrar em um novo mercado."></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button onclick="nextStep(2)" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-indigo-700 transition">Próximo →</button>
                    </div>
                </div>

                <div id="step-2" class="form-step">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <span class="text-indigo-600">02.</span> O Público-Alvo
                    </h2>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Quem é o Decisor de Compra? (Persona)</label>
                        <input type="text" id="personaRole" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: Diretor de RH, 35-45 anos, pressionado por eficiência.">
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Principais Dores (Pains)</label>
                            <textarea id="pains" rows="4" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="O que tira o sono dele? Ex: Processos manuais lentos, alto custo de turnover..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Principais Desejos (Gains)</label>
                            <textarea id="gains" rows="4" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="O que ele ganha com sua solução? Ex: Economia de tempo, promoção, reconhecimento..."></textarea>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Principal Objeção de Venda</label>
                        <input type="text" id="objection" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Por que ele NÃO compraria? Ex: 'É muito caro' ou 'A implementação é demorada'.">
                    </div>

                    <div class="flex justify-between">
                        <button onclick="nextStep(1)" class="text-slate-500 font-bold hover:text-slate-800">← Voltar</button>
                        <button onclick="nextStep(3)" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-indigo-700 transition">Próximo →</button>
                    </div>
                </div>

                <div id="step-3" class="form-step">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <span class="text-indigo-600">03.</span> Objetivos e Metas
                    </h2>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Objetivo Principal (Macro)</label>
                        <select id="goal" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none bg-white">
                            <option value="Gerar Leads Qualificados (MQLs)">Gerar Leads Qualificados (MQLs)</option>
                            <option value="Brand Awareness (Reconhecimento de Marca)">Brand Awareness (Reconhecimento de Marca)</option>
                            <option value="Vendas Diretas / Conversão">Vendas Diretas / Conversão</option>
                            <option value="Educação de Mercado">Educação de Mercado</option>
                            <option value="Retenção / LTV">Retenção de Clientes / LTV</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">KPIs de Sucesso (Específico)</label>
                        <textarea id="kpis" rows="3" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: Aumentar leads em 20% em 3 meses; Reduzir CAC para R$ 50,00."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Estágio do Funil</label>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="funnel" value="Topo (Atração)" checked class="text-indigo-600 focus:ring-indigo-500"> Topo
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="funnel" value="Meio (Consideração)" class="text-indigo-600 focus:ring-indigo-500"> Meio
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="funnel" value="Fundo (Decisão)" class="text-indigo-600 focus:ring-indigo-500"> Fundo
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <button onclick="nextStep(2)" class="text-slate-500 font-bold hover:text-slate-800">← Voltar</button>
                        <button onclick="nextStep(4)" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-indigo-700 transition">Próximo →</button>
                    </div>
                </div>

                <div id="step-4" class="form-step">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <span class="text-indigo-600">04.</span> Diretrizes
                    </h2>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Tom de Voz (Tone of Voice)</label>
                        <input type="text" id="tone" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: Profissional, Autoridade, mas Empático e Acessível. Sem jargões complexos.">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Formatos Desejados (Entregáveis)</label>
                        <textarea id="deliverables" rows="3" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: 5 Posts para LinkedIn, 1 E-mail de Vendas e Estrutura de Landing Page."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Restrições (O que NÃO fazer)</label>
                        <input type="text" id="constraints" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Ex: Não prometer resultados rápidos, não citar concorrente X.">
                    </div>

                    <div class="flex justify-between">
                        <button onclick="nextStep(3)" class="text-slate-500 font-bold hover:text-slate-800">← Voltar</button>
                        <button onclick="generatePrompt()" class="bg-green-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-green-700 transition shadow-lg shadow-green-500/30">Gerar Prompt Mágico ✨</button>
                    </div>
                </div>

                <div id="step-5" class="form-step text-center">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-4xl mx-auto mb-4">
                            ✅
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900">Seu Prompt está Pronto!</h2>
                        <p class="text-slate-500 mt-2">Copie o código abaixo e cole no seu LLM favorito (ChatGPT, Claude, Gemini).</p>
                    </div>

                    <div class="relative text-left">
                        <textarea id="finalPrompt" readonly class="w-full h-96 bg-slate-900 text-green-400 font-mono text-sm p-6 rounded-xl border border-slate-700 focus:outline-none resize-none"></textarea>
                        
                        <button onclick="copyToClipboard()" class="absolute top-4 right-4 bg-white/10 hover:bg-white/20 text-white border border-white/20 px-4 py-2 rounded text-sm font-bold backdrop-blur-sm transition flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            Copiar Prompt
                        </button>
                    </div>

                    <div class="mt-8 flex justify-center gap-4">
                        <button onclick="location.reload()" class="text-indigo-600 font-bold hover:underline">Criar Novo Briefing</button>
                        <a href="https://chat.openai.com/" target="_blank" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-full hover:bg-indigo-700 transition no-underline">Abrir ChatGPT ↗</a>
                    </div>
                </div>

            </form>
        </div>
        
        <div class="mt-12 grid md:grid-cols-3 gap-6 text-center text-sm text-slate-500">
            <div>
                <strong class="block text-slate-900 mb-1">Engenharia de Prompt</strong>
                Nosso algoritmo estrutura os dados usando a técnica "Role-Task-Context" para máxima fidelidade da IA.
            </div>
            <div>
                <strong class="block text-slate-900 mb-1">Agnóstico de Plataforma</strong>
                Funciona perfeitamente no GPT-4, Claude 3.5 Sonnet, Gemini Advanced e Llama 3.
            </div>
            <div>
                <strong class="block text-slate-900 mb-1">Privacidade Total</strong>
                Seus dados não são salvos em nosso servidor. Todo o processamento é feito no seu navegador.
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script>
        let currentStep = 1;

        function nextStep(step) {
            // Validação simples (opcional)
            // if (step > currentStep && !validateStep(currentStep)) return;

            // Esconde atual
            document.getElementById(`step-${currentStep}`).classList.remove('active');
            document.getElementById(`progress-${currentStep}`).classList.remove('step-active');
            document.getElementById(`progress-${currentStep}`).classList.add('step-completed');

            // Mostra novo
            document.getElementById(`step-${step}`).classList.add('active');
            
            // Atualiza barra de progresso visualmente
            // Resetar todos
            for(let i=1; i<=5; i++){
                const el = document.getElementById(`progress-${i}`);
                el.classList.remove('step-active', 'step-completed', 'step-inactive');
                
                if(i < step) {
                    el.classList.add('step-completed');
                    el.style.backgroundColor = '#d1fae5'; // verde claro
                    el.style.borderColor = '#10b981';
                    el.style.color = '#065f46';
                } else if (i === step) {
                    el.classList.add('step-active');
                    el.style.backgroundColor = '#fff';
                    el.style.borderColor = '#4f46e5';
                    el.style.color = '#4f46e5';
                } else {
                    el.classList.add('step-inactive');
                    el.style.backgroundColor = '#fff';
                    el.style.borderColor = '#e2e8f0';
                    el.style.color = '#94a3b8';
                }
            }
            
            currentStep = step;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function generatePrompt() {
            // Coletar dados
            const data = {
                company: document.getElementById('companyName').value,
                industry: document.getElementById('industry').value,
                product: document.getElementById('product').value,
                context: document.getElementById('context').value,
                persona: document.getElementById('personaRole').value,
                pains: document.getElementById('pains').value,
                gains: document.getElementById('gains').value,
                objection: document.getElementById('objection').value,
                goal: document.getElementById('goal').value,
                kpis: document.getElementById('kpis').value,
                funnel: document.querySelector('input[name="funnel"]:checked').value,
                tone: document.getElementById('tone').value,
                deliverables: document.getElementById('deliverables').value,
                constraints: document.getElementById('constraints').value
            };

            // Construir o Prompt (Engenharia de Prompt Avançada)
            const prompt = `
# ATUE COMO UM ESTRATEGISTA SÊNIOR DE MARKETING (ROLE)

Você é um especialista em Inbound Marketing, Copywriting Persuasivo e Psicologia do Consumidor. Sua tarefa é criar um plano tático e os conteúdos baseados estritamente nas informações abaixo.

---

## 1. CONTEXTO DO NEGÓCIO
**Empresa:** ${data.company}
**Setor:** ${data.industry}
**O que vendemos (USP):** ${data.product}
**Momento Atual:** ${data.context}

## 2. QUEM É O CLIENTE (PERSONA)
**Perfil:** ${data.persona}
**Dores Principais (Pains):** ${data.pains}
**Desejos (Gains):** ${data.gains}
**Maior Objeção:** ${data.objection}

## 3. OBJETIVOS DA CAMPANHA
**Objetivo Macro:** ${data.goal}
**KPIs de Sucesso:** ${data.kpis}
**Estágio do Funil:** ${data.funnel}

## 4. DIRETRIZES DE CRIAÇÃO
**Tom de Voz:** ${data.tone}
**Restrições (O que NÃO fazer):** ${data.constraints}

---

## SUA TAREFA (DELIVERABLES)

Com base nos dados acima, por favor, entregue:

${data.deliverables}

## INSTRUÇÕES ADICIONAIS
1. Use técnicas de copywriting como PAS (Problema-Agitação-Solução) ou AIDA.
2. Seja específico e evite clichês genéricos de marketing.
3. Foque em quebrar a objeção principal mencionada (${data.objection}).
4. Mantenha o tom de voz solicitado estritamente.

Aguardo o retorno estruturado.
            `;

            document.getElementById('finalPrompt').value = prompt.trim();
            nextStep(5);
        }

        function copyToClipboard() {
            const copyText = document.getElementById("finalPrompt");
            copyText.select();
            copyText.setSelectionRange(0, 99999); 
            navigator.clipboard.writeText(copyText.value);
            
            // Feedback visual botão
            const btn = document.querySelector('#step-5 button');
            const originalText = btn.innerHTML;
            btn.innerHTML = "Copiado! ✅";
            setTimeout(() => {
                btn.innerHTML = originalText;
            }, 2000);
        }
    </script>
</body>
</html>
