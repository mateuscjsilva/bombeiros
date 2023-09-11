$('#formlogin').submit(function(e){
    e.preventDefault();

    var cod = $('#cod_bombeiro').val();
    var senha = $('#senha_bombeiro').val();

    $.ajax({
        url: 'PHP/verificar-login.php',
        method: 'POST',
        data:{cod: cod, senha: senha},
        dataType: 'json'
    }).done(function(result){
        header("Location: index.html")
    })
});