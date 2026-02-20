<?php
// Diz para o navegador (e para o Google) que este arquivo é um XML, não um HTML
header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$base_url = "https://inboundhub.com.br/"; // Domínio atualizado

// Lista de arquivos que NÃO devem aparecer no Google
$ignorar_arquivos = array(
    '.', 
    '..', 
    'header.php', 
    'footer.php', 
    'sitemap.php' // Ele não precisa referenciar a si mesmo
);

// Escaneia a pasta atual onde este arquivo está salvo
$arquivos = scandir(__DIR__);

foreach($arquivos as $arquivo) {
    // Filtra para pegar apenas arquivos que terminam em .php e que não estão na lista de ignorados
    if(pathinfo($arquivo, PATHINFO_EXTENSION) == 'php' && !in_array($arquivo, $ignorar_arquivos)) {
        
        // Se for o index.php, a URL fica limpa (só o domínio) e a prioridade é máxima (1.0)
        if ($arquivo == 'index.php') {
            $url = $base_url;
            $prioridade = '1.0';
        } else {
            $url = $base_url . $arquivo;
            $prioridade = '0.8';
        }

        // Pega a data da última vez que você salvou/editou esse arquivo no servidor
        $ultima_modificacao = date("Y-m-d", filemtime($arquivo));

        // Monta o bloco do XML para cada página
        echo "   <url>\n";
        echo "      <loc>" . htmlspecialchars($url) . "</loc>\n";
        echo "      <lastmod>" . $ultima_modificacao . "</lastmod>\n";
        echo "      <changefreq>weekly</changefreq>\n";
        echo "      <priority>" . $prioridade . "</priority>\n";
        echo "   </url>\n";
    }
}

echo '</urlset>';
?>
