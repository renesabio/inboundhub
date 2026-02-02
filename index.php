<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboundHub | Comunidade de Marketing e RevOps</title>
    <meta name="description" content="Comunidade de estratégia, CRM e RevOps. Unindo dados e criatividade.">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Merriweather', serif; }
        .hero-bg { background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); }
        .card-hover:hover { transform: translateY(-5px); transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <?php include 'topo.php'; ?>

    <div class="hero-bg text-white pt-24 pb-32">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8">
                Marketing vai muito além <br>de <span class="text-indigo-400 italic">divulgar uma marca.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                É sobre criar conexões reais, estruturar dados e construir uma presença que faz sentido. Somos o InboundHub: unimos a estratégia de Inbound à precisão do RevOps.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#comunidade" class="bg-indigo-500 text-white px-8 py-4 rounded-lg font-bold hover:bg-indigo-600 transition shadow-lg w-full sm:w-auto">
                    Entrar na Comunidade
                </a>
                <a href="#artigos" class="bg-transparent border border-slate-400 text-slate-200 px-8 py-4 rounded-lg font-bold hover:bg-slate-800 transition w-full sm:w-auto">
                    Ler Artigos
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
            <div class="prose prose-lg text-slate-600 mx-auto text-left leading-relaxed">
                <p class="mb-6">
                    Vivemos uma era de excessos. Excesso de ferramentas, métricas de vaidade e promessas vazias. No meio disso tudo, o essencial se perde: <strong>o cliente.</strong>
                </p>
                <p class="mb-6">
                    Nossa jornada no marketing nos ensinou que "hacks" e atalhos têm seu valor tático, mas são os fundamentos, o estudo e a análise de dados que constroem impérios duradouros.
                </p>
                <p class="italic border-l-4 border-indigo-500 pl-6 py-4 bg-slate-50 rounded-r-lg">
                    "Aqui no InboundHub, não idolatramos a complexidade. Usamos a tecnologia para simplificar processos e humanizar relações."
                </p>
            </div>
        </div>
    </section>

    <section id="artigos" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12 text-center">Estudos & Reflexões</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden card-hover flex flex-col h-full">
                    <div class="p-8 flex flex-col h-full">
                        <span class="text-xs font-bold text-indigo-600 uppercase mb-2">Estratégia</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900 leading-snug">Inbound Marketing: A Arte da Atração</h3>
                        <p class="text-slate-600 text-sm mb-6 flex-grow">Como construir um ecossistema que educa e converte, respeitando o tempo do cliente.</p>
                        <a href="artigo-inbound.php" class="text-indigo-600 font-bold hover:underline text-sm uppercase tracking-wide mt-auto">Ler Artigo Completo →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden card-hover opacity-75">
                    <div class="p-8">
                        <span class="text-xs font-bold text-slate-500 uppercase mb-2">Dados</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">A Verdade sobre o CRM</h3>
                        <p class="text-slate-600 text-sm mb-6">Em breve: Por que a higiene de dados é mais importante que o software que você usa.</p>
                        <span class="text-slate-400 text-xs uppercase font-bold bg-slate-100 px-2 py-1 rounded">Em Produção</span>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden card-hover opacity-75">
                    <div class="p-8">
                        <span class="text-xs font-bold text-slate-500 uppercase mb-2">RevOps</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">Operações de Receita</h3>
                        <p class="text-slate-600 text-sm mb-6">Em breve: Unificando marketing, vendas e sucesso em um único organismo vivo.</p>
                        <span class="text-slate-400 text-xs uppercase font-bold bg-slate-100 px-2 py-1 rounded">Em Produção</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas" class="py-20 bg-indigo-900 text-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Arquitetura de Briefing</h2>
                <p class="text-indigo-200">Use nossa IA para estruturar seus pedidos de campanha com precisão técnica.</p>
            </div>
            
            <div class="bg-white text-slate-800 rounded-xl p-8 shadow-2xl">
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Nicho de Mercado</label>
                        <input type="text" id="nicho" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="Ex: Clínica Odontológica">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Público Alvo</label>
                        <input type="text" id="publico" class="w-full border border-slate-300 rounded-lg p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="Ex: Diretores de TI">
                    </div>
                </div>
                <button onclick="gerarPrompt()" class="w-full bg-indigo-600 text-white py-4 rounded-lg font-bold hover:bg-indigo-700 transition uppercase tracking-widest shadow-lg">Gerar Estrutura</button>
                
                <div id="resultadoArea" class="hidden mt-8 bg-slate-50 p-6 rounded-lg border border-slate-200">
                    <p class="text-xs font-bold text-slate-500 uppercase mb-3">Copie e cole na sua IA:</p>
                    <textarea id="promptOutput" class="w-full h-40 bg-white p-4 text-sm text-slate-700 font-mono border border-slate-200 rounded-lg focus:outline-none resize-none" readonly></textarea>
                </div>
            </div>
        </div>
    </section>

    <section id="comunidade" class="py-16 bg-green-50 border-t border-green-100">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-green-900 mb-4">Comunidade InboundHub</h2>
            <p class="text-green-800 mb-8 leading-relaxed">Troque ideias, tire dúvidas técnicas e acesse vagas exclusivas. Um espaço seguro para crescimento profissional.</p>
            <a href="#" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-full font-bold hover:bg-green-700 transition shadow-lg transform hover:-translate-y-1">
                Entrar no Grupo WhatsApp
            </a>
        </div>
    </section>

    <?php include 'rodape.php'; ?>

    <script>
        function gerarPrompt() {
            const nicho = document.getElementById('nicho').value;
            const publico = document.getElementById('publico').value;
            if(!nicho || !publico) {
                alert("Por favor, preencha o nicho e o público alvo.");
                return;
            }
            const promptTexto = `Atue como Estrategista Sênior de Inbound. Crie um briefing estruturado para o nicho "${nicho}" focado no público "${publico}". O tom deve ser de autoridade e empatia, focado em resolução de dores reais.`;
            document.getElementById('promptOutput').value = promptTexto;
            document.getElementById('resultadoArea').classList.remove('hidden');
        }
    </script>
</body>
</html>
