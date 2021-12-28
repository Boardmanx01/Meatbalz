var button = document.getElementById('button-add-account');
var form = document.getElementById('input-form')
function checkform(form) {
    var inputs = form.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        if(inputs[i].hasAttribute("required")){
            if(inputs[i].value == ""){
                alert("Please fill all required fields");
                return false;
            }
        }
    }
    return true;
}
button.addEventListener('click',function(){
    if(checkform(form)){
        var inputbox = document.getElementById('input-box');
        inputbox.style.visibility = "hidden";
        inputbox.remove();
        var hiddenbox = document.getElementById('input-box2');
        hiddenbox.style.visibility = "visible";

    }
});
var button = document.getElementById('button-add-another-account');
button.addEventListener('click',function(){
    location.href ='addperson.php';
});