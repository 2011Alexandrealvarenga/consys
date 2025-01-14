<?php 
include('inc/classes/config.php');
$conexao = conectarBanco();

// $info = [];
// $id = isset($_GET['id']);
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM carro WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os detalhes do item
        $carro = $result->fetch_assoc();
        
    } else {
        echo "Item não encontrado.";
    }
}else{
    echo 'não foi passado id';
}




if(isset($_POST['id'])){
  echo '<br>'.'id: '. $id_carro = ($_POST['id']);
  echo '<br>'.'nome: '. $nomeCompleto = ($_POST['nome']);
  echo '<br>'.'cpf: '. $cpf = ($_POST['cpf']);
  echo '<br>'.'endereco: '. $endereco = ($_POST['endereco']);
  echo '<br>'.'numero: '. $numero = ($_POST['numero']);
  echo '<br>'.'complemento: '. $complemento = ($_POST['complemento']);
  echo '<br>'.'bairro: '. $bairro = ($_POST['bairro']);
  echo '<br>'.'cidade: '. $cidade = ($_POST['cidade']);
  echo '<br>'.'nomeImpressoCartao: '. $nomeImpressoCartao = ($_POST['nomeImpressoCartao']);
  echo '<br>'.'numeroCartao: '. $numeroCartao = ($_POST['numeroCartao']);
  echo '<br>'.'validade: '. $validade = ($_POST['validade']);
  echo '<br>'.'codigoVerificador: '. $codigoVerificador = ($_POST['codigoVerificador']);
}else{
  echo 'não foi passado id';
}
$resvlEntrada = $_POST['resvlEntrada'];
$juros = $_POST['juros'];
$resmultiplicador = $_POST['resmultiplicador'];
$resvlCadaParcela = $_POST['resvlCadaParcela'];
$resvlTotalFinanciado = $_POST['resvlTotalFinanciado'];
$resvlTotalEntMaisParc = $_POST['resvlTotalEntMaisParc'];
echo '<br>valor entrada '.$resvlEntrada;
echo '<br>valor juros '.$juros;
echo '<br>qtd parcelas'.$resmultiplicador;
echo '<br>valor cada parcela'.$resvlCadaParcela;
echo '<br>valor vl total financiado'.$resvlTotalFinanciado;
echo '<br>valor vl total ent mais parc'.$resvlTotalEntMaisParc;

///////////////////////////////
$sql = "INSERT INTO forma_pagamento (Nome_completo, cpf,endereço,numero,complemento,bairro,cidade,nome_impresso, num_cartao,validade, cod_verificador,vl_entrada,juros,qtd_parcelas,valor_cada_parcela,valor_t_parcela,vl_total_ent_mais_parc,fk_id_carro) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sisissssiiiiiiiiii", $nomeCompleto, $cpf, $endereco,$numero,$complemento,$bairro,$cidade,$nomeImpressoCartao,$numeroCartao,$validade,$codigoVerificador,$resvlEntrada,$juros,$resmultiplicador,$resvlCadaParcela,$resvlTotalFinanciado,$resvlTotalEntMaisParc,$id_carro);

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
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConSys - Concessionária</title>
    <!-- <link href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/relatorio-final.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Consys</h1>
          </div>
        </div>
      </div>
    </header>
    <section class="relatorio-final">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="subtitle">Relatório Final</h2>
          </div>
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados Pessoais</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Nome completo</span><br>
                <span class="desc"><?php echo $nomeCompleto ;?></span>
              </div>
              <div class="item">
                <span class="bold">CPF</span><br>
                <span class="desc"><?php echo $cpf ;?></span>
              </div>
              <div class="item">
                <span class="bold">Endereço</span><br>
                <span class="desc">
                  <?php echo 
                  $endereco 
                  .' - '. $numero
                  .' - '. $complemento
                  .' - '. $cidade
                  .' - '. $bairro                  
                  ;?>
                  
                </span>
              </div>              
            </div>
          </div>
          
          <hr class="line">
          <div class="col-12">
            <h3 class="subtitle">Dados do veiculo</h2>
          </div>
          <div class="col-6">
            <div class="content">
              <div class="item">
                <span class="bold">Marca/Modelo</span><br>
                <span class="desc"><?php echo $carro['marca'] ;?> / <?php echo $carro['modelo'] ;?></span>
              </div>
              <div class="item">
                <span class="bold">Valor a vista</span><br>
                <span class="desc">R$ <?php echo $carro['valor'] ;?></span>
              </div>
              <div class="item">
                <span class="bold">Valor da Parcela</span><br>
                <span class="desc"><?php echo $resmultiplicador;?> x R$ <?php echo $resvlCadaParcela;?></span>
              </div>
              <div class="item">
                <span class="bold">Total a prazo</span><br>
                <span class="desc">R$ <?php echo $resvlTotalFinanciado;?></span>
              </div>
              
              <div class="item">
                <span class="bold">Valor de entrada</span><br>
                <span class="desc">R$ <?php echo $resvlEntrada;?></span>
              </div>
              <div class="item">
                <span class="bold">Valor de entrada mais parcelamento</span><br>
                <span class="desc">R$ <?php echo $resvlTotalEntMaisParc;?></span>
              </div>
            </div>
          </div>   
          <div class="col-12">
            <div class="btn-verificar">
              <button onclick="simularCtrlP()">Simular Ctrl + P</button>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <footer>
      <script src="assets/js/relatorio-final.js"></script>
    </footer>
  </body>
</html>