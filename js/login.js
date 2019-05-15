var us;
function user(e){
    var user=e.target.options[e.target.selectedIndex].value;
    console.log(user);
    us=user;
}

window.addEventListener('load', function() {

    $('#iniciar').on('click', function() {
        if(us==""){
            alert("Selecciona el tipo de usuario con el que quieres ingresar");
        }else{
            var user,password;
            user = document.getElementById('usuario').value;
            password = document.getElementById('password').value;
            var datos={
                "table":us,
                "usuario":user,
                "password":password
            }

            console.log(datos);
            $.ajax({
                type:'POST',
                url:"http://localhost/Conalep_OE/consultas/login.php",
                dataType: "JSON",
                data:datos,
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    console.log("enviado",response);
                }
            });
        }
    });
});

