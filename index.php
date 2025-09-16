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
                                        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Fulano">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="exampleFormControlInput1" class="form-label">Peso:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="peso" placeholder="80">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="altura" class="form-label">Altura:</label>
                                        <input type="text" class="form-control" id="altura" step="0.01" min="1" max="2.50" name="altura">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <input type="submit" value="Calcular IMC" class="btn-imc">
                        <?php
                        include("./back.php");
                        ?>
                    </form>


                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="container">
                        <p class="title">Seja Bem-vindo(a)</p>
                        <p class="subtitle">Siga o formulario para calcular seu percentual de gordura corporal</p>

                        <form method="get">
                            <div class="row">
                                <div class="col s12">
                                    <!-- SELECT de sexo (com id e name) -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select id="sexo" name="sexo" class="form-select" aria-label="Selecione seu gênero">
                                                <option value="" disabled selected>Seu gênero</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Peso -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="peso" class="form-label">Peso (kg):</label>
                                            <input type="text" class="form-control" id="peso" name="peso" placeholder="80">
                                        </div>
                                    </div>

                                    <!-- Altura (mantive id altura) -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="altura_p" class="form-label">Altura (m):</label>
                                            <input type="text" class="form-control" id="altura_p" name="altura_p" step="0.01" placeholder="1.79">
                                        </div>
                                    </div>

                                    <!-- Cintura (sempre necessária para ambos) -->
                                    <div class="row">
                                        <div class="input-field col s12" id="field-cintura">
                                            <label for="cintura" class="form-label">Cintura (cm):</label>
                                            <input type="text" class="form-control" id="cintura" name="cintura" placeholder="90">
                                        </div>
                                    </div>

                                    <!-- Pescoço (sempre necessária para ambos) -->
                                    <div class="row">
                                        <div class="input-field col s12" id="field-pescoco">
                                            <label for="pescoco" class="form-label">Pescoço (cm):</label>
                                            <input type="text" class="form-control" id="pescoco" name="pescoco" placeholder="40">
                                        </div>
                                    </div>

                                    <!-- Quadril (aparece só para feminino) -->
                                    <div class="row">
                                        <div class="input-field col s12 hidden" id="field-quadril" aria-hidden="true">
                                            <label for="quadril" class="form-label">Quadril (cm):</label>
                                            <input type="text" class="form-control" id="quadril" name="quadril" placeholder="100">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <input type="submit" value="Calcular Percentual de Gordura" class="btn-imc">

                            <?php include("./back.php"); ?>
                        </form>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
        </div>
    </section>

    <?php
    include "scrips.php";
    ?>


</body>

</html>