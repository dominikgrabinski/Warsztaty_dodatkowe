$(document).ready(function() {

function loadUserView() {
    $.ajax({
            type: 'GET',
            url: 'http://localhost/CL/Warsztaty_dodatkowe/warsztaty_dodatkowe/Warsztaty_dodatkowe/router.php/user/',
            contentType: 'application/json',
            dataType: 'json',
            success: function(response){
                    console.log(response);
                    console.log('succes');
            },
            error: function(error) {
                alert("Wystąpił błąd");
             //   console.log('Wywala błąd');
                console.log(error);
            }
         });        
}
loadUserView();
});