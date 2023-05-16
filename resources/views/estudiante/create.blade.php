FORMULARIO DE CREACION DE ESTUDIANTE
<form action="{{ url('/estudiante')}}" method="post">
    @csrf

    <label for="nroIdentificacion">Número de Identificación:</label>
    <input type="number" id="nroIdentificacion" name="nroIdentificacion"><br>

    <label for="tipoIdentificacion">Tipo de Identificación:</label>
    <input type="text" id="tipoIdentificacion" name="tipoIdentificacion"><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"><br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email"><br>

    <label for="telefono">Celular:</label>
    <input type="number" id="telefono" name="telefono"><br>

    <label for="semestre">Semestre:</label>
    <input type="number" id="semestre" name="semestre"><br>

    <label for="idCarrera">ID Carrera:</label>
    <input type="number" id="idCarrera" name="idCarrera"><br>


    </label><input type="submit" value="Enviar">

</form>