function changeView(){

    var signInBox = document.getElementById("signInBox");
    var signUpBox = document.getElementById("signUpBox");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

function registerNow(){

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email2 = document.getElementById("email2");
    var mobile = document.getElementById("mobile");
    var pw1 = document.getElementById("pw1");
    var pw2 = document.getElementById("pw2");

    var form = new FormData;

    form.append("f",fname.value);
    form.append("l",lname.value);
    form.append("e2",email2.value);
    form.append("m",mobile.value);
    form.append("pw1",pw1.value);
    form.append("pw2",pw2.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.status == 200 && request.readyState == 4){
            var response = request.responseText;
            alert(response);
        }
    }

    request.open("POST","signUpProcess.php",true);
    request.send(form);
}

function backToSignIn(){

    window.location.href = "signIn.php"; 

    
}

