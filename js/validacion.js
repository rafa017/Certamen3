//Validacion formulario inedex.
function validar(){
    var nombre, apellido, correo, contraseña, confirmar_contraseña, telefono;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    contraseña = document.getElementById("contraseña").value;
    confirmar_contraseña = document.getElementById("confirmar_contraseña").value;
    telefono = document.getElementById("telefono").value;

    expresion = /\w+@\w+\.[a-z]/;


    if(nombre == "" || apellido =="" || correo == "" || contraseña == "" || confirmar_contraseña =="" || telefono ==""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>15){
        alert("El nombre solo debe tener 15 caracteres");
        return false;
    }
    else if(apellido.length>15) {
        alert("El apellido no puede superar los 15 caracteres");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false;
    }
    else if(correo.length>30){
        alert("El correo no puede superar los 30 caracteres");
        return false;
    }
    else if(contraseña.length>13){
        alert("La contraseña no puede superar los 13 caracteres");
        return false;
    }
    else if(telefono.length>11){
        alert("El telefono no puede superar los 11 caracteres");
        return false;
    }
    else if(isNaN(telefono)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }

}

//Validacion formulario credito
function validando(){
    var datosTarjeta, fechaExpiracion, datosSeguridad;
    datosTarjeta = document.getElementById("datos__tarjeta").value;
    fechaExpiracion = document.getElementById("fecha__expiracion").value;
    datosSeguridad = document.getElementById("dejitos__seguridad").value;

    if(datosTarjeta === "" || fechaExpiracion ==="" || datosSeguridad === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(isNaN(datosTarjeta)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }
    else if(datosTarjeta.length>20){
        alert("Este campo no puede superar los 20 digitos");
        return false;
    }
    else if(isNaN(fechaExpiracion)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }
    else if(fechaExpiracion.length>4){
        alert("Debes ingresar los cuatro numeros de tu tarjeta");
        return false;
    }
    else if(isNaN(datosSeguridad)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }
    else if(datosSeguridad.length>4){
        alert("Datos incorrectos");
    }
}

//Validacion formulario debito
function validacion(){
    var codigoSeguridad, fechaExpiracion;
    codigoSeguridad = document.getElementById("dato_tarjeta").value;
    fechaExpiracion = document.getElementById("dato_tarjeta").value;

    if(codigoSeguridad === "" || fechaExpiracion === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(isNaN(codigoSeguridad)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }
    else if(codigoSeguridad.length>20){
        alert("Este campo no puede superar los 20 digitos");
        return false;
    }
    else if(isNaN(fechaExpiracion)){
        alert("Los digitos ingresador deben ser numeros");
        return false;
    }
    else if(fechaExpiracion.length>4){
        alert("Debes ingresar los cuatro numeros de tu tarjeta");
        return false;
    }
}

//Validacion formulario medico
function validar(){
    var nombreDueño, apellidoDueño, tipoMascota, razaMascota, sexo;
    nombreDueño = document.getElementById("nombreDueño").value;
    apellidoDueño = document.getElementById("apelldioDueño").value;
    tipoMascota = document.getElementById("tipoMascota").value;
    razaMascota = document.getElementById("razaMascota").value;
    sexo = document.getElementById("sexo").value;

    if(nombreDueño === "" || apellidoDueño ==="" || tipoMascota ==="" || razaMascota ==="" || sexo === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombreDueño.length>20){
        alert("El nombre no puede superar los 20 caracteres");
        return false;
    }
    else if(apellidoDueño.length>20){
        alert("El apellido no puede superar los 20 caracteres");
        return false;
    }
    else if(tipoMascota.length>20){
        alert("Ingresa un tipo de mascota dentro de los parametros");
        return false;
    }
    else if(razaMascota.length>20){
        alert("La raza de tu mascota no es valida");
        return false;
    }
    else if(sexo.length.equals(!masculino) || sexo.length.equals(!femenino)){
        alert("Ingresa un sexo valido (masculini o femenino)");
        return false;
    }
}

//Validacion formulario peluqueria
function valido(){
    var nombredueño, apellidodueño, tipomascota, razamascota, sexo;
    nombredueño = document.getElementById("nombree").value;
    apellidodueño = document.getElementById("apellidoo").value;
    tipomascota = document.getElementById("tipoMascotaa").value;
    razamascota = document.getElementById("razaa").value;
    sexo = document.getElementById("sexoo").value;

    if(nombredueño === "" || apellidodueño === "" || tipomascota === "" || razamascota === "" || sexo ===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombredueño.length>20){
        alert("El nombre no puede superar los 20 caracteres");
        return false;
    }
    else if(apellidodueño.length>20){
        alert("El apellido no puede superar los 20 caracteres");
        return false;
    }
    else if(tipomascota.length>20){
        alert("Ingresa un tipo de mascota dentro de los parametros");
        return false;
    }
    else if(razamascota.length>20){
        alert("La raza de tu mascota no es valida");
        return false;
    }
    else if(sexo.length.equals(!masculino) || sexo.length.equals(!femenino)){
        alert("Ingresa un sexo valido (masculini o femenino)");
        return false;
    }
}


