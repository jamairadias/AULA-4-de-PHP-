<?php 
    if($_POST){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<?php $title = "Compra"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php 
        $nivelAcesso = mt_rand(0,1);
    ?>
    <?php require_once("inc/header.php"); ?>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-light rounded border">
            <form class="form" action="" method="POST">
                <div class="row p-3">
                    <div class="col">
                        <input type="text" name="nome" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Seu email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Estou de acordo com os termos</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
                <?php if(isset($_REQUEST) && $_REQUEST): ?>
                    <div class="card">
                        <div class="card-header">
                            Pedido
                        </div>
                        <div class="card-body">
                            <p>
                                <?php echo "Olá, $nome. Seu e-mail cadastrado é $email"; ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                 
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>