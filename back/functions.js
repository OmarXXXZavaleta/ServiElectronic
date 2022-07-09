function fntDelPersona(id){
    swal({
        title: "Cargando",
        // text: "Realmente quiere eliminar el registro?",
        
         icon: "success",
        // buttons: true,
        // dangerMode: true,

        timer : 5000,
        // return : confirm
        
      
    })
      .then((willDelete) => {
        if (willDelete) {
        //   swal("Eliminando registro", {
        //     icon: "success",

            
        //   });
        } else {
          //swal("Se ha cancelado la accions");
        }
      });

}

function fntSucces(id){
    swal({
        icon: "success",
      });

}


