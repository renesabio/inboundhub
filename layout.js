// layout.js - Gerencia o Cabeçalho e Rodapé Global

document.addEventListener("DOMContentLoaded", function() {
    
    // --- 1. DEFINIÇÃO DO CABEÇALHO (NAV) ---
    const headerHTML = `
    <nav class="bg-white border-b border-slate-200 z-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex justify-center md:justify-between h-20 items-center">
                
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-slate-900 tracking-tight hover:text-indigo-600 transition">
                        Inbound<span class="text-indigo-600">Hub</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                    <a href="index.html" class="hover:text-indigo-600 transition">Home</a>
                    <a href="index.html#artigos" class="hover:text-indigo-600 transition">Artigos</a>
                    <a href="index.html#ferramentas" class="hover:text-indigo-600 transition">Ferramentas</a>
                    <a href="index.html#comunidade" class="px-5 py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">Comunidade</a>
                </div>
                
            </div>
        </div>
    </nav>
    `;

    // --- 2. DEFINIÇÃO DO RODAPÉ (FOOTER) ---
    const footerHTML = `
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800 mt-auto">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="mb-2">© 2026 InboundHub. Todos os direitos reservados.</p>
            <p class="text-sm">
                Curadoria de <a href="https://www.linkedin.com/in/renesabio" target="_blank" class="text-indigo-400 hover:text-white transition">Renê Sábio</a>.
            </p>
        </div>
    </footer>
    `;

    // --- 3. INJEÇÃO NO SITE ---
    // Procura as divs com id "site-header" e "site-footer" e cola o código dentro
    const headerContainer = document.getElementById('site-header');
    const footerContainer = document.getElementById('site-footer');

    if (headerContainer) headerContainer.innerHTML = headerHTML;
    if (footerContainer) footerContainer.innerHTML = footerHTML;
});
