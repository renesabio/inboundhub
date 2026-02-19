<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbound Hub | Um hub para aprender e evoluir no inbound juntos.</title>
    <meta name="description" content="O hub definitivo para profissionais de marketing e vendas. Ferramentas gratuitas, calculadoras de ROI e artigos técnicos sobre o futuro do Growth.">
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:wght@300;700;900&display=swap" rel="stylesheet">

    <style>
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .hero-pattern {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 32px 32px;
            opacity: 0.3;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <?php include 'header.php'; ?>

    <header class="relative pt-24 pb-20 overflow-hidden bg-white border-b border-slate-200">
        <div class="absolute inset-0 hero-pattern pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-slate-900 font-serif mb-6 leading-tight tracking-tight max-w-5xl mx-auto">
                Um hub para aprender e <br class="hidden md:block">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-green-600">
                    evoluir no inbound juntos.
                </span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-500 max-w-3xl mx-auto font-light leading-relaxed mb-10">
                Conectando profissionais e compartilhando aprendizados através de ferramentas práticas, diagnósticos e dossiês técnicos.
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-5">
                <a href="#ferramentas" class="w-full sm:w-auto bg-slate-900 text-white font-bold py-4 px-8 rounded-full hover:bg-slate-800 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-center">
                    Acessar Ferramentas
                </a>
                
                <a href="participar.php" class="w-full sm:w-auto group relative inline-flex items-center justify-center gap-3 bg-white text-slate-700 border-2 border-slate-200 font-bold py-4 px-8 rounded-full hover:border-green-500 hover:text-green-600 hover:bg-green-50 transition-all duration-300 shadow-sm hover:shadow-md">
                    <svg class="w-6 h-6 text-green-500 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    Fazer parte do Hub
                </a>
            </div>
        </div>
    </header>

    <section id="ferramentas" class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 font-serif">Ferramentas de Gestão</h2>
                    <p class="text-slate-500 mt-2">Diagnósticos e geradores para usar agora.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <a href="gerador-briefing.php" class="card-hover group bg-white rounded-2xl p-8 border border-indigo-100 shadow-sm relative overflow-hidden h-full flex flex-col justify-between">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-32 h-32 text-indigo-600" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6z"></path></svg>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center text-2xl mb-6 font-bold group-hover:scale-110 transition">
                            ✨
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition">Gerador de Briefing</h3>
                        <p class="text-slate-500 leading-relaxed mb-6">
                            Pare de brigar com a IA. Gere prompts de engenharia avançada para criar planos de marketing perfeitos no ChatGPT.
                        </p>
                    </div>
                    <div class="flex items-center text-indigo-600 font-bold text-sm">
                        Usar Ferramenta <span class="ml-2 group-hover:translate-x-1 transition">→</span>
                    </div>
                </a>

                <a href="checklist-crm.php" class="card-hover group bg-white rounded-2xl p-8 border border-purple-100 shadow-sm relative overflow-hidden h-full flex flex-col justify-between">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-32 h-32 text-purple-600" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"></path></svg>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center text-2xl mb-6 font-bold group-hover:scale-110 transition">
                            📊
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition">Diagnóstico CRM</h3>
                        <p class="text-slate-500 leading-relaxed mb-6">
                            Sua operação é "Planilheira" ou "Data-Driven"? Faça a auditoria de 4 pontos e descubra sua maturidade.
                        </p>
                    </div>
                    <div class="flex items-center text-purple-600 font-bold text-sm">
                        Fazer Auditoria <span class="ml-2 group-hover:translate-x-1 transition">→</span>
                    </div>
                </a>

                <a href="calculadora-roi.php" class="card-hover group bg-white rounded-2xl p-8 border border-emerald-100 shadow-sm relative overflow-hidden h-full flex flex-col justify-between">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                        <svg class="w-32 h-32 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path></svg>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center text-2xl mb-6 font-bold group-hover:scale-110 transition">
                            💰
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-emerald-600 transition">Calculadora RevOps</h3>
                        <p class="text-slate-500 leading-relaxed mb-6">
                            Traduza eficiência em dinheiro. Descubra quanto de receita oculta você pode desbloquear otimizando processos.
                        </p>
                    </div>
                    <div class="flex items-center text-emerald-600 font-bold text-sm">
                        Simular ROI <span class="ml-2 group-hover:translate-x-1 transition">→</span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-slate-100 border-t border-slate-200">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 font-serif">Deep Dives</h2>
                    <p class="text-slate-500 mt-2">Artigos técnicos com profundidade de livro.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col h-full border-t-4 border-blue-500">
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Inbound 2.0</span>
                            <span class="text-slate-400 text-xs">28 min leitura</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight">
                            <a href="artigo-inbound.php" class="hover:text-blue-600 transition">
                                O Fim do "Ebook por E-mail": AEO e o Futuro Zero-Click.
                            </a>
                        </h3>
                        <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                            Como a IA Generativa matou o SEO tradicional e por que a hiper-personalização é a única saída para não ser ignorado.
                        </p>
                        <a href="artigo-inbound.php" class="text-blue-600 font-bold text-sm uppercase tracking-wide hover:underline">Ler Artigo Completo →</a>
                    </div>
                </article>

                <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col h-full border-t-4 border-purple-500">
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="bg-purple-100 text-purple-700 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">CRM & Dados</span>
                            <span class="text-slate-400 text-xs">35 min leitura</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight">
                            <a href="artigo-crm.php" class="hover:text-purple-600 transition">
                                CRM 2026: Da "Agenda Digital" ao Cérebro da Operação.
                            </a>
                        </h3>
                        <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                            Agentes de IA autônomos, Arquitetura de Microsserviços e a morte dos silos de dados entre Marketing e Vendas.
                        </p>
                        <a href="artigo-crm.php" class="text-purple-600 font-bold text-sm uppercase tracking-wide hover:underline">Ler Artigo Completo →</a>
                    </div>
                </article>

                <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col h-full border-t-4 border-emerald-500">
                    <div class="p-8 flex flex-col h-full">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">RevOps</span>
                            <span class="text-slate-400 text-xs">32 min leitura</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 font-serif mb-4 leading-tight">
                            <a href="artigo-revops.php" class="hover:text-emerald-600 transition">
                                O Fim da Guerra entre Marketing e Vendas.
                            </a>
                        </h3>
                        <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                            Como unificar processos, dados e tecnologia em uma única operação de receita para parar de perder dinheiro pelo ralo.
                        </p>
                        <a href="artigo-revops.php" class="text-emerald-600 font-bold text-sm uppercase tracking-wide hover:underline">Ler Artigo Completo →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="py-24 px-4 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold font-serif mb-6">Não jogue o jogo sozinho.</h2>
            <p class="text-slate-300 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
                As estratégias mudam toda semana. Junte-se à nossa comunidade no WhatsApp para receber alertas de tendências, discutir casos reais e fazer networking com quem está no campo de batalha.
            </p>
            
            <a href="participar.php" class="inline-flex items-center gap-3 bg-green-500 text-white font-bold py-4 px-10 rounded-full hover:bg-green-600 transition transform hover:-translate-y-1 shadow-lg shadow-green-500/30 text-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Participar do Hub
            </a>
            
            <p class="mt-6 text-sm text-slate-500">
                Livre de spam. Apenas conteúdo de alto nível.
            </p>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
