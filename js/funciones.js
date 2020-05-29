function validarFormVacio(formulario){
		datos=$('#' + formulario).serialize();
		d=datos.split('&');
		console.info(d);
		vacios=0;
		for(i=0;i< d.length;i++){
				controles=d[i].split("=");
				if(controles[1]=="A" || controles[1]==""){
					vacios++;
				}
		}
		return vacios;
	}