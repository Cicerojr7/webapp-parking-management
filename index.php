<?php
// Filtro
if (isset($_GET['placa'])) { $placa = $_GET['placa']; } else { $placa = ""; }
if (isset($_GET['veiculo'])) { $veiculo = $_GET['veiculo']; } else { $veiculo = ""; }
if (isset($_GET['entrada'])) { $entrada = $_GET['entrada']; } else { $entrada = ""; }
// Criar Registro
if (isset($_GET['registrar'])) {
    $placa = $_GET['placa'];
    $veiculo = $_GET['veiculo'];
    $entrada = $_GET['entrada'];
}
// Apagar Registro
if (isset($_GET['apagar'])) {
    $placa = "";
    $veiculo = "";
    $entrada = "";
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Controle de Estacionamento</title>
  </head>
  <body>
    <div class="container">
        LOGOMARCA
        <div class="container jumbotron">
            <div class="row">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" name="registrar">
                    <input type="text" name="veiculo" id="" placeholder="Veículo">
                    <input type="text" name="placa" id="" placeholder="Placa">
                    <input type="hidden" name="entrada" value="<?php date_default_timezone_set('America/Fortaleza'); echo date('d/m/Y - H:i'); ?>">
                    <input type="submit" value="Entrada">
                </form>
            </div>
        </div>
        <div class="container jumbotron">
            <div class="row">
                <div class="col">Veículo</div>
                <div class="col">Placa</div>
                <div class="col">Entrada</div>
                <div class="col">Ação</div>
            </div>
            <?php
            // Start ROW
            ?>
            <div class="row">
                <div class="col"><?php echo $veiculo; ?></div>
                <div class="col"><?php echo $placa; ?></div>
                <div class="col"><?php echo $entrada; ?></div>
                <div class="col">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="apagar">
                        <input type="submit" value="SAÍDA">
                    </form>
                </div>
            </div>
            <?php
            // End ROW
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>