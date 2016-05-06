$(document).ready(function(){
    $("#form-excel").submit(function(e){
       e.preventDefault();
       $.subirArchivo(); 
    });
});

$.subirArchivo =  function(){
    var data = new FormData($("#form-excel")[0]);
    $.ajax({
        url:"./controlador/SubirArchivo.php",
        type:'POST',
        data:data,
        cache:false,
        contentType: false,
        processData: false,
        error:function(error){
            console.log(error);
        },
        success:function(resp){
            console.log(resp);
        }
    })
}

