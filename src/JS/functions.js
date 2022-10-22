function agregarDatos(cama, planta, altura, diametro, hojas, afidos){
    cadena = "cama=" + cama +
    "&planta=" + planta +
    "&altura=" + altura +
    "&diametro=" + diametro +
    "&hojas=" + hojas +
    "&afidos=" + afidos  
    ;
    $.ajax({
        type:"POST",
        url:"agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r == 1){
                alertify.success("Agregado con éxito!");
            }else{
                alertify.success("Falló el servidor!");
            }
        }
    })
}