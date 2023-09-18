<?php
include("conecta.php");
$NomeTermoRecusa = $_POST['NomeTermoRecusa'];
$IdentidadeRecusa = $_POST['IdentidadeRecusa'];
$CpfRescusa = $_POST['CpfRescusa'];
$AssinaturaRecusa = $_POST['AssinaturaRecusa'];
$TestemunhaRecusa = $_POST['TestemunhaRecusa'];
$DocRecusa = $_POST['DocRecusa'];
$TestemunhaRecusa2 = $_POST['TestemunhaRecusa2'];
$DocRecusa2 = $_POST['DocRecusa2'];

$stmt = $pdo->prepare("INSERT INTO paciente/*Fazer colunas na tabela :D*/ 
(nome_hospital_paciente, data_paciente,
nome_paciente, idade_paciente, rg_cpf_paciente,
fone_paciente, acompanhante_paciente, idade_acompanhante_paciente,
local_ocorrencia_paciente, n_usb_paciente, n_ocorr_paciente,
desp_paciente, h_ch_paciente, km_final_paciente,
cod_sia_sus_paciente) VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([
    $NomeTermoRecusa, $IdentidadeRecusa, $CpfRescusa, $AssinaturaRecusa,
    $TestemunhaRecusa, $DocRecusa, $TestemunhaRecusa2, $DocRecusa2,
]);
?>