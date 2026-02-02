<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboundHub | Por Renê Sábio</title>
    <meta name="description" content="Marketing estratégico, CRM e RevOps.">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cupertino: {
                            base: '#F5F5F7',    /* Cinza Fundo */
                            card: '#FFFFFF',    /* Branco Card */
                            action: '#0071E3',  /* Azul System */
                            hover: '#0077ED',
                            text: '#1D1D1F',    /* Preto Suave */
                            subtext: '#86868b'  /* Cinza Texto */
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', '-apple-system', 'sans-serif'],
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
        /* Glassmorphism na Navegação */
        .glass-nav {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        /* Sombras Apple-like */
        .cupertino-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.02);
        }
        .card-hover:hover {
            transform: scale(1.005);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <nav class="glass-nav fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-5xl mx-auto px-6 h-16 flex justify-between items-center">
            <a href="index.php" class="text-lg font-semibold tracking-tight text-cupertino-text hover:opacity-80 transition-opacity">
                InboundHub
            </a>
            
            <div class="hidden md:flex gap-8 text-sm font-medium text-cupertino-subtext">
                <a href="index.php#proposito" class="hover:text-cupertino-action transition-colors">Propósito</a>
                <a href="index.php#artigos" class="hover:text-cupertino-action transition-colors">Estudos</a>
                <a href="index.php#ferramentas" class="hover:text-cupertino-action transition-colors">Ferramentas</a>
            </div>

            <a href="index.php#comunidade" class="text-xs font-medium bg-black text-white px-5 py-2.5 rounded-full hover:bg-gray-800 transition-colors">
                Comunidade
            </a>
        </div>
    </nav>
