<?php
include("conecta.php");

$NomeHospitalPaciente = $_POST['NomeHospitalPaciente'];
$Data = $_POST['Data'];
$SexoPaciente = $_POST['SexoPaciente'];
$NomePaciente = $_POST['NomePaciente'];
$IdadePaciente = $_POST['IdadePaciente'];
$RgCpfPaciente = $_POST['RgCpfPaciente'];
$FonePaciente = $_POST['FonePaciente'];
$AcompanhantePaciente = $_POST['AcompanhantePaciente'];
$IdadeAcompanhantePaciente = $_POST['IdadeAcompanhantePaciente'];
$LocalOcorrenciaPaciente = $_POST['LocalOcorrenciaPaciente'];
$NUsbPaciente = $_POST['NUsbPaciente'];
$NOcorrPaciente = $_POST['NOcorrPaciente'];
$DespPaciente = $_POST['DespPaciente'];
$HChPaciente = $_POST['HChPaciente'];
$KmFinalPaciente = $_POST['KmFinalPaciente'];
$CodSiaSusPaciente = $_POST['CodSiaSusPaciente'];

$stmt = $pdo->prepare("INSERT INTO paciente
(nome_hospital_paciente, data_paciente,
nome_paciente, idade_paciente, rg_cpf_paciente,
fone_paciente, acompanhante_paciente, idade_acompanhante_paciente,
local_ocorrencia_paciente, n_usb_paciente, n_ocorr_paciente,
desp_paciente, h_ch_paciente, km_final_paciente,
cod_sia_sus_paciente) VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([
    $NomeHospitalPaciente, $Data, $NomePaciente, $IdadePaciente,
    $RgCpfPaciente, $FonePaciente, $AcompanhantePaciente, $IdadeAcompanhantePaciente,
    $LocalOcorrenciaPaciente, $NUsbPaciente, $NOcorrPaciente, $DespPaciente, 
    $HChPaciente, $KmFinalPaciente, $CodSiaSusPaciente
]);
?>
