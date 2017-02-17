//Contar cantidad de numeros en la cedulas
var maxLength = 13;
$('#Cedula').keyup(function() {
  var length = jQuery.trim($(this).val().length);
  var length = maxLength-length;
  if (length == 0) {
  	//$('#CNU-Form').trigger("reset");
  	verificar_persona()
  }

  console.log(length);
  
});



//Consultar Personas 

function verificar_persona(){

$("document").ready(function(){

  var cedula = $('#Cedula').val();
  $("#Cedula").addClass("loading");

  //console.log(cedula);
   $.ajax({
      type: "POST",
      dataType: "json",
      url: "/api/Consultas/Personas",
      data: {cedula:cedula},
      success: function(data) {

      	if(typeof(data.CrearPersona) != "undefined") 
      	{
          $('#CrearPersona').val(data.CrearPersona)
          $('#Sexo').prop('selectedIndex',0);
          $('#Provincia_id').prop('selectedIndex',0);
        }

      	$('#Nombre').val(data.Nombre)
        $('#Apellidos').val(data.Apellidos)
        $('#Telefono').val(data.Telefono)
        $('#Fecha_de_Nacimiento').val(data.FechaNacimiento)
        $('#Direccion').val(data.Direccion)
        $('#Sexo').find('option[value="' + data.Sexo + '"]').attr("selected", "selected")
        $('#Provincia_id').find('option[value="' + data.Provincia_id + '"]').attr("selected", "selected")
      	// $('#Cedula').val()
      	// $('#Cedula').val()
      	// $('#Cedula').val()

      	$("#Cedula").removeClass("loading");
          
      }
    });
});

}