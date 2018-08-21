TRunner = function(){
	var self = this;

	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();

		$.post('crunners', {
				"id": datos.id,
				"nombre": datos.nombre,
				"sexo": datos.sexo,
				"correo": datos.correo,
				"telefono": datos.telefono,
				"pass": datos.pass,
				"entidad": datos.entidad,
				"action": "add"
			}, function(data){
				if (data.band == false)
					console.log("No se guardó el registro");

				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};

	this.del = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		$.post('crunners', {
			"id": datos.id,
			"action": "del"
		}, function(data){
			if (datos.fn.after !== undefined)
				datos.fn.after(data);

			if (data.band == 'false'){
				console.log("Ocurrió un error al eliminar");
			}
		}, "json");
	};
};
