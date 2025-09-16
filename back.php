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




        
// $GC = 86.010 × log10(cintura - pescoço) - 70.041 × log10(altura) + 36.76







        ?>


