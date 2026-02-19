<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbound Hub | Um hub para aprender e evoluir no inbound juntos.</title>
    <meta name="description" content="A comunidade definitiva para profissionais de marketing e vendas trocarem experiências, acessarem ferramentas e dominarem o futuro do Growth.">
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700;900&display=swap" rel="stylesheet">

    <style>
        /* Animações e Efeitos dos Cards */
        .tool-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .tool-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }
        .tool-card .top-bar {
            transition: transform 0.4s ease;
            transform-origin: left;
            transform: scaleX(0);
        }
        .tool-card:hover .top-bar {
            transform: scaleX(1);
        }
        
        /* Pattern de fundo discreto */
        .hero-pattern {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 32px 32px;
            opacity: 0.3;
        }

        /* Efeito Glow para o botão da Comunidade */
        .glow-button {
            box-shadow: 0 0 30px rgba(37, 211, 102, 0.4); /* Verde WhatsApp */
            transition: all 0.3s ease;
        }
        .glow-button:hover {
            box-shadow: 0 0 45px rgba(37, 211, 102, 0.6);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <header class="relative pt-28 pb-24 overflow-hidden bg-white border-b border-slate-200">
        <div class="absolute inset-0 hero-pattern pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-slate-50 to-transparent pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-slate-900 font-serif mb-8 leading-tight tracking-tight max-w-5xl mx-auto">
                Um hub para aprender e <br class="hidden md:block">
                <span class="text-purple-600">
                    evoluir no inbound juntos.
                </span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-500 max-w-3xl mx-auto font-light leading-relaxed mb-12">
                Junte-se a líderes e analistas de Marketing, Vendas e RevOps. Um espaço exclusivo para trocar experiências reais, debater estratégias e fazer networking com quem está no campo de batalha.
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-5">
                <a href="participar.php" class="w-full sm:w-auto group relative inline-flex items-center justify-center gap-3 bg-slate-900 text-white font-bold py-4 px-10 rounded-full hover:bg-slate-800 transition-all duration-300 shadow-xl hover:shadow-2xl">
                    <svg class="w-6 h-6 text-green-400 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    Entrar no Grupo
                </a>
                
                <a href="#ferramentas" class="w-full sm:w-auto bg-white text-slate-600 border border-slate-300 font-bold py-4 px-8 rounded-full hover:bg-slate-50 transition text-center">
                    Explorar Materiais
                </a>
            </div>
        </div>
    </header>

    <section id="ferramentas" class="py-24 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif">Apoio Estratégico</h2>
                    <p class="text-slate-500 mt-3 text-lg">Diagnósticos e utilitários criados para a nossa comunidade.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <a href="gerador-briefing.php" class="tool-card group bg-white rounded-3xl p-8 border border-slate-200 relative overflow-hidden flex flex-col h-full z-10">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-indigo-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-indigo-50 rounded-full blur-3xl group-hover:bg-indigo-100 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-indigo-50 border border-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                            ✨
                        </div>
                        <span class="bg-indigo-50 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full border border-indigo-100">Inteligência Artificial</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 font-serif">Gerador de Briefing</h3>
                    <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                        Estruture prompts de alto nível para ChatGPT e Claude. Receba planos de marketing focados em conversão e quebra de objeções.
                    </p>
                    
                    <div class="flex items-center text-indigo-600 font-bold text-sm uppercase tracking-wide">
                        Acessar Ferramenta 
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <a href="checklist-crm.php" class="tool-card group bg-white rounded-3xl p-8 border border-slate-200 relative overflow-hidden flex flex-col h-full z-10">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-purple-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-purple-50 rounded-full blur-3xl group-hover:bg-purple-100 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-purple-50 border border-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                            📊
                        </div>
                        <span class="bg-purple-50 text-purple-700 text-xs font-bold px-3 py-1 rounded-full border border-purple-100">Auditoria</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 font-serif">Diagnóstico CRM</h3>
                    <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                        Descubra o real nível de maturidade da sua operação de vendas. Sua empresa usa dados para prever ou apenas para registrar?
                    </p>
                    
                    <div class="flex items-center text-purple-600 font-bold text-sm uppercase tracking-wide">
                        Iniciar Diagnóstico
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

                <a href="calculadora-roi.php" class="tool-card group bg-white rounded-3xl p-8 border border-slate-200 relative overflow-hidden flex flex-col h-full z-10">
                    <div class="top-bar absolute top-0 left-0 w-full h-1.5 bg-emerald-500"></div>
                    <div class="absolute -right-6 -top-6 w-32 h-32 bg-emerald-50 rounded-full blur-3xl group-hover:bg-emerald-100 transition duration-500 -z-10"></div>
                    
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm">
                            💰
                        </div>
                        <span class="bg-emerald-50 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full border border-emerald-100">Calculadora</span>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 font-serif">Calculadora RevOps</h3>
                    <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                        Traduza eficiência operacional em receita. Simule o impacto financeiro de otimizar processos ou adotar novas tecnologias.
                    </p>
                    
                    <div class="flex items-center text-emerald-600 font-bold text-sm uppercase tracking-wide">
                        Calcular ROI
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="py-24 px-4 bg-white border-t border-slate-200">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 font-serif">Dossiês e Artigos</h2>
                    <p class="text-slate-500 mt-3 text-lg">Estudos aprofundados para basear suas estratégias.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <article class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:border-blue-300 transition-colors duration-300 flex flex-col h-full">
                    <div class="h-2 bg-blue-500 w-full"></div>
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-blue-600 font-bold text-xs uppercase tracking-widest">Inbound 2.0</span>
                            <span class="text-slate-400 text-xs flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                28 min
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight group-hover:text-blue-600 transition-colors">
                            <a href="artigo-inbound.php" class="before:absolute before:inset-0">
                                O Fim do "Ebook por E-mail": AEO e o Futuro Zero-Click.
                            </a>
                        </h3>
                        <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                            Como a IA Generativa mudou as regras do SEO e por que a hiper-personalização é a única saída para sobreviver no mercado digital.
                        </p>
                        <div class="text-blue-600 font-bold text-sm uppercase tracking-wide group-hover:translate-x-1 transition-transform">Ler Dossiê →</div>
                    </div>
                </article>

                <article class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:border-purple-300 transition-colors duration-300 flex flex-col h-full relative">
                    <div class="h-2 bg-purple-500 w-full"></div>
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-purple-600 font-bold text-xs uppercase tracking-widest">Dados & Tech</span>
                            <span class="text-slate-400 text-xs flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                35 min
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight group-hover:text-purple-600 transition-colors">
                            <a href="artigo-crm.php" class="before:absolute before:inset-0">
                                CRM 2026: Da "Agenda Digital" ao Cérebro da Operação.
                            </a>
                        </h3>
                        <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                            Agentes de IA autônomos, Arquitetura de Microsserviços e a quebra definitiva dos silos entre Front-Office e Back-Office.
                        </p>
                        <div class="text-purple-600 font-bold text-sm uppercase tracking-wide group-hover:translate-x-1 transition-transform">Ler Dossiê →</div>
                    </div>
                </article>

                <article class="group bg-slate-50 rounded-3xl overflow-hidden border border-slate-200 hover:border-emerald-300 transition-colors duration-300 flex flex-col h-full relative">
                    <div class="h-2 bg-emerald-500 w-full"></div>
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-emerald-600 font-bold text-xs uppercase tracking-widest">Estratégia</span>
                            <span class="text-slate-400 text-xs flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                32 min
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight group-hover:text-emerald-600 transition-colors">
                            <a href="artigo-revops.php" class="before:absolute before:inset-0">
                                RevOps: O Fim da Guerra entre Marketing e Vendas.
                            </a>
                        </h3>
                        <p class="text-slate-500 leading-relaxed mb-8 flex-grow">
                            Como unificar processos, dados e tecnologia em uma única operação de receita para parar de perder dinheiro pelo ralo.
                        </p>
                        <div class="text-emerald-600 font-bold text-sm uppercase tracking-wide group-hover:translate-x-1 transition-transform">Ler Dossiê →</div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="py-24 px-4 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-600 rounded-full opacity-20 blur-[100px] transform translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-500 rounded-full opacity-10 blur-[100px] transform -translate-x-1/2 translate-y-1/2 pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold font-serif mb-6">A evolução acontece em grupo.</h2>
            <p class="text-slate-300 text-xl mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                Não enfrente os desafios da sua operação sozinho. Nossa comunidade no WhatsApp é o lugar para tirar dúvidas difíceis e compartilhar vitórias reais.
            </p>
            
            <a href="participar.php" class="glow-button inline-flex items-center gap-4 bg-white text-slate-900 rounded-full p-2 pr-8 group relative overflow-hidden z-20 mx-auto w-auto">
                <div class="w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center flex-shrink-0 relative z-10">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </div>
                <div class="text-left relative z-10 flex flex-col">
                    <span class="font-bold text-lg leading-none mb-1 group-hover:text-[#25D366] transition-colors">Entrar na Comunidade VIP</span>
                    <span class="text-slate-500 text-xs uppercase tracking-wider font-semibold">100% Gratuito</span>
                </div>
                <div class="absolute inset-0 bg-green-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </a>
            
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
