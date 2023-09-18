function PacienteRegistro(){

    var Data = $('#data_paciente').val();
    var NomeHospitalPaciente = $('#nome_hospital_paciente').val();
    var NomePaciente = $('#nome_paciente').val();
    var IdadePaciente = $('#idade_paciente').val();
    var RgCpfPaciente = $('#rg_cpf_paciente').val();
    var FonePaciente = $('#fone_paciente').val();
    var AcompanhantePaciente = $('#acompanhante_paciente').val();
    var IdadeAcompanhantePaciente = $('#idade_acompanhante_paciente').val();
    var LocalOcorrenciaPaciente = $('#local_ocorrencia_paciente').val();
    var NUsbPaciente = $('#n_usab_paciente').val();
    var NOcorrPaciente = $('#n_ocorr_paciente').val();
    var DespPaciente = $('#desp_paciente').val();
    var HChPaciente = $('#h_ch_paciente').val();
    var KmFinalPaciente = $('#km_final_paciente').val();
    var CodSiaSusPaciente = $('#cod_sia_sus_paciente').val();
    var SexoPaciente = $['#sexo_paciente'];
    if ($SexoPaciente === 'm') {
        SexoPaciente = 'm'
    } elseif ($SexoPaciente === 'f'){
        SexoPaciente = 'f'
    }

    console.log(SexoPaciente);

     $.ajax({
        url: 'PHP/tabela-paciente.php',
        method: 'POST',
        data: {
            Data: Data,
            SexoPaciente: SexoPaciente,
            NomeHospitalPaciente: NomeHospitalPaciente,
            NomePaciente: NomePaciente,
            IdadePaciente: IdadePaciente,
            RgCpfPaciente: RgCpfPaciente,
            FonePaciente: FonePaciente,
            AcompanhantePaciente: AcompanhantePaciente,
            IdadeAcompanhantePaciente: IdadeAcompanhantePaciente,
            LocalOcorrenciaPaciente: LocalOcorrenciaPaciente,
            NUsbPaciente: NUsbPaciente,
            NOcorrPaciente: NOcorrPaciente,
            DespPaciente: DespPaciente,
            HChPaciente: HChPaciente,
            KmFinalPaciente: KmFinalPaciente,
            CodSiaSusPaciente: CodSiaSusPaciente
        },
        dataType: 'json'
    }).done(function() {
        alert("alguma coisa deu!!");
    });
    
};


