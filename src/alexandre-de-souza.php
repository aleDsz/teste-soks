<?php

function selecionarNotasCaixaEletronico() {
	$valorTotal = 1677.00;
	$notasCaixa = array(100, 20, 5, 2);
	$valorARetirar = $valorTotal;
	$quantiaNotas  = array(0, 0, 0, 0);
	$i = 0;
	
	foreach ($notasCaixa as $nota) {
		$qtdNota = 0;
		while ($valorARetirar >= $nota) {
			$valorARetirar = $valorARetirar - $nota;
			$qtdNota++;
			$quantiaNotas[$i] = $qtdNota;
		}
		$i++;
	}

	return $quantiaNotas;
}

$notasSelecionadas = selecionarNotasCaixaEletronico();
$valorFinal = 0;
$notasCaixa = array(100, 20, 5, 2);
$i = 0;
echo "As Notas Selecionada foram: <br />";
foreach ($notasSelecionadas as $nota) {
	echo "$nota de R$ {$notasCaixa[$i]}<br />";
	$valorFinal += ($notasCaixa[$i] * $nota);
	$i++;
}
echo "Totalizando: R$ $valorFinal";
