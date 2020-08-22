$(document).ready(function(){
    //Verificar se os campos de usuário e senha foram devidamentes preenchidos
   $('#btn_login').click(function(){
       var campo_vazio = false;
        if ($( '#campo_usuario').val() == '' ){
            $('#campo_usuario').css({'border-color': 'red'});
            campo_vazio = true;
        }else{
            $('#campo_usuario').css({'border-color': 'green'});
        }
        if ($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color': 'red'});
            campo_vazio = true;
        }else{
            $('#campo_senha').css({'border-color': 'green'});
        }
        if(campo_vazio) return false;
   });  
});