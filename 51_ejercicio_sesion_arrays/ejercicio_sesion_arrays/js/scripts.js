function confirmarBaja() {
    //mostrar al usuario una ventaa de confirmacion de baja
    if (window.confirm('¿Estás seguro?')) {//en javaScript para ejecutar un metodo se utiliza un punto a diferencia de PHP que es ->
        //enviar el formulario de baja al servidor
        document.getElementById('formularioBaja').submit()//El id que identifica el formulario en el HTML y con submit se encarga de enviar el formulario al servidor.
    }
}

function enviarModificacion(thisboton) {
    //recuperar los datos de la persona que correspondan a la fila seleccionada (This) This es un objeto y es un selector.
    //Como parametro de entrada a la funcion nos llegara el boton sobre el que se ha pulsado el usuario.
    //console.log(thisboton);//Este es un ejemplo de this que sera el parametro de entrada de indicara que boton se ha pulsado y se enviara a la funcion en este caso a esta funcion.
    var nif = thisboton.closest('tr').querySelector('.nif').innerText//closest busca hacia arriba y querySelector hacia abajo (Padre e Hijo)
    var nombre = thisboton.closest('tr').querySelector('.nombre').innerText
    var direccion = thisboton.closest('tr').querySelector('.direccion').value //innerText no funciona en el input porque no tiene eiqueta de cierre y sirve para leer el contenido de la etiqueta.

    //console.log(nif, nombre, direccion) //esta linea probamos si se recojen los datos en la consola.
    console.log(nif, nombre, direccion)

    //enviar los datos al formulario oculto (hidden)
    document.getElementById('nif').value = nif //getElementById busca el ID de la etiqueta dentro del formulario.
    document.getElementById('nombre').value = nombre
    document.getElementById('direccion').value = direccion

    //enviar el formulario de modificacion al servidor
    document.getElementById('formularioModi').submit()

    //CREO QUE SE HACE EN PHP, PERO LO ESTOY AVERIGUANDO 
    //programar que la modificacion del array se aplique
    

    //El siguiente codigo es de pruebas, es bueno hacerlo para comprobar que esta yendo por buen camino.
    //window.alert('Todo ok');
}