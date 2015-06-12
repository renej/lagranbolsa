<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registro de Empresa</title>
</head>
<body>
<form action="#" method="post" id="addEmpresa">
    <label for="nombreEmpresa">Nombre de la Empresa</label><br/>
    <input id="nombreEmpresa" type="text" placeholder="Nombre de la Empresa"/><br/>
    <label for="nombreUsuario">Nombre de Usuario</label><br/>
    <input id="nombreUsuario" type="text" placeholder="Nombre de Usuario"/><br/>
    <label for="password">Password</label><br/>
    <input id="password" type="password" name="password" placeholder="Password"/><br/>
    <label for="passwordConfirm">Confirmar Password</label><br/>
    <input id="passwordConfirm" type="password" name="passwordConfirm" placeholder="Confirmar Password"/><br/>
    <div id="noMatchPassword"></div>
    <label for="email">Email</label><br/>
    <input id="email" type="email" placeholder="Email"/><br/>
    <label for="nombreContacto">Nombre de Contacto</label><br/>
    <input id="nombreContacto" type="text" placeholder="Nombre de Contacto"/><br/>
    <label for="tipoUsuario">Tipo Usuario</label><br/>
    <select name="tipoUsuario" id="tipoUsuario">
        <option value="1" selected>Empresa</option>
        <option value="2">Candidato</option>
    </select><br/>
    <label for="nombreEstado">Nombre de Estado</label><br/>
    <select name="nombreEstado" id="nombreEstado">
        <option value="1">Nuevo León</option>
    </select><br/>
	<input type="hidden" name="accion" value="insert" />
    <input type="submit" id="#btnGuardar" value="Guardar"/>
</form>

    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/application.js"></script>
	<script src="js/messages_es.js"></script>
</body>
</html>