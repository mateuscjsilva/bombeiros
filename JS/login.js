$('#formlogin').submit(function(e){
    e.preventDefault();

    var cod = $('#cod_bombeiro').val();
    var senha = $('#senha_bombeiro').val();

    console.log("codigo: " + cod, "senha: " + senha);

    $.ajax({
        url: 'PHP/verificar-login.php',
        method: 'POST',
        data: { cod: cod, senha: senha },
        dataType: 'json'
    }).done(function(result) {
        if (result.success) {
            window.location.href = 'index.html';
        } else {
            alert("Erro: " + result.error);
        }
    });
});
