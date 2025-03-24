<?php
// Fazendo a requisição à API
$response = file_get_contents("api.json");
// Decodificando a resposta JSON
$characters = [];
if ($response) {
    $data = json_decode($response, true);
    if (isset($data['results'])) {
        $characters = $data['results'];
    } else {
        echo "A chave 'results' não foi encontrada.";
    }
} else {
    echo "Erro ao fazer a requisição: " . curl_error($ch);
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Personagens de Rick and Morty</title>
    <link rel="stylesheet" href="css/estilo.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div id="align-img">
<img src="imagens/image-removebg-preview(1).png" alt="imagem logo rick and morty">
</div>
<h1>Personagens de Rick and Morty</h1>

<div id="container">        
    <?php if (!empty($characters)): ?>
        <?php foreach ($characters as $character): ?>
            <div id="align-api">
            <img src="<?php echo htmlspecialchars($character['image']); ?>" alt="<?php echo htmlspecialchars($character['name']); ?>">
            <ul>
            <li>
                <strong>Nome:</strong> <?php echo htmlspecialchars($character['name']); ?><br>
                <strong>Status:</strong> <?php echo htmlspecialchars($character['status']); ?><br>
                <strong>Espécie:</strong> <?php echo htmlspecialchars($character['species']); ?><br>
                
            </li>
            </ul>   
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum personagem encontrado.</p>
    <?php endif; ?>
    </div>

    <!-- Projeto desenvolvido por Mykoll Daniel -->
    <!-- Link do repositório: https://github.com/mykoll007/Projeto-XCronos -->
         
<!-- Biblioteca adicionada de particulas fundo -->
<div id="particles-js"></div>

<script src="js/particles.min.js"></script>
</body>
</html>
