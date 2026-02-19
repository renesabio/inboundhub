<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora ROI RevOps | Inbound Hub</title>
    <meta name="description" content="Simule o impacto financeiro da eficiência em sua operação de vendas. Calcule ROI, Receita Desbloqueada e Capacidade Oculta.">
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700&display=swap" rel="stylesheet">

    <style>
        /* Slider Customizado */
        input[type=range] {
            -webkit-appearance: none; 
            background: transparent; 
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #059669; /* Emerald-600 */
            cursor: pointer;
            margin-top: -8px; 
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 4px;
            cursor: pointer;
            background: #d1fae5;
            border-radius: 2px;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <header class="bg-white border-b border-slate-200 py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full text-xs uppercase tracking-widest mb-4 inline-block">
                Ferramenta Executiva
            </span>
            <h1 class="text-3xl md:text-5xl font-bold text-slate-900 font-serif mb-4">
                Calculadora de <span class="text-emerald-600">Eficiência RevOps</span>
            </h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                Para o CFO, eficiência é corte de custos. Para RevOps, eficiência é <strong>capacidade de receita</strong>. Simule o impacto de otimizar seus processos ou contratar novas ferramentas.
            </p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-12">
        
        <div class="grid lg:grid-cols-12 gap-10">
            
            <div class="lg:col-span-5 space-y-8">
                
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                    <h3 class="flex items-center gap-2 font-bold text-slate-900 mb-6">
                        <span class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center text-sm">1</span>
                        Estrutura Atual (Baseline)
                    </h3>

                    <div class="space-y-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">Tamanho do Time (Reps)</label>
                            <input type="number" id="teamSize" value="10" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-emerald-500 outline-none transition font-mono text-slate-700">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">Meta Anual por Vendedor (Quota)</label>
                            <div class="relative">
                                <span class="absolute left-3 top-3 text-slate-400">R$</span>
                                <input type="number" id="annualQuota" value="1200000" class="w-full border border-slate-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 outline-none transition font-mono text-slate-700">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">Custo Total por Vendedor/Ano (Salário + Encargos)</label>
                            <div class="relative">
                                <span class="absolute left-3 top-3 text-slate-400">R$</span>
                                <input type="number" id="annualCost" value="150000" class="w-full border border-slate-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 outline-none transition font-mono text-slate-700">
                            </div>
                            <p class="text-xs text-slate-400 mt-1">*Inclua comissões, ferramentas e encargos.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                    <h3 class="flex items-center gap-2 font-bold text-slate-900 mb-6">
                        <span class="w-8 h-8 bg-slate-100 rounded-full flex items-center justify-center text-sm">2</span>
                        Investimento & Impacto
                    </h3>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">Custo do Projeto/Ferramenta (Anual)</label>
                            <div class="relative">
                                <span class="absolute left-3 top-3 text-slate-400">R$</span>
                                <input type="number" id="investmentCost" value="50000" class="w-full border border-slate-300 rounded-lg p-3 pl-10 focus:ring-2 focus:ring-emerald-500 outline-none transition font-mono text-slate-700">
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <label class="block text-sm font-semibold text-slate-600">Ganho de Eficiência Estimado</label>
                                <span id="efficiencyDisplay" class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2 py-1 rounded">10%</span>
                            </div>
                            <input type="range" id="efficiencyRange" min="1" max="50" value="10" class="w-full h-2 bg-emerald-100 rounded-lg appearance-none cursor-pointer">
                            <p class="text-xs text-slate-400 mt-2">
                                Ex: Reduzir tempo de cadastro no CRM, automação de e-mails, IA para transcrição.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-7">
                <div class="sticky top-8 space-y-6">
                    
                    <div class="bg-slate-900 text-white rounded-3xl p-10 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-600 rounded-full opacity-20 blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
                        
                        <div class="relative z-10 grid md:grid-cols-2 gap-8 items-center">
                            <div>
                                <p class="text-slate-400 uppercase tracking-widest text-xs font-bold mb-2">ROI Projetado</p>
                                <h2 id="roiPercent" class="text-6xl font-black text-emerald-400 mb-2">0%</h2>
                                <p class="text-slate-300 text-sm">Retorno sobre o Investimento</p>
                            </div>
                            <div class="border-t md:border-t-0 md:border-l border-slate-700 pt-6 md:pt-0 md:pl-8">
                                <p class="text-slate-400 uppercase tracking-widest text-xs font-bold mb-2">Receita Potencial Desbloqueada</p>
                                <h2 id="revenueUnlocked" class="text-4xl font-bold text-white mb-2">R$ 0</h2>
                                <p class="text-xs text-slate-400 leading-relaxed">
                                    Valor adicional que seu time pode gerar usando o tempo economizado para vender.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        
                        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                                👥
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-500 uppercase mb-1">Capacidade Oculta</p>
                                <h4 id="headcountGain" class="text-2xl font-bold text-slate-900">0 Reps</h4>
                                <p class="text-xs text-slate-400 mt-1">
                                    Equivale a contratar <span id="headcountGainText">0</span> novos vendedores sem custo adicional.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
                            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">
                                ⏳
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-500 uppercase mb-1">Horas Salvas / Ano</p>
                                <h4 id="hoursSaved" class="text-2xl font-bold text-slate-900">0 h</h4>
                                <p class="text-xs text-slate-400 mt-1">
                                    Tempo devolvido ao time para atividades de alto valor (Selling Time).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <button onclick="window.print()" class="inline-flex items-center gap-2 text-slate-500 hover:text-emerald-600 font-bold transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            Imprimir Relatório / Salvar PDF
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script>
        // Elementos
        const inputs = document.querySelectorAll('input');
        const range = document.getElementById('efficiencyRange');
        const efficiencyDisplay = document.getElementById('efficiencyDisplay');

        // Formatter BRL
        const formatBRL = (value) => {
            return new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL', maximumFractionDigits: 0 }).format(value);
        }

        const formatNumber = (value) => {
             return new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 1 }).format(value);
        }

        // Função Principal de Cálculo
        function calculate() {
            // Pegar valores
            const teamSize = parseFloat(document.getElementById('teamSize').value) || 0;
            const annualQuota = parseFloat(document.getElementById('annualQuota').value) || 0;
            const annualCost = parseFloat(document.getElementById('annualCost').value) || 0;
            const investment = parseFloat(document.getElementById('investmentCost').value) || 0;
            const efficiency = parseFloat(document.getElementById('efficiencyRange').value) || 0;

            // Atualizar Label do Slider
            efficiencyDisplay.innerText = efficiency + "%";

            // Cálculos
            // 1. Horas Salvas (Considerando 40h/sem * 48 semanas úteis = 1920 horas/ano)
            const hoursPerYear = 1920;
            const totalHoursSaved = teamSize * hoursPerYear * (efficiency / 100);

            // 2. Headcount Equivalent (Quantos FTEs ganhamos?)
            const headcountGain = totalHoursSaved / hoursPerYear;

            // 3. Receita Desbloqueada
            // Lógica: Se o vendedor vende X em 100% do tempo, e agora ele tem +10% de tempo, ele pode vender X * 10% a mais?
            // Vamos aplicar um fator de conservadorismo de 0.8 (nem todo tempo salvo vira venda)
            const conservativeFactor = 0.8; 
            const revenuePotential = (teamSize * annualQuota) * (efficiency / 100) * conservativeFactor;

            // 4. Economia de Custo Operacional (Opcional, mas bom para ROI)
            // Se eu não preciso contratar esses 'headcountGain', quanto economizei?
            const costSavings = headcountGain * annualCost;

            // 5. Lucro Líquido do Projeto (Receita Adicional - Custo Investimento)
            // Nota: RevOps geralmente olha Revenue Impact. Se quisermos ser puristas financeiramente, somamos Cost Savings.
            // Vamos focar no Revenue Impact + Cost Savings (Total Economic Impact)
            const totalImpact = revenuePotential; // Simplificando para focar em crescimento
            
            const netReturn = totalImpact - investment;
            
            // 6. ROI
            let roi = 0;
            if (investment > 0) {
                roi = (netReturn / investment) * 100;
            }

            // Atualizar DOM
            document.getElementById('roiPercent').innerText = Math.round(roi) + "%";
            
            // Cor do ROI (Verde se positivo, Vermelho se negativo)
            if(roi > 0) {
                document.getElementById('roiPercent').className = "text-6xl font-black text-emerald-400 mb-2";
            } else {
                document.getElementById('roiPercent').className = "text-6xl font-black text-red-400 mb-2";
            }

            document.getElementById('revenueUnlocked').innerText = formatBRL(revenuePotential);
            document.getElementById('hoursSaved').innerText = Math.round(totalHoursSaved).toLocaleString('pt-BR') + " h";
            document.getElementById('headcountGain').innerText = formatNumber(headcountGain) + " Reps";
            document.getElementById('headcountGainText').innerText = formatNumber(headcountGain);
        }

        // Event Listeners
        inputs.forEach(input => {
            input.addEventListener('input', calculate);
        });

        // Rodar ao carregar
        calculate();

    </script>
</body>
</html>
