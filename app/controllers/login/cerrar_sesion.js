// Agrega un escuchador de cambios de autenticación
firebase.auth().onAuthStateChanged(function(user) {
     if (!user) {
        // Si el usuario ya no está autenticado, redirige a la página deseada
        location.href = "login/index.html";
     }
});

function cerrarSesion(){

  var r = confirm("¿Estas seguro que quieres cerrar sesión?");

  if (r == true) {
          firebase.auth().signOut().then(function() {
           // Sign-out successful.
            }).catch(function(error) {
            // An error happened.
            });
  } else {


  }

}