<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbound Hub | A Comunidade para quem vive de Inbound</title>
    <link rel="icon" type="image/png" href="favicon.png">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEU-CODIGO-AQUI"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-SEU-CODIGO-AQUI');
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-50">

    <?php include 'header.php'; ?>

    <header class="hero-section pt-24 pb-32 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight mb-6">
                Um hub para aprender e <br>
                evoluir no <span class="text-indigo-600">inbound juntos.</span>
            </h1>
            <p class="text-xl text-slate-600 mb-10 max-w-2xl mx-auto font-light">
                Conectando profissionais e compartilhando aprendizados.
            </p>
            <div class="flex justify-center gap-4">
                <a href="participar.php" class="bg-indigo-600 text-white px-8 py-4 rounded-full font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200 no-underline">
                    Fazer parte do Hub
                </a>
            </div>
        </div>
    </header>

    <section id="pilares" class="py-24 bg-white border-y border-slate-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">O que discutimos aqui</h2>
                <p class="text-slate-500 mt-2">Os fundamentos técnicos da nossa comunidade.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <a href="artigo-inbound.php" class="article-card card-blue">
                    <div>
                        <span class="tag-pill">Atração</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">Inbound Marketing</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Estratégias de conteúdo e SEO que realmente trazem leads qualificados.
                        </p>
                    </div>
                    <span class="accent-text font-bold text-sm mt-6 block">Ler mais →</span>
                </a>

                <a href="artigo-crm.php" class="article-card card-purple">
                    <div>
                        <span class="tag-pill">Dados</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">CRM & Inteligência</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            A higiene de dados é o coração da operação. Estrutura para escalar.
                        </p>
                    </div>
                    <span class="accent-text font-bold text-sm mt-6 block">Ler mais →</span>
                </a>

                <a href="artigo-revops.php" class="article-card card-green">
                    <div>
                        <span class="tag-pill">Processos</span>
                        <h3 class="text-xl font-bold mb-3 text-slate-900">RevOps</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Unificando Marketing, Vendas e CS. Receita previsível.
                        </p>
                    </div>
                    <span class="accent-text font-bold text-sm mt-6 block">Ler mais →</span>
                </a>
            </div>
        </div>
    </section>

    <section id="ferramentas" class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Caixa de Ferramentas</h2>
                <p class="text-slate-500 mt-2">Utilitários práticos para o dia a dia.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 px-2">
                <a href="gerador-briefing.php" class="tool-card-link">
                    <div class="icon-container bg-indigo-50 text-indigo-600">⚡</div>
                    <h3 class="text-lg font-bold text-slate-900">Gerador de Briefing</h3>
                    <p class="text-sm text-slate-500 mt-2 mb-6">Crie briefings técnicos usando IA em segundos.</p>
                    <span class="btn-tool-fake">Abrir Ferramenta</span>
                </a>

                <div class="tool-card-link card-disabled">
                    <div class="icon-container bg-slate-100 text-slate-400">📋</div>
                    <h3 class="text-lg font-bold text-slate-600">Checklist CRM</h3>
                    <p class="text-sm text-slate-400 mt-2 mb-6">Auditoria de qualidade de dados.</p>
                    <span class="btn-tool-fake">Em Breve</span>
                </div>

                <div class="tool-card-link card-disabled">
                    <div class="icon-container bg-slate-100 text-slate-400">🧮</div>
                    <h3 class="text-lg font-bold text-slate-600">Calculadora ROI</h3>
                    <p class="text-sm text-slate-400 mt-2 mb-6">Simulador de retorno.</p>
                    <span class="btn-tool-fake">Em Breve</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-slate-900 rounded-[2.5rem] p-12 md:p-16 text-center shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full opacity-20 blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-600 rounded-full opacity-20 blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>

                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 relative z-10 font-serif">
                    Pronto para evoluir sua carreira?
                </h2>
                <p class="text-slate-300 text-lg mb-10 max-w-xl mx-auto leading-relaxed relative z-10">
                    Junte-se à nossa lista exclusiva. Receba frameworks, convites e conteúdos que não publicamos abertamente.
                </p>
                
                <a href="participar.php" class="inline-flex items-center gap-2 bg-indigo-600 text-white font-bold py-4 px-10 rounded-full hover:bg-indigo-500 transition-all duration-300 shadow-lg hover:shadow-indigo-500/50 hover:-translate-y-1 no-underline text-lg relative z-10">
                    Entrar para a Lista VIP
                    <span>→</span>
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
