<?php include('layouts/header.php'); ?>
<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");
foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', $signo->dataInicio)->setDate(date('Y'), date('m'), date('d'));
    $dataFim = DateTime::createFromFormat('d/m', $signo->dataFim)->setDate(date('Y'), date('m'), date('d'));
    $dataNascimento = new DateTime($data_nascimento);

    if ($dataNascimento >= $dataInicio && $dataNascimento <= $dataFim) {
        echo "<h1>Seu signo é: {$signo->signoNome}</h1>";
        echo "<p>{$signo->descricao}</p>";
        break;
    }
}
?>