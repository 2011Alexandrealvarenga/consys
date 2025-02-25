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
    if(isset($_POST['cambio']) ? $cambio = $_POST['cambio'] : '');

    if ($_FILES['image']['error'] == 0) {
        $fileName = $_FILES['image']['name']; // Nome original do arquivo
        $fileTmpName = $_FILES['image']['tmp_name']; // Arquivo temporário
        $fileSize = $_FILES['image']['size']; // Tamanho do arquivo
        $fileType = $_FILES['image']['type']; // Tipo do arquivo

        // Diretório onde as imagens serão armazenadas
        $uploadDirectory = 'assets/img/';
        $targetFile = $uploadDirectory . basename($fileName);

        // Verifica se o diretório 'uploads' existe, caso contrário, cria
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Verificar se a imagem é realmente um arquivo de imagem (opcional)
        $check = getimagesize($fileTmpName);
        move_uploaded_file($fileTmpName, $targetFile);
        // if ($check !== false) {
        //     // Mover o arquivo para o diretório 'uploads'
        //     if (move_uploaded_file($fileTmpName, $targetFile)) {
        //         // Conectar ao banco de dados
        //         // $conexao = conectarBanco();
        //         // if ($conexao->connect_error) {
        //         //     die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
        //         // }

        //         // Preparar e executar a consulta para inserir o nome da imagem no banco de dados
        //         // $stmt = $conexao->prepare("INSERT INTO imagens (nome_imagem) VALUES (?)");
        //         // $stmt->bind_param("s", $fileName); // "s" para string
        //         // if ($stmt->execute()) {
        //         //     echo "Imagem enviada e nome armazenado no banco de dados com sucesso!";
        //         // } else {
        //         //     echo "Erro ao armazenar o nome no banco de dados.";
        //         // }

        //         // Fechar a conexão
        //         // $stmt->close();
        //         // $conn->close();
        //     } else {
        //         echo "Erro ao mover o arquivo para o diretório.";
        //     }
        // } else {
        //     echo "O arquivo não é uma imagem válida.";
        // }
    } else {
        echo "Erro no envio do arquivo.";
    }


    

}else{
    echo 'nao foram enviado dados do carro';
}

$sql = 'INSERT INTO carro (marca, modelo, valor, ano_fabricacao, ano_modelo, quilometragem, cor, placa_final, imagem, cambio) VALUES (?,?,?,?,?,?,?,?,?,?)';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('ssiiiisiss', $marca,$modelo,$valor,$ano_fabricacao,$ano_modelo,$quilometragem,$cor,$placa_final,$fileName,$cambio);

// Executar a consulta
if ($stmt->execute()) {
    header('Location: carro-cadastro.php');
    echo "<br> Valor atualizado com sucesso!";
    exit;
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

// 5. Fechar a conexão
$stmt->close();
$conexao->close();
;?>


<?php require('footer.php') ;?>