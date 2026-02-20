<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferramentas de Gestão | Inbound Hub</title>
    <meta name="description" content="Acesse nosso acervo de diagnósticos, calculadoras e ferramentas exclusivas para otimizar sua operação de Marketing, Vendas e RevOps.">
    <link rel="icon" type="image/png" href="favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700;900&display=swap" rel="stylesheet">
    <style>
        .tool-card-dark { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .tool-card-dark:hover { transform: translateY(-8px); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); border-color: rgba(99, 102, 241, 0.5); }
        .tool-card-dark .top-bar { transition: transform 0.4s ease; transform-origin: left; transform: scaleX(0); }
        .tool-card-dark:hover .top-bar { transform: scaleX(1); }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <main class="pt-32 pb-24 px-4 min-h-screen">
        <div class="max-w-6xl mx-auto">
            
            <div class="mb-12 text-center">
                <span class="text-indigo-600 font-bold text-xs uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full border border-indigo-100 mb-4 inline-block">Acervo Prático</span>
                <h1 class="text-4xl md:text-5xl font-bold text-slate-900 font-serif mb-4">Ferramentas de Apoio</h1>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto">Utilitários técnicos, calculadoras de ROI e diagnósticos construídos para ajudar a nossa comunidade a tomar decisões baseadas em dados.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <a href="gerador-briefing.php" class="tool-card-dark group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-xl relative overflow-hidden flex flex-col h-full z-10 block">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-indigo-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-indigo-600/20 rounded-full blur-3xl group-hover:bg-indigo-500/30 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-slate-800 border border-slate-700 text-indigo-400 rounded-2xl flex items-center justify-center text-2xl shadow-inner">✨</div>
                        <span class="bg-slate-800 text-slate-300 text-xs font-bold px-3 py-1 rounded-full border border-slate-700">IA Generativa</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-3 font-serif">Gerador de Briefing</h3>
                    <p class="text-slate-400 leading-relaxed mb-8 flex-grow font-light">Estruture prompts de alto nível para ChatGPT e Claude. Receba planos de marketing focados em conversão e quebra de objeções.</p>
                    
                    <div class="flex items-center text-indigo-400 font-bold text-sm uppercase tracking-wide">
                        Acessar Ferramenta <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <a href="checklist-crm.php" class="tool-card-dark group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-xl relative overflow-hidden flex flex-col h-full z-10 block">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-purple-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-purple-600/20 rounded-full blur-3xl group-hover:bg-purple-500/30 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-slate-800 border border-slate-700 text-purple-400 rounded-2xl flex items-center justify-center text-2xl shadow-inner">📊</div>
                        <span class="bg-slate-800 text-slate-300 text-xs font-bold px-3 py-1 rounded-full border border-slate-700">Auditoria</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-3 font-serif">Diagnóstico CRM</h3>
                    <p class="text-slate-400 leading-relaxed mb-8 flex-grow font-light">Descubra o real nível de maturidade da sua operação de vendas. Sua empresa usa dados para prever ou apenas para registrar?</p>
                    
                    <div class="flex items-center text-purple-400 font-bold text-sm uppercase tracking-wide">
                        Iniciar Diagnóstico <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <a href="calculadora-roi.php" class="tool-card-dark group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-xl relative overflow-hidden flex flex-col h-full z-10 block">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-emerald-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-emerald-600/20 rounded-full blur-3xl group-hover:bg-emerald-500/30 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-slate-800 border border-slate-700 text-emerald-400 rounded-2xl flex items-center justify-center text-2xl shadow-inner">💰</div>
                        <span class="bg-slate-800 text-slate-300 text-xs font-bold px-3 py-1 rounded-full border border-slate-700">Calculadora</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-3 font-serif">Calculadora RevOps</h3>
                    <p class="text-slate-400 leading-relaxed mb-8 flex-grow font-light">Traduza eficiência operacional em receita. Simule o impacto financeiro de otimizar processos ou adotar novas tecnologias.</p>
                    
                    <div class="flex items-center text-emerald-400 font-bold text-sm uppercase tracking-wide">
                        Calcular ROI <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>
                
                </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
