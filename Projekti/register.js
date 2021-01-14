const email=document.getElementById('register-email');
const Password=document.getElementById('register-password');
const Password2=document.getElementById('confirm-password');
const form=document.getElementById('register-form');
const errorElement=document.getElementById('register-error');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    checkInputs();
})


function checkInputs(){
    window.localStorage.setItem("emailValue",email.value)
    window.localStorage.setItem("passwordValue",Password.value)
    window.localStorage.setItem("password2Value",Password2.value)

    if(Password.value !== Password2.value){
        errorElement.innerHTML="Password dont match"
    }else{
        errorElement.innerHTML=null
        window.location.replace("HomePage.html")
    }
}