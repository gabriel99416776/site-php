<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="style.css ">
    <?php
    include("head.php");
    ?>
</head>

<body>

    <?php
    include("navbar.php");
    ?>

    <section class="principal">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Calcular o IMC</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Calcular o percentual de gordura corporal</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Calcular a relação cintura-quadril (RCQ)</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Calcular o peso ideal ou massa magra</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="container">
                    <p class="title">Seja Bem-vindo(a)</p>
                    <p class="subtitle">Siga o formulario para calcular seu Indice de Massa Corporal (IMC)</p>

                    <form method="get">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">people</i>
                                        <input type="text" id="nome" class="autocomplete" name="nome">
                                        <label for="nome">Nome:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">fitness_center</i>
                                        <input type="text" id="peso" class="autocomplete" name="peso">
                                        <label for="peso">Peso:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">merge_type</i>
                                        <!-- tirei a classe autocomplete -->
                                        <input type="text" id="altura" name="altura" maxlength="4">
                                        <label for="altura">Altura:</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <input type="submit" value="Calcular IMC">
                        <?php
                        $nome = $idade = $peso = $altura = $imc = $resultado = $cores_resultado_imc = $cores_resultado_tabela = "";
                        if (!empty($_GET["peso"]) && !empty($_GET["altura"])  && !empty($_GET["nome"])) {
                            // Todos os campos existem e têm valor
                            $nome = $_GET["nome"];
                            // $idade = $_GET["idade"];
                            $peso = $_GET["peso"];
                            $altura = (float)$_GET["altura"];
                            $imc = round(num: $peso / ($altura * $altura), precision: 2);
                            $resultado = $imc <= 18.5 ? "Você está abaixo do peso" : ($imc <= 25 ? "Você está peso normal" : ($imc <= 30 ? "Você com sobrepeso" : "Você está obeso"));
                            $cores_resultado_imc = $imc <= 18.5 ? "color: #ffff; background-color: #981a1c" : ($imc <= 25 ? "color: #ffff; background-color: #99db49" : ($imc <= 30 ? "color: #ffff; background-color: #981a1c" : "color: #ffff; background-color: #c21b12"));
                            $cores_resultado_tabela = $imc <= 18.5 ? "color: #981a1c; font-weight: bold;" : ($imc <= 25 ? "color: #99db49; font-weight: bold;" : ($imc <= 30 ? "color: #981a1c; font-weight: bold;" : "color: #c21b12; font-weight: bold;"));
                        ?>
                            <div class="result-container">
                                <p class="title-result">Obrigado pelas informações, <?= $nome ?></p>
                                <p class="result">Seu IMC foi: <span style="<?= $cores_resultado_imc ?>"><?= $imc ?></span> </p>
                                <p class="classi"><span style="<?= $cores_resultado_tabela ?>"><?= $resultado ?></span></p>
                            </div>
                        <?php
                        }
                        ?>
                    </form>


                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
        </div>
    </section>

    <?php
    include "scrips.php";
    ?>

</body>

</html>