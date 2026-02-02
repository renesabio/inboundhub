<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboundHub | Por Renê Sábio</title>
    <meta name="description" content="Marketing estratégico, CRM e RevOps. Conexões reais baseadas em dados.">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cupertino: {
                            base: '#F5F5F7',    /* Fundo Geral */
                            card: '#FFFFFF',    /* Cards */
                            action: '#0071E3',  /* Botões/Links (Apple Blue) */
                            hover: '#0077ED',   /* Hover state */
                            text: '#1D1D1F',    /* Texto Principal */
                            subtext: '#86868b'  /* Texto Secundário (Apple Grey) */
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body { 
            background-color: #F5F5F7; 
            color: #1D1D1F;
            -webkit-font-smoothing: antialiased;
        }
        /* Efeito de Glassmorphism sutil na Navegação */
        .glass-nav {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        /* Sombras ultra-suaves estilo Apple */
        .cupertino-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.02);
        }
        .card-hover:hover {
            transform: scale(1.01);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

    <nav class="glass-nav fixed w-full top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 h-14 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="text-lg font-semibold tracking-tight text-cupertino-text">InboundHub</span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-cupertino-subtext">
                <a href="#proposito" class="hover:text-cupertino-action transition-colors">Propósito</a>
                <a href="#artigos" class="hover:text-cupertino-action transition-colors">Estudos</a>
                <a href="#ferramentas" class="hover:text-cupertino-action transition-colors">Ferramentas</a>
            </div>
            <a href="#comunidade" class="text-xs font-medium bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition-colors">
                Comunidade
            </a>
        </div>
    </nav>

    <main class="pt-32 pb-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight text-cupertino-text">
                Marketing além do <br>
                <span class="text-cupertino-subtext">hype.</span>
            </h1>
            <p class="text-xl md:text-2xl text-cupertino-text font-normal max-w-2xl mx-auto mb-10 leading-relaxed">
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
        <div class="max-w-3xl mx-auto bg-cupertino-card rounded-3xl p-10 md:p-14 cupertino-shadow">
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
            <h2 class="text-3xl font-bold mb-10 text-center text-cupertino-text">Estudos & Reflexões</h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <article class="bg-cupertino-card rounded-2xl p-8 cupertino-shadow card-hover border border-gray-100/50 relative overflow-hidden h-full flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-cupertino-action uppercase mb-3 block">Estratégia</span>
                        <h3 class="text-xl font-bold mb-3 text-cupertino-text">Inbound Marketing: A Arte da Atração</h3>
                        <p class="text-cupertino-subtext text-sm leading-relaxed mb-6">
                            Como construir um ecossistema que educa e converte, respeitando o tempo do cliente. Por que a interrupção morreu?
                        </p>
                    </div>
                    <a href="artigo-inbound.html" class="text-cupertino-action text-sm font-medium hover:underline mt-auto">Ler estudo completo</a>
                </article>

                <article class="bg-cupertino-card rounded-2xl p-8 cupertino-shadow border border-gray-100/50 opacity-60">
                    <span class="text-xs font-bold text-gray-400 uppercase mb-3 block">Dados</span>
                    <h3 class="text-xl font-bold mb-3 text-gray-500">A Verdade sobre o CRM</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        A higiene de dados é mais importante que o software que você usa.
                    </p>
                    <span class="text-xs border border-gray-300 text-gray-400 px-2 py-1 rounded">Em Breve</span>
                </article>

                <article class="bg-cupertino-card rounded-2xl p-8 cupertino-shadow border border-gray-100/50 opacity-60">
                    <span class="text-xs font-bold text-gray-400 uppercase mb-3 block">RevOps</span>
                    <h3 class="text-xl font-bold mb-3 text-gray-500">Operações de Receita</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Unificando marketing, vendas e sucesso em um organismo vivo.
                    </p>
                    <span class="text-xs border border-gray-300 text-gray-400 px-2 py-1 rounded">Em Breve</span>
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
                        <input type="text" id="nicho" class="w-full bg-cupertino-base rounded-lg p-4 text-cupertino-text focus:outline-none focus:ring-2 focus:ring-cupertino-action transition-all" placeholder="Ex: Clínica Odontológica">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-cupertino-subtext mb-2">Público Alvo</label>
                        <input type="text" id="publico" class="w-full bg-cupertino-base rounded-lg p-4 text-cupertino-text focus:outline-none focus:ring-2 focus:ring-cupertino-action transition-all" placeholder="Ex: Diretores de TI">
                    </div>
                </div>
                
                <button onclick="gerarPrompt()" class="w-full bg-cupertino-action hover:bg-cupertino-hover text-white font-medium py-4 rounded-xl transition-all transform active:scale-95 shadow-lg shadow-blue-500/30">
                    Gerar Estrutura com IA
                </button>

                <div id="resultadoArea" class="hidden mt-8 pt-8 border-t border-gray-100">
                    <p class="text-xs font-bold text-cupertino-subtext uppercase mb-3">Prompt Gerado (Copie e cole na sua IA):</p>
                    <textarea id="promptOutput" class="w-full h-40 bg-cupertino-base rounded-xl p-4 text-sm text-cupertino-text font-mono border-none focus:ring-0" readonly></textarea>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 px-6 border-t border-gray-200 mt-12 bg-cupertino-base">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-cupertino-subtext">
            <div class="mb-4 md:mb-0">
                &copy; 2026 InboundHub.
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-cupertino-text transition-colors">LinkedIn</a>
                <a href="#comunidade" class="hover:text-cupertino-text transition-colors">Comunidade</a>
            </div>
        </div>
    </footer>

    <script>
        function gerarPrompt() {
            const nicho = document.getElementById('nicho').value;
            const publico = document.getElementById('publico').value;
            
            if(!nicho || !publico) {
                alert("Por favor, preencha o nicho e o público alvo.");
                return;
            }

            const promptTexto = `Atue como Estrategista Sênior de Inbound.\n\nCrie um briefing estruturado para o nicho "${nicho}" focado no público "${publico}".\n\nO tom deve ser de autoridade e empatia, focado em resolução de dores reais. Desenvolva: 1. Dores principais, 2. Tópicos de conteúdo, 3. Gancho de atração.`;
            
            document.getElementById('promptOutput').value = promptTexto;
            document.getElementById('resultadoArea').classList.remove('hidden');
            
            // Scroll suave até o resultado
            document.getElementById('resultadoArea').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
