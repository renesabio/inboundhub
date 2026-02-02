<footer class="py-12 px-6 border-t border-gray-200 mt-auto bg-cupertino-base">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-cupertino-subtext">
            <div class="mb-4 md:mb-0 font-medium">
                &copy; <?php echo date("Y"); ?> InboundHub.
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-cupertino-text transition-colors">LinkedIn</a>
                <a href="#comunidade" class="hover:text-cupertino-text transition-colors">Grupo VIP</a>
            </div>
        </div>
    </footer>

    <script>
        function gerarPrompt() {
            const nicho = document.getElementById('nicho').value;
            const publico = document.getElementById('publico').value;
            
            if(!nicho || !publico) {
                alert("Por favor, preencha os campos para gerar o briefing.");
                return;
            }

            const promptTexto = `Atue como Estrategista Sênior de Inbound.\n\nCrie um briefing estruturado para o nicho "${nicho}" focado no público "${publico}".\n\nEstrutura:\n1. Dores Latentes\n2. Tópicos de Conteúdo (Topo, Meio, Fundo)\n3. Gancho de Atração\n\nTom de voz: Autoritativo e Empático.`;
            
            const output = document.getElementById('promptOutput');
            const area = document.getElementById('resultadoArea');
            
            output.value = promptTexto;
            area.classList.remove('hidden');
            area.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    </script>
</body>
</html>
