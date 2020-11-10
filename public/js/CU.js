function send(){
var name=document.getElementById("_name").value;
var mail=document.getElementById("_mail").value;
var select=document.getElementById("cmfrs").value;
var detail=document.getElementById("tozih").value;
    if((name && mail && detail) == ""){
        alert ("one field is empty")
    }
    else{
        $.ajax({
            method: "POST",
            url: "https://www.yjc.ir",
            data: { _name:name ,_mail:mail ,cmfrs: select ,tozih:detail}
        })
            .done(function(resault) {

                $('.crmf-margin').hide();
                $('#sucess-pm').show();

            });
    }


}