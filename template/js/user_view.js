$(document).ready(function() {

function loadUserView() {
    $.ajax({
            type: 'GET',
            url: 'http://localhost/CL/Warsztaty_dodatkowe/warsztaty_dodatkowe/Warsztaty_dodatkowe/router.php/user/',
            contentType: 'application/json',
            dataType: 'json',
            success: function(response){
                addContentUser(response);
                
                 //   console.log(response);
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

    function addContentUser(responseFromAjax){
        
        $.each(responseFromAjax, function(key, oUser){
        //Poorawić to co poniżej     
            content = '<tr>';
            content += '<td>';
            content += oUser.id;
            content += '</td>';

            content += '<td>';
            content += oUser.name;
            content += '</td>';

            content += '<td>';
            content += oUser.surname;
            content += '</td>';

            content += '<td>';
            content += oUser.credits;
            content += '</td>';

            content += '<td>';
            content += oUser.address_id;
            content += '</td>';
            content += '</tr>';
            
            console.log(content);
            
            
            
            $('.userTable').append(content);
           // console.log(value);
           trElement = document.createElement("tr");
            tr = $('<table>').append(trElement);
            
//                tdId      = $('<td>', {class: "id"});
//                tdName    = $('<td>', {class: "name"});
//                tdSurname = $('<td>', {class: "surname"});
//                tdCredits = $('<td>', {class: "credits"});
//                tdAddress = $('<td>', {class: "address"});
//                
//                tr.append(tdId); 
//                tr.append(tdName); 
//                tr.append(tdSurname); 
//                tr.append(tdCredits); 
//                tr.append(tdAddress);
//                
//                tdId.innerHTML      = oUser.id;
//                tdName.innerHTML    = oUser.name;
//                tdSurname.innerHTML = oUser.surname;
//                tdCredits.innerHTML = oUser.credits;
//                tdAddress.iinerHTML = oUser.address_id;
                
            
        });
    }
    
    
});