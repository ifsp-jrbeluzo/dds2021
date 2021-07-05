$(function(){

    $(".remover").click(function(){
        id = $(this).val();
        obj_json = {id_tabela: id}
        $.post("remover_cliente.php",obj_json,function(retorno){
            if(retorno=='1'){
                $("#msg").html("Cliente removido com sucesso.");
                cliente = "#cliente" + id;
                console.log(cliente);
                $(cliente).remove();
            }
        });
    });


    $("#inserir").click(function(){
        
        post_json = {
            cpf: $("input[name='cpf']").val(),
            nome: $("input[name='nome']").val(),
            telefone: $("input[name='telefone']").val(),
            email: $("input[name='email']").val(),
            endereco: $("textarea[name='endereco']").val(),
            sexo: $("input[name='sexo']").val()
        }
        
        $.post("recebe_form_cliente.php",post_json,function(resposta){
            console.log(resposta);
            if(resposta=='1'){
                $("#msg").html("Cliente inserido com sucesso");
                $("form[name='cliente']").trigger("reset");
            }
        });

    });


    $(".alterar").click(function(){

        id = $(this).val();
        valor_nome = $("#nome"+id).html();
        input_nome = "<input type='text' name='nome' value='" + valor_nome + "' />";
        $("#nome"+id).html(input_nome);

        valor_telefone = $("#telefone"+id).html();
        input_telefone = "<input type='text' name='telefone' value='" + valor_telefone + "' />";
        $("#telefone"+id).html(input_telefone);

        valor_email = $("#email"+id).html();
        input_email = "<input type='email' name='email' value='" + valor_email + "' />";
        $("#email"+id).html(input_email);

        valor_endereco = $("#endereco"+id).html();
        input_endereco = "<textarea name='endereco'>" + valor_endereco + "</textarea>";
        $("#endereco"+id).html(input_endereco);

        valor_sexo = $("#sexo"+id).html();
        input_sexo = "<input maxlength='1' type='text' name='sexo' value='" + valor_sexo[0] + "' />";
        $("#sexo"+id).html(input_sexo);         
        $(this).hide();
        $(".alterando[value='" + id + "']").show();

    });

    $(".alterando").click(function(){
        id = $(this).val();
        botao = $(this);
        post_json = {
            cpf: id,
            nome: $("input[name='nome']").val(),
            telefone: $("input[name='telefone']").val(),
            email: $("input[name='email']").val(),
            endereco: $("textarea[name='endereco']").val(),
            sexo: $("input[name='sexo']").val()
        }
        $.post("atualizar_cliente.php",post_json,function(resposta){
            console.log(resposta);
            if(resposta=='1'){
                $("#msg").html("Cliente alterado com sucesso");
                nome = $("input[name='nome']").val();
                $("#nome"+id).html(nome);
                email = $("input[name='email']").val();
                $("#email"+id).html(email);
                telefone = $("input[name='telefone']").val();
                $("#telefone"+id).html(telefone);
                endereco = $("textarea[name='endereco']").val();
                $("#endereco"+id).html(endereco);
                sexo = $("input[name='sexo']").val();
                $("#sexo"+id).html(sexo);
                botao.hide();
                $(".alterar[value='" + id + "']").show();
            }
        });
    });


});

