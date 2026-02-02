<?php include 'topo.php'; ?>

<main class="pt-40 pb-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight text-cupertino-text">
            Marketing além do <br>
            <span class="text-cupertino-subtext">hype.</span>
        </h1>
        <p class="text-xl md:text-2xl text-cupertino-text font-normal max-w-2xl mx-auto mb-10 leading-relaxed opacity-90">
            Clareza em meio ao ruído. Unimos a estratégia de Inbound à precisão do RevOps.
        </p>
        <div class="flex justify-center gap-4">
            <a href="#artigos" class="text-cupertino-action text-lg font-medium hover:underline flex items-center gap-1">
                Ler Artigos <span>→</span>
            </a>
        </div>
    </div>
</main>

<section id="proposito" class="py-16 px-6">
    <div class="max-w-3xl mx-auto bg-cupertino-card rounded-3xl p-10 md:p-14 cupertino-shadow border border-white/50">
        <span class="text-xs font-bold text-cupertino-subtext uppercase tracking-widest mb-4 block">O Estrategista</span>
        <blockquote class="text-2xl font-medium leading-relaxed mb-8 text-cupertino-text">
            "A tecnologia não deve complicar. Minha jornada não foi construída com 'hacks', mas com a crença de que empresas crescem quando resolvem problemas reais."
        </blockquote>
        <div class="flex items-center gap-4">
            <div>
                <p class="font-bold text-cupertino-text">Renê Sábio</p>
                <p class="text-sm text-cupertino-subtext">Fundador do InboundHub</p>
            </div>
        </div>
    </div>
</section>

<section id="artigos" class="py-16 px-6">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center text-cupertino-text">Estudos & Reflexões</h2>
        
        <div class="grid md:grid-cols-3 gap-6">
            <article class="bg-cupertino-card rounded-3xl p-8 cupertino-shadow card-hover border border-gray-100/50 flex flex-col h-full">
                <span class="text-xs font-bold text-cupertino-action uppercase mb-3 block">Estratégia</span>
                <h3 class="text-xl font-bold mb-3 text-cupertino-text">Inbound Marketing: A Arte da Atração</h3>
                <p class="text-cupertino-subtext text-sm leading-relaxed mb-6 flex-grow">
                    Como construir um ecossistema que educa e converte, respeitando o tempo do cliente.
                </p>
                <a href="artigo-inbound.php" class="text-cupertino-action text-sm font-medium hover:underline mt-auto pt-4 border-t border-gray-50">Ler estudo completo</a>
            </article>

            <article class="bg-cupertino-card rounded-3xl p-8 cupertino-shadow border border-gray-100/50 opacity-60 flex flex-col h-full">
                <span class="text-xs font-bold text-gray-400 uppercase mb-3 block">Dados</span>
                <h3 class="text-xl font-bold mb-3 text-gray-500">A Verdade sobre o CRM</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-4 flex-grow">
                    A higiene de dados é mais importante que o software que você usa.
                </p>
                <div class="mt-auto">
                    <span class="text-xs border border-gray-300 text-gray-400 px-2 py-1 rounded">Em Breve</span>
                </div>
            </article>

            <article class="bg-cupertino-card rounded-3xl p-8 cupertino-shadow border border-gray-100/50 opacity-60 flex flex-col h-full">
                <span class="text-xs font-bold text-gray-400 uppercase mb-3 block">RevOps</span>
                <h3 class="text-xl font-bold mb-3 text-gray-500">Operações de Receita</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-4 flex-grow">
                    Unificando marketing, vendas e sucesso em um organismo vivo.
                </p>
                <div class="mt-auto">
                    <span class="text-xs border border-gray-300 text-gray-400 px-2 py-1 rounded">Em Breve</span>
                </div>
            </article>
        </div>
    </div>
</section>

<section id="ferramentas" class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-cupertino-text">Arquitetura de Briefing</h2>
            <p class="text-cupertino-subtext mt-2">Gere estruturas de campanha com precisão técnica.</p>
        </div>

        <div class="bg-cupertino-card rounded-3xl p-8 md:p-12 cupertino-shadow border border-gray-100">
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div>
                    <label class="block text-xs font-bold uppercase text-cupertino-subtext mb-2">Nicho</label>
                    <input type="text" id="nicho" class="w-full bg-cupertino-base rounded-xl p-4 text-cupertino-text focus:outline-none focus:ring-2 focus:ring-cupertino-action transition-all" placeholder="Ex: Clínica Odontológica">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-cupertino-subtext mb-2">Público Alvo</label>
                    <input type="text" id="publico" class="w-full bg-cupertino-base rounded-xl p-4 text-cupertino-text focus:outline-none focus:ring-2 focus:ring-cupertino-action transition-all" placeholder="Ex: Diretores de TI">
                </div>
            </div>
            
            <button onclick="gerarPrompt()" class="w-full bg-cupertino-action hover:bg-cupertino-hover text-white font-medium py-4 rounded-xl transition-all transform active:scale-[0.98] shadow-lg shadow-blue-500/20">
                Gerar Estrutura com IA
            </button>

            <div id="resultadoArea" class="hidden mt-8 pt-8 border-t border-gray-100">
                <p class="text-xs font-bold text-cupertino-subtext uppercase mb-3">Prompt Gerado (Copie e cole na sua IA):</p>
                <textarea id="promptOutput" class="w-full h-40 bg-cupertino-base rounded-xl p-4 text-sm text-cupertino-text font-mono border-none focus:ring-0 resize-none" readonly></textarea>
            </div>
        </div>
    </div>
</section>

<?php include 'rodape.php'; ?>
