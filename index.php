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
    <link rel="stylesheet" href="assets/css/home.css">
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
    <section class="lista-carro">
        <div class="container">
            <div class="row">                
                <div class="col-4 my-4">
                    <div class="content-item-carro">
                        <div class="item">
                            <img src="assets/img/fit.jpg" class="img-carro">
                            <ul>
                                <li><b>Marca:</b> Honda</li>
                                <li><b>Modelo:</b> Fit</li>
                                <li><b>Ano fabricação:</b> 2007</li>
                                <li><b>Ano Modelo:</b> 2008</li>
                                <li><b>Quilometragem:</b> km 125.000</li>
                                <li><b>Cor:</b> Verde</li>
                                <li><b>R$ 30.000</b></li>
                            </ul>
                            <div class="btn-verificar">
                                <a href="carro.php">Verificar</a>
                            </div>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
    </section>
    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quisquam dolorem eaque iusto assumenda, asperiores eum dolor cumque, sequi consectetur sit! Obcaecati molestiae blanditiis harum autem dolores ipsa ea rerum.</span>
    <button class="botao">clique aqui</button>
    <footer>
        <script>
            const botao = document.querySelector('.botao');
            const corpo = document.querySelector('span');
            botao.addEventListener('click', function(){
                corpo.style.color = 'yellow';

            })
        </script>
    </footer>
</body>
</html>