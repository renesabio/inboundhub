<link rel="icon" type="image/png" href="favicon.png?v=2">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-T99B7SCDSJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T99B7SCDSJ');
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6Ld8-zQsAAAAAMSXVth5fUCZANUtKBb4hPOYNQR4&hl=pt" async defer></script>

<style>
    /* Ocultar o selo do Google reCAPTCHA em todo o site */
    .grecaptcha-badge {
        visibility: hidden !important;
    }
</style>

<nav class="relative w-full bg-white border-b border-slate-200 text-base leading-normal z-50" id="navbar">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-20">
        
        <a href="/" class="text-2xl font-bold tracking-tight logo-brand font-sans text-slate-900 no-underline hover:text-indigo-600 transition">
            Inbound <span class="text-indigo-600">Hub</span>
        </a>
        
        <div class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-500 font-sans">
            <a href="artigos.html" class="hover:text-indigo-600 transition-colors no-underline">Artigos</a>
            <a href="ferramentas.html" class="hover:text-indigo-600 transition-colors no-underline">Ferramentas</a>
            
            <a href="participar.html" class="bg-indigo-600 text-white px-6 py-2.5 rounded-full font-bold hover:bg-indigo-700 transition shadow-md hover:shadow-lg hover:-translate-y-0.5 no-underline">
                Comunidade
            </a>
        </div>

        <button class="md:hidden text-slate-600 hover:text-indigo-600 focus:outline-none p-2" id="mobile-menu-btn" aria-label="Abrir menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>

    <div class="md:hidden hidden bg-white border-t border-slate-100 absolute w-full shadow-2xl" id="mobile-menu">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="artigos.html" class="block px-4 py-3 text-base font-semibold text-slate-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-xl transition-colors no-underline">Artigos</a>
            <a href="ferramentas.html" class="block px-4 py-3 text-base font-semibold text-slate-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-xl transition-colors no-underline">Ferramentas</a>
            <div class="pt-4 px-2">
                <a href="participar.html" class="block w-full text-center bg-indigo-600 text-white font-bold px-6 py-4 rounded-xl hover:bg-indigo-700 transition-colors shadow-lg no-underline">
                    Comunidade
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if(btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            // Fecha o menu ao clicar em um link
            const mobileLinks = menu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                });
            });
        }
    });
</script>
