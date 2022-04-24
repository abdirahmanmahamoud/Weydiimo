let password = document.querySelector('#password');
let password2 = document.querySelector('#password2');
let from  = document.querySelector('#from');
let error  = document.querySelector('.error');
from.addEventListener('submit', (e) =>{
    e.preventDefault();
    $('.error').html('');
    if(password.value.length < 6){
        errors('password maximum character is 6');
    }else if(password.value !== password2.value){
        errors('password is not match');
    }else{
        submit();
    }
})

function submit(){ 
    let form_data = new FormData($('#from')[0]);
    form_data.append('action','register');
    $.ajax({
        method : 'POST',
        dataType : 'JSON',
        url :  'api/user.php',
        data :  form_data,
        processData : false,
        contentType : false,
        success : function(data){
            let status = data.status;
            let per = data.data;
            mess(status,per);
        },
        error : function(data){
            console.log(data)
        },
    })
    
}

function mess(status,message){
    let username = document.querySelector('#username');
    if(status == true){
        window.location.href = `Verification.php?username=${username.value}`;
    }else if(status == false){
        $('.error').html(''); 
        console.log(message)
        errors(message)
    }
}

function errors(message) {
    error.innerHTML = message;
    error.classList = 'error show';
}

