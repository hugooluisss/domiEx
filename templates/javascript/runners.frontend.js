$(document).ready(function(){
  $("#frmRegistro").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtCorreo: {
				"required": true,
        "remote": {
					url: "crunners",
					type: "post",
					data: {
						"action": "validarEmail",
						"movil": true,
						"id": function(){
							return $("#id").val();
						}
					}
        }
			},
			txtTelefono: {
				required: true
			},
      txtPass: {
        required: true
      },
      txtPass2: {
        required: true,
        equalTo: "#txtPass2"
      }
		},
		submitHandler: function(form){
			var obj = new TRunner;
			obj.add({
				id: $("#id").val(),
				nombre: $("#txtNombre").val(),
				telefono: $("#txtTelefono").val(),
				correo: $("#txtCorreo").val(),
				pass: $("#txtPass").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							alert("Muchas gracias... pronto nos comunicaremos contigo para terminar tu registro");
						}else{
							alert("Ocurrió un error al guardar tu información");
						}
					}
				}
			});
    }
  });
});
