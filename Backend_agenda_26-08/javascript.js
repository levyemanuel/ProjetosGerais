$(function(){
    // busca sem refresh
    $("$nomeFunc").keyup(function(){

        var pesquisaNome = $(this).val();

        //verifica
        if(pesquisaNome != ""){
            var dadosFunc = {
                  nomeFunc : pesquisaNome 
            }
       
        $.post(busca.php, dadosFunc, function(retorna){
            //mostra resultados dentro da tabela
            $(".resultadoFunc").html(retorna);
        });
    
    }else{
        $(".resultadoFunc").html("");
    }

    });
});