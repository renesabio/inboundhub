<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboundHub | Estratégia e RevOps</title>
    <meta name="description" content="Comunidade de estratégia, CRM e RevOps.">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Preto Absoluto */
        .hero-bg { background-color: #09090b; } 
        .card-hover:hover { transform: translateY(-4px); transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-zinc-50 text-zinc-900 antialiased font-sans">

    <?php include 'topo.php'; ?>

    <div class="hero-bg text-white pt-24 pb-32">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <span class="inline-block py-1 px-3 rounded border border-zinc-700 text-zinc-400 text-xs font-bold tracking-[0.2em] uppercase mb-8">Estratégia & Dados</span>
            <h1 class="text-4xl md:text-7xl font-black leading-tight mb-8 tracking-tighter">
                Marketing além <br>do <span class="text-zinc-500">Hype.</span>
            </h1>
            <p class="text-lg md:text-xl text-zinc-400 mb-12 max-w-2xl mx-auto font-normal leading-relaxed">
                É sobre criar conexões reais, estruturar dados e construir uma presença que faz sentido. Sem atalhos. Apenas engenharia de vendas.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#comunidade" class="bg-white text-black px-8 py-4 rounded-lg font-bold hover:bg-zinc-200 transition w-full sm:w-auto border border-white">
                    Entrar na Comunidade
                </a>
                <a href="#ferramentas" class="bg-transparent border border-zinc-700 text-zinc-300 px-8 py-4 rounded-lg font-bold hover:border-white hover:text-white transition w-full sm:w-auto">
                    Ferramentas
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white border-b border-zinc-200">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-black mt-3 tracking-tight">Clareza em meio ao ruído.</h2>
            </div>
            <div class="prose prose-lg text-zinc-600 mx-auto leading-relaxed text-justify md:text-left">
                <p class="mb-6">
                    Vivemos uma era de excessos. Excesso de ferramentas, métricas de vaidade e promessas vazias. No meio disso tudo, o essencial se perde: <strong>o cliente.</strong>
                </p>
                <p class="mb-6">
                    Nossa jornada no marketing nos ensinou que "hacks" têm seu valor tático, mas são os fundamentos que constroem impérios.
                </p>
                <p class="bg-zinc-100 p-6 rounded-lg font-semibold text-zinc-900 border-l-4 border-black">
                    "Aqui no InboundHub, não idolatramos a complexidade. Usamos a tecnologia para simplificar processos."
                </p>
            </div>
        </div>
    </section>

    <section id="artigos" class="py-20 bg-zinc-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-black text-black mb-12 text-center tracking-tight">Estudos & Reflexões</h2>
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-xl shadow-sm border border-zinc-200 overflow-hidden card-hover flex flex-col h-full">
                    <div class="p-8 flex flex-col h-full">
                        <span class="text-xs font-bold text-black uppercase mb-3 bg-zinc-100 w-max px-2 py-1 rounded">Estratégia</span>
                        <h3 class="text-xl font-bold mb-3 text-black leading-snug">Inbound Marketing: A Arte da Atração</h3>
                        <p class="text-zinc-600 text-sm mb-6 flex-grow">Como construir um ecossistema que educa e converte, respeitando o tempo do cliente.</p>
                        <a href="artigo-inbound.php" class="text-black font-bold hover:underline decoration-2 text-sm flex items-center gap-2 uppercase tracking-wide mt-auto">
                            Ler Artigo &rarr;
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-zinc-200 p-8 opacity-60 grayscale">
                    <span class="text-xs font-bold text-zinc-500 uppercase mb-3 bg-zinc-100 w-max px-2 py-1 rounded">Dados</span>
                    <h3 class="text-xl font-bold mb-3 text-zinc-800">A Verdade sobre o CRM</h3>
                    <p class="text-zinc-500 text-sm mb-6">A higiene de dados é mais importante que o software que você usa.</p>
                    <span class="inline-block bg-zinc-200 text-zinc-500 text-xs font-bold px-3 py-2 rounded cursor-not-allowed">
                        Em breve
                    </span>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-zinc-200 p-8 opacity-60 grayscale">
                    <span class="text-xs font-bold text-zinc-500 uppercase mb-3 bg-zinc-100 w-max px-2 py-1 rounded">RevOps</span>
                    <h3 class="text-xl font-bold mb-3 text-zinc-800">Operações de Receita</h3>
                    <p class="text-zinc-500 text-sm mb-6">Unificando marketing, vendas e sucesso em um único organismo.</p>
                    <span class="inline-block bg-zinc-200 text-zinc-500 text-xs font-bold px-3 py-2 rounded cursor-not-allowed">
                        Em breve
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas" class="py-20 bg-black border-t border-zinc-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-white mb-4">Caixa de Ferramentas</h2>
                <p class="text-zinc-400 max-w-2xl mx-auto">Utilitários práticos. Sem login, sem custo.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                
                <div class="bg-zinc-900 rounded-xl p-8 border border-zinc-800">
                    <div class="w-12 h-12 bg-zinc-800 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">✨</div>
                    <h3 class="text-xl font-bold text-white mb-2">Gerador de Briefing</h3>
                    <p class="text-zinc-400 text-sm mb-6">Crie a estrutura perfeita para suas campanhas.</p>
                    <span class="inline-block bg-zinc-800 text-zinc-500 text-xs font-bold px-3 py-2 rounded cursor-not-allowed uppercase tracking-wider">
                        Em breve
                    </span>
                </div>

                <div class="bg-zinc-900 rounded-xl p-8 border border-zinc-800">
                    <div class="w-12 h-12 bg-zinc-800 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">✅</div>
                    <h3 class="text-xl font-bold text-white mb-2">Checklist de Inbound</h3>
                    <p class="text-zinc-400 text-sm mb-6">Não esqueça nenhuma etapa do setup.</p>
                    <span class="inline-block bg-zinc-800 text-zinc-500 text-xs font-bold px-3 py-2 rounded cursor-not-allowed uppercase tracking-wider">
                        Em breve
                    </span>
                </div>

                <div class="bg-zinc-900 rounded-xl p-8 border border-zinc-800">
                    <div class="w-12 h-12 bg-zinc-800 rounded-lg flex items-center justify-center mb-6 text-white text-2xl">🧮</div>
                    <h3 class="text-xl font-bold text-white mb-2">Calculadora de ROI</h3>
                    <p class="text-zinc-400 text-sm mb-6">Projeções financeiras claras.</p>
                    <span class="inline-block bg-zinc-800 text-zinc-500 text-xs font-bold px-3 py-2 rounded cursor-not-allowed uppercase tracking-wider">
                        Em breve
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="comunidade" class="py-20 bg-zinc-100">
        <div class="max-w-4xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 text-left">
                <span class="text-black font-bold uppercase tracking-wider text-xs mb-2 block">Networking Real</span>
                <h2 class="text-3xl font-black text-black mb-4">A Comunidade.</h2>
                <p class="text-zinc-600 mb-6 leading-relaxed">
                    Troque ideias, tire dúvidas técnicas e acesse vagas exclusivas. Para manter o nível da discussão, o acesso é restrito.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center text-sm font-bold text-black">
                        <span class="w-2 h-2 bg-black rounded-full mr-3"></span>
                        Sem spam.
                    </div>
                    <div class="flex items-center text-sm font-bold text-black">
                        <span class="w-2 h-2 bg-black rounded-full mr-3"></span>
                        Foco em técnica.
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 w-full">
                <div class="bg-white p-4 rounded-2xl shadow-xl border border-zinc-200">
                    <div class="text-center mb-4 pt-4">
                        <h3 class="font-bold text-black">Solicitar Convite</h3>
                        <p class="text-xs text-zinc-500 mt-1">Cadastro rápido via Brevo.</p>
                    </div>
                    
                    <div class="rounded-lg overflow-hidden">
                        <iframe width="540" height="30
