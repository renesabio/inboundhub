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
        /* Degradê mais tecnológico */
        .hero-bg { background: linear-gradient(135deg, #0f172a 0%, #312e81 100%); }
        .card-hover:hover { transform: translateY(-5px); transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    <?php include 'topo.php'; ?>

    <div class="hero-bg text-white pt-24 pb-32">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8 tracking-tight">
                Marketing vai muito além <br>de <span class="text-indigo-400 italic">divulgar uma marca.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                É sobre criar conexões reais, estruturar dados e construir uma presença que faz sentido. Somos o InboundHub: unimos a estratégia de Inbound à precisão do RevOps.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#comunidade" class="bg-indigo-500 text-white px-8 py-4 rounded-lg font-bold hover:bg-indigo-600 transition shadow-lg w-full sm:w-auto">
                    Entrar na Comunidade
                </a>
                <a href="#ferramentas" class="bg-white/10 border border-white/20 text-white px-8 py-4 rounded-lg font-bold hover:bg-white/20 transition w-full sm:w-auto backdrop-blur-sm">
                    Acessar Ferramentas
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs">Nosso Propósito</span>
                <h2 class="text-3xl font-bold text-slate-900 mt-3">Clareza em meio ao ruído</h2>
            </div>
            <div class="prose prose-lg text-slate-600 mx-auto leading-relaxed">
                <p class="mb-6">
                    Vivemos uma era de excessos. Excesso de ferramentas, métricas de vaidade e promessas vazias. No meio disso tudo, o essencial se perde: <strong>o cliente.</strong>
                </p>
                <p class="mb-6">
                    Nossa jornada no marketing nos ensinou que "hacks" têm seu valor tático, mas são os fundamentos, o estudo e a análise de dados que constroem impérios duradouros.
                </p>
                <p class="border-l-4 border-indigo-500 pl-6 py-4 bg-slate-50 rounded-r-lg font-medium text-slate-800">
                    "Aqui no InboundHub, não idolatramos a complexidade. Usamos a tecnologia para simplificar processos e humanizar relações."
                </p>
            </div>
        </div>
    </section>

    <section id="artigos" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12 text-center tracking-tight">Estudos & Reflexões</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden card-hover flex flex-col h-full">
                    <div class="p-8 flex flex-col h-full">
                        <span class="text-xs font-bold text-indigo-600 uppercase mb-3">Estratégia</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900 leading-snug">Inbound Marketing: A Arte da Atração</h3>
                        <p class="text-slate-600 text-sm mb-6 flex-grow">Como construir um ecossistema que educa e converte, respeitando o tempo do cliente.</p>
                        <a href="artigo-inbound.php" class="text-indigo-600 font-bold hover:text-indigo-800 text-sm flex items-center gap-2">
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

    <section id="ferramentas" class="py-20 bg-slate-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Caixa de Ferramentas</h2>
                <p class="text-slate-400 max-w-2xl mx-auto">Utilitários práticos para o dia a dia do estrategista. Sem login, sem custo.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                
                <a href="#" class="bg-slate-800 rounded-xl p-8 border border-slate-700 hover:border-indigo-500 transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">✨</div>
                        <h3 class="text-xl font-bold text-white mb-2">Gerador de Briefing</h3>
                        <p class="text-slate-400 text-sm mb-6">Crie a estrutura perfeita para suas campanhas usando nossa IA.</p>
                        <span class="text-indigo-400 text-sm font-bold group-hover:text-white transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>

                <a href="#" class="bg-slate-800 rounded-xl p-8 border border-slate-700 hover:border-green-500 transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">✅</div>
                        <h3 class="text-xl font-bold text-white mb-2">Checklist de Inbound</h3>
                        <p class="text-slate-400 text-sm mb-6">Não esqueça nenhuma etapa. Do setup do CRM ao disparo de e-mail.</p>
                        <span class="text-green-400 text-sm font-bold group-hover:text-white transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>

                <a href="#" class="bg-slate-800 rounded-xl p-8 border border-slate-700 hover:border-blue-500 transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">🧮</div>
                        <h3 class="text-xl font-bold text-white mb-2">Calculadora de ROI</h3>
                        <p class="text-slate-400 text-sm mb-6">Prove o valor do seu trabalho com projeções financeiras claras.</p>
                        <span class="text-blue-400 text-sm font-bold group-hover:text-white transition">Acessar Ferramenta &rarr;</span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section id="comunidade" class="py-20 bg-green-50/50 border-t border-green-100">
        <div class="max-w-4xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-left">
                <span class="text-green-600 font-bold uppercase tracking-wider text-xs mb-2 block">Networking Real</span>
                <h2 class="text-3xl font-bold text-slate-900 mb-4">A Comunidade InboundHub</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Troque ideias, tire dúvidas técnicas e acesse vagas exclusivas. Para manter o nível da discussão, o acesso é restrito a convidados.
                </p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Sem spam ou "bom dia" excessivo.
                    </li>
                    <li class="flex items-center text-sm text-slate-700">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Foco em técnica e mercado.
                    </li>
                </ul>
            </div>
            
            <div class="md:w-1/2 w-full">
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-green-100">
                    <div class="text-center mb-6">
                        <h3 class="font-bold text-slate-900">Solicitar Convite</h3>
                        <p class="text-xs text-slate-500 mt-1">Você será redirecionado para o WhatsApp após o cadastro.</p>
                    </div>
                    
                    <div class="bg-slate-100 border-2 border-dashed border-slate-300 rounded-lg p-6 text-center">
                        <p class="text-sm text-slate-500 font-medium mb-2">Cole seu formulário do Brevo aqui</p>
                        <p class="text-xs text-slate-400">(Substitua essa div pelo código do iframe)</p>
                    </div>
                    </div>
            </div>
        </div>
    </section>

    <?php include 'rodape.php'; ?>

</body>
</html>
