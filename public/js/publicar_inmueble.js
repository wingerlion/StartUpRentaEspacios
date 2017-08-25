$( document ).ready(function() {

        var baseUrl = "{{ url('') }}";

        console.log( "ready!" );
        // obtener tipos de inmueble
        $.ajax({
              url: baseUrl + "/getTipoInmuebles",
              async: false,
              type: 'GET',
              dataType: 'json',
              contentType: "application/json; charset=utf-8",
              success: function (data) {
                  console.log(data);
                  // recibio data
                  if(data!=null){           
                      $('#inmueble-list').empty();
                      $('#inmueble-list').append('<option value="">--Seleccione--</option>');
                      // agregar al select list
                      $.each(data, function(key, value){
                          console.log("holi: " + key);           
                          $('#inmueble-list').append("<option value='"  +  value['IdTipoInmueble'] + "'>" +  value['Descripcion'] + "</option>");
                      });         
                  }
              },
              error: function () {
                  console.log("Ocurrió un error");
                  return false;
              }
        });

        // obtener Departamentos
        $.ajax({
              url: baseUrl + "/getDepartamentos",
              async: false,
              type: 'GET',
              dataType: 'json',
              contentType: "application/json; charset=utf-8",
              success: function (data) {
                  console.log(data);
                  // recibio data                 
                  if(data!=null){           
                      $('#depa-list').empty();
                      $('#depa-list').append('<option value="">--Seleccione--</option>');
                      // agregar al select list
                      $.each(data, function(key, value){
                          console.log("holi: " + key);           
                          $('#depa-list').append("<option value='"  +  value['IdDepartamento'] + "'>" +  value['Descripcion'] + "</option>");
                      });         
                  }
                  
              },
              error: function () {
                  console.log("Ocurrió un error");
                  return false;
              }
        });

        // obtener las Ciudades del Departamento seleccionado
        $('#depa-list').change(function(){
                var idDep = $('#depa-list').val();
                console.log('idDep: '+idDep);
                
                $.ajax({        
                    url: baseUrl + "/getCiudades/" + idDep,
                    async: false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        console.log("ciudades: ");
                        console.log(data);

                        if(data!=null){ 
                            // recibio data                            
                                     
                            $('#ciudad-list').empty();
                            $('#ciudad-list').append('<option value="">--Seleccione--</option>');
                            // agregar al select list
                            $.each(data, function(key, value){          
                                $('#ciudad-list').append("<option value='"  +  value['IdCiudad'] + "'>" +  value['Descripcion'] + "</option>");
                            });         
                                                             
                        }                       
                    },
                    error: function (e) {
                        console.log('Ocurrio un error');
                      //console.log(e.responseText);
                    },
                });
        });
        
        // obtener las Distritos de la Ciudad seleccionada
        $('#ciudad-list').change(function(){
                var idCiudad = $('#ciudad-list').val();
                console.log('idCiudad: '+idCiudad);
                
                $.ajax({        
                    url: baseUrl + "/getDistritos/" + idCiudad,
                    async: false,
                    type: 'GET',
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        console.log("distrito: ");
                        console.log(data);
                                     
                        if(data!=null){           
                            $('#distrito-list').empty();
                            $('#distrito-list').append('<option value="">--Seleccione--</option>');
                            // agregar al select list
                            $.each(data, function(key, value){
                                console.log("holi: " + key);           
                                $('#distrito-list').append("<option value='"  +  value['IdDistrito'] + "'>" +  value['Descripcion'] + "</option>");
                            });         
                        }                                 
                                               
                    },
                    error: function (e) {
                        console.log('Ocurrio un error');
                      //console.log(e.responseText);
                    },
                });
        });


        
});