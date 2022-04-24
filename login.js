let username = document.querySelector('#username');
let password = document.querySelector('#password');
let formLogin = document.querySelector('#formLogin');
let error = document.querySelector('.error');

formLogin.addEventListener('submit',(e) =>{
    e.preventDefault(); 
    error.classList = 'error';
    error.innerHTML = '';
    const dataForm = {
        'username' : username.value,
        'password' : password.value,
        'action' : 'login'
    }
    $.ajax({
        method : 'POST',
        dataType : 'JSON',
        url :  'api/user.php',
        data :  dataForm,
        success : function(data){
            let status = data.status;
            let per = data.data;
            mess(status,per);
        },
        error : function(data){
            console.log(data)
        },
    })
})

function mess(status,message){
    if(status == true){
        if(message[2] == 'no code'){
            window.location.href = `Verification.php?username=${message[1]}`;
        }else{
            console.log(message)
            window.location.href = 'index.php';
        }
    }else if(status == false){
        error.innerHTML = message;
        error.classList = 'error show';
    }
}