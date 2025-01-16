<?php 
include('header.php');

$conexao = conectarBanco();

if(isset($_POST['marca'])){
    if(isset($_POST['marca']) ? $marca = $_POST['marca'] : '');
    if(isset($_POST['modelo']) ? $modelo = $_POST['modelo'] : '');
    if(isset($_POST['valor']) ? $valor = $_POST['valor'] : '');
    if(isset($_POST['ano_fabricacao']) ? $ano_fabricacao = $_POST['ano_fabricacao'] : '');
    if(isset($_POST['ano_modelo']) ? $ano_modelo = $_POST['ano_modelo'] : '');
    if(isset($_POST['quilometragem']) ? $quilometragem = $_POST['quilometragem'] : '');
    if(isset($_POST['cor']) ? $cor = $_POST['cor'] : '');
    if(isset($_POST['placa_final']) ? $placa_final = $_POST['placa_final'] : '');
    if(isset($_POST['imagem']) ? $imagem = $_POST['imagem'] : '');
    if(isset($_POST['cambio']) ? $cambio = $_POST['cambio'] : '');

}else{
    echo 'nao foram enviado dados do carro';
}

$sql = 'INSERT INTO carro (marca, modelo, valor, ano_fabricacao, ano_modelo, quilometragem, cor, placa_final, imagem, cambio) VALUES (?,?,?,?,?,?,?,?,?,?)';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('ssiiiisiss', $marca,$modelo,$valor,$ano_fabricacao,$ano_modelo,$quilometragem,$cor,$placa_final,$imagem,$cambio);

// Executar a consulta
if ($stmt->execute()) {
    echo "<br> Valor atualizado com sucesso!";
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

// 5. Fechar a conexão
$stmt->close();
$conexao->close();
;?>


<?php require('footer.php') ;?>