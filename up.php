<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c095df0eeb.js"></script>
    <link rel="stylesheet" media="screen" href="css/style.css">

    <title>Vitóriawagen | Bem-vindo(a)</title>
  </head>
  <body>
    <header>
        <img src="img/bg.png" class="img-fluid" alt="">
    </header>

    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Novo Polo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active-nav" href="up.php">Up!</a>
            </li>
        </ul>
     </nav>

     <div class="container-fluid padding landing-color">
        <div class="row">
            <div class="col-md-6 col-sm-12">
              <img src="img/take-up-vermelho.png" class="img-fluid" alt="Novo Polo">
            </div>

            <div class="col-md-6 col-sm-12 text text-center">
                <div class="row">
                    <h3>Saia na frente e garanta um volkswagen.</h3>
                    <p>Escolha o modelo que você deseja e receba ofertas imperdíveis em primeira mão.</p>
                    
                    <div id="error"></div>
                    <form class="mx-auto" id="main-form" method="POST" action="">
                        <aside class="float-left">
                            <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                                </div>
                          </aside>  
                        <aside class="float-right">
                            <div class="form-group">
                                <textarea name="" class="form-control" id="message" name="message" cols="40" rows="6" placeholder="Menssagem"></textarea>
                            </div>
                            <input class="btn btn-success btn-block" type="submit" value="Garanta Agora">
                        </aside>
                    </form>
                </div>
            </div>
        </div>
     </div>

     <div class="text-car">
         <p>Imagens Ilustrativas. Novo Polo 1.0 MPI - preto - a partir de R$ 49.990,00 - condição de taxa 0% válida exclusivamente para modelos 1.0 MPI e 1.6 MSI com entrada de 90% e saldo em 12 meses. Promoção válida até 28/02/2018 ou enquanto durar o estoque.</p>
     </div>

     <div class="logo-footer text-center">
         <img src="img/rodape.png" alt="">
     </div>

     <footer>
      <div class="text-center">
        <button id="btn1" onclick="changeText()" class="btn btn-footer btn-outline-primary btn-md">Vitória</button>
        <button id="btn2" onclick="changeTextBtn()" class="btn btn-footer btn-outline-primary btn-md">Serra</button>
      </div>
      <div id="change">
        <p><i class="fas fa-map-marker-alt"></i> Av.Vitória - Romão - Vitória - Cep 29041-405</p>
        <p><i class="fas fa-envelope-square"></i> E-mail: vitoriawagen@grupolider.com.br</p>
        <p><i class="fas fa-phone-square-alt"></i> Tel (27) 3331-8100</p>
      </div>
     </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>