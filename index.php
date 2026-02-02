<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboundHub | Comunidade de Marketing e RevOps</title>
    <meta name="description" content="Comunidade de estratégia, CRM e RevOps. Unindo dados e criatividade.">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* THE WISE THEME: Indigo Profundo + Violeta */
        .hero-bg { background: linear-gradient(135deg, #1e1b4b 0%, #4c1d95 100%); }
        .card-hover:hover { transform: translateY(-5px); transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    <?php include 'topo.php'; ?>

    <div class="hero-bg text-white pt-24 pb-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-violet-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/10 text-amber-200 text-xs font-bold tracking-[0.2em] uppercase mb-6">Estratégia & Dados</span>
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8 tracking-tight">
                Marketing vai muito além <br>de <span class="text-amber-400 italic font-serif">divulgar uma marca.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                É sobre criar conexões reais, estruturar dados e construir uma presença que faz sentido. Somos o InboundHub: unimos a estratégia de Inbound à precisão do RevOps.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#comunidade" class="bg-violet-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-violet-500 transition shadow-lg shadow-violet-900/50 w-full sm:w-auto">
                    Entrar na Comunidade
                </a>
                <a href="#ferramentas" class="bg-transparent border border-slate-600 text-slate-200 px-8 py-4 rounded-lg font-bold hover:border-amber-400 hover:text-white transition w-full sm:w-auto">
                    Acessar Ferramentas
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-violet-700 font-bold tracking-widest uppercase text-xs">Nosso Propósito</span>
                <h2 class="text-3xl font-bold text-slate-900 mt-3">Clareza em meio ao ruído</h2>
            </div>
            <div class="prose prose-lg text-slate-600 mx-auto leading-relaxed">
                <p class="mb-6">
                    Vivemos uma era de excessos. Excesso de ferramentas, métricas de vaidade e promessas vazias. No meio disso tudo, o essencial se perde: <strong>o cliente.</strong>
                </p>
                <p class="mb-6">
                    Nossa jornada no marketing nos ensinou que "hacks" têm seu valor tático, mas são os fundamentos, o estudo e a análise de dados que constroem impérios duradouros.
                </p>
                <p class="border-l-4 border-amber-400 pl-6 py-4 bg-slate-50 rounded-r-lg font-medium text-slate-800 italic">
                    "Aqui no InboundHub, não idolatramos a complexidade. Usamos a tecnologia para simplificar processos e humanizar relações."
                </p>
            </div>
        </div>
    </section>

    <section id="artigos" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12 text-center tracking-tight">Estudos & Reflexões</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden card-hover flex flex-col h-full group">
                    <div class="p-8 flex flex-col h-full">
                        <span class="text-xs font-bold text-violet-600 uppercase mb-3">Estratégia</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900 leading-snug group-hover:text-violet-700 transition">Inbound Marketing: A Arte da Atração</h3>
                        <p class="text-slate-600 text-sm mb-6 flex-grow">Como construir um ecossistema que educa e converte, respeitando o tempo do cliente.</p>
                        <a href="artigo-inbound.php" class="text-violet-700 font-bold hover:text-violet-900 text-sm flex items-center gap-2 uppercase tracking-wide">
                            Ler Artigo <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 opacity-75">
                    <span class="text-xs font-bold text-slate-400 uppercase mb-3">Dados</span>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">A Verdade sobre o CRM</h3>
                    <p class="text-slate-600 text-sm mb-4">A higiene de dados é mais importante que o software que você usa.</p>
                    <span class="bg-slate-100 text-slate-500 text-xs font-bold px-2 py-1 rounded">Em Breve</span>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 opacity-75">
                    <span class="text-xs font-bold text-slate-400 uppercase mb-3">RevOps</span>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Operações de Receita</h3>
                    <p class="text-slate-600 text-sm mb-4">Unificando marketing, vendas e sucesso em um único organismo.</p>
                    <span class="bg-slate-100 text-slate-500 text-xs font-bold px-2 py-1 rounded">Em Breve</span>
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas" class="py-20 bg-indigo-950">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Caixa de Ferramentas</h2>
                <p class="text-slate-400 max-w-2xl mx-auto">Utilitários práticos para o dia a dia do estrategista. Sem login, sem custo.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <a href="#" class="bg-white/5 rounded-xl p-8 border border-white/10 hover:border-amber-400 transition group relative overflow-hidden backdrop-blur-sm">
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-violet-700 rounded-lg flex items-center justify-center mb-6 text-white text-2xl shadow-lg shadow-violet-900/50">✨</div>
                        <h3 class="text-xl font-bold text-white mb-2">Gerador de Briefing</h3>
                        <p class="text-slate-400 text-sm mb-6">Crie a estrutura perfeita para suas campanhas usando nossa IA.</p>
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-wider group-hover:text-amber-300 transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>
                <a href="#" class="bg-white/5 rounded-xl p-8 border border-white/10 hover:border-amber-400 transition group relative overflow-hidden backdrop-blur-sm">
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center mb-6 text-white text-2xl shadow-lg shadow-emerald-900/50">✅</div>
                        <h3 class="text-xl font-bold text-white mb-2">Checklist de Inbound</h3>
                        <p class="text-slate-400 text-sm mb-6">Não esqueça nenhuma etapa. Do setup do CRM ao disparo de e-mail.</p>
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-wider group-hover:text-amber-300 transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>
                <a href="#" class="bg-white/5 rounded-xl p-8 border border-white/10 hover:border-amber-400 transition group relative overflow-hidden backdrop-blur-sm">
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6 text-white text-2xl shadow-lg shadow-blue-900/50">🧮</div>
                        <h3 class="text-xl font-bold text-white mb-2">Calculadora de ROI</h3>
                        <p class="text-slate-400 text-sm mb-6">Prove o valor do seu trabalho com projeções financeiras claras.</p>
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-wider group-hover:text-amber-300 transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="comunidade" class="py-20 bg-violet-50 border-t border-violet-100">
        <div class="max-w-4xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-left">
                <span class="text-violet-700 font-bold uppercase tracking-wider text-xs mb-2 block">Networking de Alto Nível</span>
                <h2 class="text-3xl font-bold text-slate-900 mb-4">A Comunidade InboundHub</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Troque ideias, tire dúvidas técnicas e acesse vagas exclusivas. Para manter o nível da discussão, o acesso é restrito a convidados.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-5 h-5 text-violet-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Sem spam. Foco em técnica.
                    </li>
                    <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-5 h-5 text-violet-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Vagas de RevOps e Marketing.
                    </li>
                </ul>
            </div>
            
            <div class="md:w-1/2 w-full">
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-violet-100">
                    <div class="text-center mb-6">
                        <h3 class="font-bold text-slate-900">Solicitar Convite</h3>
                        <p class="text-xs text-slate-500 mt-1">Redirecionamento automático para WhatsApp após cadastro.</p>
                    </div>
                    
                    <div class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-lg p-8 text-center">
                        <p class="text-sm text-slate-500 font-medium mb-2">Cole seu formulário do Brevo aqui</p>
                        <p class="text-xs text-slate-400">(Configurar redirect no Brevo para o link do WhatsApp)</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'rodape.php'; ?>
</body>
</html>
