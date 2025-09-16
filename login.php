<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    include("head.php");
    ?>
</head>

<body>
    <form class="form-login" method="POST" action="./back_login.php">
        <img src="logo.png" alt="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxxx@xxxx.com">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php
    include "scrips.php";
    ?>

</body>

</html>