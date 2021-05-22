document.getElementById("year").innerHTML = new Date().getFullYear();
function passrangen(){
    try{
        var passlen;
        var retVal="";
        passlen = document.getElementById("passize").value;
        if(passlen<6 || passlen>7168){
            document.getElementById("error").textContent = "Couldn't generate a random password";
            console.log("Couldn't generate a random password");
        }
        else{
                if(document.getElementById("schar").checked){ 
                    scchar="abcdefghijklmnopqrstuvwxyz";
                }
                else{
                    scchar="";
                }
                if(document.getElementById("upchar").checked){
                        upcasec="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                }
                else{
                    upcasec="";
                }
                if(document.getElementById("numbers").checked){
                    numbers="01234567890";
                }
                else{
                    numbers="";
                }
                if(document.getElementById("symbols").checked){
                    symbols="@!#$%^&*()*/~{}:'/.,?<>:{}+-?:[]?.,/.,';'][][=-=-*";
                }
                else{
                    symbols="";
                }
                charset = scchar+upcasec+numbers+symbols;
                if(!charset){
                    document.getElementById("error").textContent = "Please select atleast of any 4 options";
                }
                else{
                    document.getElementById("error").textContent = "";
                    for (var i = 0, n = charset.length; i < passlen; ++i){
                        retVal += charset.charAt(Math.floor(Math.random() * n));
                    }
                    document.getElementById("generatedpassword").value = retVal;
                    if(document.getElementById("autocopy").checked){
                        var RanGenPassword = document.getElementById("generatedpassword");
                        RanGenPassword.select();
                        RanGenPassword.setSelectionRange(0, 99999)
                        document.execCommand("copy");
                    }

                }
        }
    }
    catch(err){
        document.getElementById("error").textContent = "Couldn't generate a random password";
        console.log("Couldn't generate a random password" +err);
    }
}
function passreset(){
    document.getElementById("generatedpassword").value = "";
    document.getElementById("error").textContent = "";
    document.getElementById("schar").checked=true;
    document.getElementById("upchar").checked=true;
    document.getElementById("numbers").checked=true;
    document.getElementById("symbols").checked=true;
    document.getElementById("autocopy").checked=false;
  


}

function CopyTheRanGenPassword(){
        var RanGenPassword = document.getElementById("generatedpassword");
        if(!RanGenPassword.value){
            document.getElementById("error").textContent = "Generate the random password first and then copy";
        }
        else{

            RanGenPassword.select();
            RanGenPassword.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
       
 
}
