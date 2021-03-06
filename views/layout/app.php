<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=assets('css/app.css')?>">

    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mvc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <?php if (isset($_SESSION['user'])) : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <form action="<?=route('logout')?>" method="POST">
                            <?php _method('DELETE') ?>
                            <button class="nav-link btn" href="<?=route('logout')?>">Sair</button>
                        </form>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=route('login')?>">Acessar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=route('register')?>">Registrar-se</a>
                    </li>
                </ul>
            <?php endif ?>
            
        </div>
    </nav>
    <div class="app">
        <main role="main">
            <?= $this->section('content') ?>
        </main>
    </div>
    <?= $this->section('scripts') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="<?=assets('js/app.js')?>"></script>


</body>

</html>