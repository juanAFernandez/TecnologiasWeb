function comprobarNombre(nombre){

  ok=false;

  if (nombre.match(/^[a-zA-ZáéíóúÁÉÍÚÓ]+$/)){
    document.getElementById('ejemplo').innerHTML=" ";
    ok=true;
  }

  if(!ok)
    document.getElementById('ejemplo').innerHTML="Debe introducir correctamente su nombre.";

  if(nombre=="")
    return false;
  if(nombre!="")
    return true;

}



function validacion(){

  nombre=document.getElementById("nombre").value;
  primerApellido=document.getElementById("primerApellido").value;
  segundoApellido=document.getElementById("segundoApellido").value;
  correo=document.getElementById("correo").value;
  telefono=document.getElementById("telefono").value;
  sexoHombre=document.getElementById("sexoHombre").checked;
  sexoMujer=document.getElementById("sexoMujer").checked;
  comentarios=document.getElementById("comentarios").value;




  var mensaje = "Falta por introducir: \n";
  var todo_ok=true;;


  if(!comprobarNombre(nombre)){
    mensaje+="\tNombre \n";
    todo_ok = false;
  }
  if(primerApellido==""){
    mensaje+="\tPrimer Apellido \n";
    todo_ok = false;
  }
  if(segundoApellido==""){
    mensaje+="\tSegundo Apellido \n";
    todo_ok = false;
  }
  if(correo==""){
    mensaje+="\tCorreo \n";
    todo_ok = false;
  }
  if(telefono==""){
    mensaje+="\tTelefono \n";
    todo_ok = false;
  }

  if(sexoHombre==false && sexoMujer==false){
    mensaje+="\tSexo \n";
    todo_ok = false;
  }

  if(comentarios==""){
    mensaje+="\n\tComentarios \n";
    todo_ok = false;
  }



  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true

  if(todo_ok == false){
    alert(mensaje);
  }

  return salida;
}