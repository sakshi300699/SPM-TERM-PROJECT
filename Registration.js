
var form = document.getElementById("regform");
var password = document.getElementById("password");
var cpassword = document.getElementById("cpassword");
console.log(password)





form.addEventListener('submit', e => {
    e.preventDefault();
    var schema=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
    if(password.value.match(schema)){
        console.log(password.value)

    }
    else{
        console.log(password.value)
        alert("The password should be 6 to 12 characters in length. It should contain 1 lowercase and 1 uppercase letter and of the special character !@#$%^%")

    }
    if(password.value===cpassword.value && password.value.match(schema)){
        // alert("Your form has been submitted");
         form.submit();
        console.log(cpassword);
    }
    else{
        alert("The passwords should match")
    }


});
