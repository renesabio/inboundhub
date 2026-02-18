<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifique seu e-mail | Inbound Hub</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <?php include 'header.php'; ?>

    <main class="flex-grow flex items-center justify-center py-20 px-4">
        <div class="max-w-lg w-full bg-white p-10 rounded-2xl shadow-xl border border-slate-100 text-center">
            
            <div class="w-20 h-20 bg-indigo-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>

            <h1 class="text-3xl font-bold text-slate-900 mb-4 font-serif">Falta pouco!</h1>
            
            <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                Enviamos um link de confirmação para o seu e-mail. <br>
                <strong>Você precisa clicar nele para entrar na comunidade.</strong>
            </p>

            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 text-sm text-amber-800 mb-8 text-left">
                <strong>⚠️ Não encontrou?</strong>
                <ul class="list-disc pl-5 mt-1 space-y-1">
                    <li>Verifique a caixa de Spam ou Promoções.</li>
                    <li>Procure por "Inbound Hub".</li>
                </ul>
            </div>

            <a href="/" class="text-indigo-600 font-bold hover:underline">Voltar para a Home</a>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
