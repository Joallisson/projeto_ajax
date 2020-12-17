<!doctype html>
<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <meta name="author" content="Gilvan Oliveira Alves">
        <meta name="reply-to" content="gylloliver26@hotmail.com">
        <meta name="generator" content="Brackets 1.11">
        <title>Requisições Assíncronas</title>
        
    </head>
    
    <body>

        <!-- INICIO Formulário de Cadastro -->  
        <form>
            <label for="txt_nome">Nome: </label>
            <input type="text" id="txt_nome">

            <label for="int_matricula">Matricula: </label>
            <input type="number" id="int_matricula">

            <input type="button" value="Enviar" onclick="postDados();">
        </form>
        <!-- FIM Resposta do Cadastro -->         
        <span id="resposta"></span>
        <br/>
                
        <!-- Formulário de Pesquisa -->         
                
        <!-- Tabela de Registros -->         
        
        <script src="jquery.2.1.3.min.js"></script>
        <script>
            function postDados(){

                let nome = document.getElementById('txt_nome').value
                let matricula = document.getElementById('int_matricula').value
                $.ajax({
                    //Configurações
                    type: 'POST', //Método que está sendo utilizado
                    dataType: 'html', //É o tipo de dado que a página vai retornar
                    url: 'postDados.php', //Indica a página que esta sendo solicitada
                    //Função que vai ser executada assim que a requisição for enviada
                    beforeSend: function (){ //Enquanto a requisição não for finalizada, essa função é executada
                        $("#resposta").html("<img src='load.gif' id='load'>");
                    },
                    data: {nome: nome, matricula: matricula}, //Dados para envio
                    //Função que será executada quando a solicitação for finalizada
                    success: function (msg){
                        $("#resposta").html(msg);
                    }
                })

            }
        </script>    
    </body>
</html>