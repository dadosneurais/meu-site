<?php

    $capital = $_POST['capital'];
    $parcelas = $_POST['parcelas'];

    $valorParcela = $capital / $parcelas;
    $juros = $_POST['juros'];
    $calculo=0;

    $valorParcelaFormatada = number_format($valorParcela,2,',','');

    for($i=0;$i<$parcelas;$i++){
        $calculo += ($capital -$i * $valorParcela + $calculo) * $juros;
    }
    $calculoFormatado = number_format($calculo,2,',','');

    // echo "
    // Se realizar a compra em $parcelas parcelas de R$: $valorParcelaFormatada reais,
    // o rendimento do juros acumulado será de R$: $calculoFormatado reais.
    // ";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">
    <title>Gibeira.com</title>

  </head>
  <body>
      <div role="button">
        <span class="glow"></span>
            <div style="text-align: justify">
                <?
                echo "
                        Se realizar a compra em $parcelas parcelas de R$: $valorParcelaFormatada reais,
                        o rendimento do juros acumulado será de R$: $calculoFormatado reais.
                    ";
                ?>
            </div>
        </div>
    </div>
  </body>
</html>
