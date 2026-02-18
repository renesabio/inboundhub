<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Hub! | Cadastro Confirmado</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <?php include 'header.php'; ?>

    <main class="flex-grow flex items-center justify-center py-20 px-4">
        <div class="max-w-lg w-full bg-white p-12 rounded-[2rem] shadow-2xl border border-slate-100 text-center relative overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>

            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce">
                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-serif">Você está dentro!</h1>
            
            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                Seu e-mail foi confirmado com sucesso. Agora, junte-se aos outros profissionais no nosso grupo oficial.
            </p>

            <a href="https://chat.whatsapp.com/SEU_LINK_AQUI" target="_blank" class="inline-flex items-center gap-3 bg-[#25D366] text-white font-bold py-4 px-8 rounded-full hover:bg-[#128C7E] transition shadow-lg hover:shadow-green-200 transform hover:-translate-y-1 text-lg no-underline w-full justify-center">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Entrar no Grupo
            </a>

            <p class="text-sm text-slate-400 mt-6">
                Não conseguiu entrar? Responda o e-mail que te enviamos.
            </p>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
