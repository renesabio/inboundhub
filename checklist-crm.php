<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist de Maturidade CRM | Inbound Hub</title>
    <meta name="description" content="Auditoria completa do seu CRM. Descubra se sua operação é baseada em dados ou se você está apenas usando uma agenda de luxo.">
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700&display=swap" rel="stylesheet">

    <style>
        /* Custom Checkbox Style */
        .custom-checkbox input:checked + div {
            background-color: #7c3aed; /* Purple-600 */
            border-color: #7c3aed;
        }
        .custom-checkbox input:checked + div svg {
            display: block;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <header class="bg-white border-b border-slate-200 py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="bg-purple-100 text-purple-700 font-bold px-3 py-1 rounded-full text-xs uppercase tracking-widest mb-4 inline-block">
                Diagnóstico Técnico
            </span>
            <h1 class="text-3xl md:text-5xl font-bold text-slate-900 font-serif mb-6">
                Seu CRM é um <span class="text-purple-600">Cérebro</span> ou um <span class="text-slate-400 line-through">Arquivo Morto</span>?
            </h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">
                A maioria das empresas usa 10% do potencial do CRM. Faça este checklist criterioso para descobrir o nível real de maturidade da sua operação de vendas e dados.
            </p>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 py-12">
        
        <div class="grid lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                
                <form id="auditForm">

                    <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-100">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-xl">💾</div>
                            <h2 class="text-xl font-bold text-slate-900">1. Arquitetura & Higiene de Dados</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Existe uma regra clara de detecção de duplicatas (por CNPJ, E-mail ou Domínio) que roda automaticamente.</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Os campos de "Motivo de Perda" (Loss Reason) são obrigatórios e estruturados (não permitem texto livre).</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">O CRM está integrado ao ERP/Financeiro: quando a venda ocorre, o contrato é gerado sem redigitação.</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Usamos enriquecimento de dados automático (ex: puxar dados da Receita Federal ou LinkedIn ao digitar o CNPJ).</span>
                            </label>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-100">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-xl">⚙️</div>
                            <h2 class="text-xl font-bold text-slate-900">2. Processos & Playbook</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Temos um SLA claro: Marketing sabe exatamente o que é um MQL e Vendas tem prazo definido para o primeiro contato.</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">O funil reflete a jornada do cliente, não a conveniência do vendedor (ex: etapas baseadas em "cliente aceitou proposta" e não "enviei proposta").</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="5">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Existem automações de "Nurture" para leads que esfriaram ou deram "Lost", sem depender da memória do vendedor.</span>
                            </label>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-100">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center text-xl">🤖</div>
                            <h2 class="text-xl font-bold text-slate-900">3. Inteligência (2026 Ready)</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="10"> <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Utilizamos transcrição de chamadas (VoiP) que preenche automaticamente o resumo da reunião no CRM.</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="10">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">O Lead Scoring é preditivo (baseado em comportamento real) e não apenas estático (cargo/tamanho da empresa).</span>
                            </label>

                            <label class="custom-checkbox flex items-start gap-3 cursor-pointer p-3 hover:bg-slate-50 rounded-lg transition">
                                <input type="checkbox" class="hidden" value="10">
                                <div class="w-6 h-6 border-2 border-slate-300 rounded flex items-center justify-center bg-white transition-colors flex-shrink-0">
                                    <svg class="w-4 h-4 text-white hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">Temos dashboards que mostram não só o passado (vendas realizadas), mas a previsão (Forecast) com mais de 80% de acurácia.</span>
                            </label>
                        </div>
                    </div>

                </form>

                <div class="flex justify-center pt-8">
                    <button onclick="calculateMaturity()" class="bg-slate-900 text-white font-bold py-4 px-12 rounded-full text-lg hover:bg-slate-800 transition shadow-xl transform hover:-translate-y-1">
                        Calcular Nível de Maturidade
                    </button>
                </div>

            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <div id="resultCard" class="bg-white rounded-2xl shadow-xl border border-slate-200 p-8 text-center transition-all duration-500">
                        
                        <div id="initialState">
                            <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center text-4xl mx-auto mb-6 text-slate-400">
                                ⚖️
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Aguardando Dados</h3>
                            <p class="text-slate-500 text-sm">Marque as opções ao lado para revelar seu diagnóstico.</p>
                        </div>

                        <div id="calculatedState" class="hidden">
                            <div class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-2">Sua Pontuação</div>
                            <div id="scoreValue" class="text-6xl font-black text-purple-600 mb-4">0%</div>
                            
                            <h3 id="levelTitle" class="text-2xl font-bold text-slate-900 mb-4">--</h3>
                            <p id="levelDescription" class="text-slate-600 text-sm mb-8 leading-relaxed">--</p>

                            <a href="https://chat.whatsapp.com/LfQH5QnhE8n5SV6cAn0IAS" class="block w-full bg-green-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-green-600 transition mb-3">
                                Consultar Especialista
                            </a>
                            <button onclick="location.reload()" class="text-slate-400 text-xs underline">Refazer Teste</button>
                        </div>

                    </div>
                    
                    <div class="mt-6 bg-purple-50 rounded-xl p-6 border border-purple-100">
                        <h4 class="font-bold text-purple-900 mb-2 text-sm">Por que isso importa?</h4>
                        <p class="text-purple-700 text-xs leading-relaxed">
                            Um CRM mal configurado é apenas uma planilha cara. A verdadeira vantagem competitiva vem da automação e da integridade dos dados.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script>
        function calculateMaturity() {
            // Pegar todos os checkboxes marcados
            const checkboxes = document.querySelectorAll('#auditForm input[type="checkbox"]:checked');
            let totalScore = 0;
            const maxScore = 65; // Soma de todos os valores possíveis (4*5 + 3*5 + 3*10) = 20 + 15 + 30 = 65

            checkboxes.forEach((checkbox) => {
                totalScore += parseInt(checkbox.value);
            });

            // Calcular porcentagem
            const percentage = Math.round((totalScore / maxScore) * 100);

            // Determinar Nível
            let title = "";
            let description = "";
            let colorClass = "";

            if (percentage <= 30) {
                title = "Nível 1: Agenda Digital";
                description = "Seu CRM é basicamente um repositório de contatos. Há muito trabalho manual, dados sujos e pouco uso estratégico. Você corre risco alto de perder histórico se um vendedor sair.";
            } else if (percentage <= 60) {
                title = "Nível 2: Operacional";
                description = "Você tem processos, mas eles não conversam entre si. O CRM ajuda a organizar, mas não gera insights preditivos. Falta integração real com o financeiro e automação inteligente.";
            } else if (percentage <= 85) {
                title = "Nível 3: Data-Driven";
                description = "Excelente. Sua operação é robusta, com SLAs definidos e dados confiáveis. O próximo passo é adotar IA generativa para eliminar os últimos gargalos manuais.";
            } else {
                title = "Nível 4: Estado da Arte (2026)";
                description = "Parabéns. Você opera no nível das empresas mais eficientes do mundo. Seu foco agora deve ser micro-otimizações e governança de IA.";
            }

            // Atualizar UI
            document.getElementById('initialState').classList.add('hidden');
            document.getElementById('calculatedState').classList.remove('hidden');
            
            // Animar números (efeito simples)
            document.getElementById('scoreValue').innerText = percentage + "%";
            document.getElementById('levelTitle').innerText = title;
            document.getElementById('levelDescription').innerText = description;

            // Scroll suave para o topo do resultado em mobile
            if(window.innerWidth < 1024) {
                document.getElementById('resultCard').scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>
