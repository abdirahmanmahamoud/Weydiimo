let VerificationForm = document.querySelector('#VerificationForm');
let code = document.querySelector('#code');
let email = document.querySelector('#email');
let suus = document.querySelector('.suus');
let error = document.querySelector('.error');

VerificationForm.addEventListener('submit', (e) =>{
    e.preventDefault(); 
    error.classList = 'error';
    error.innerHTML = '';
    suus.classList = 'suus';
    suus.innerHTML = '';

    if(code.value == '0'){
        window.location.href = 'index.php';
    }else{
        const dataForm = {
            'email' : email.value,
            'code' : code.value,
            'action' : 'code'
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
    }
  
})

function mess(status,message){
    if(status == true){
        suus.innerHTML = message;
        suus.classList = 'suus show'
        setTimeout(function(){
            window.location.href = 'index.php';         
        },3000)
    }else if(status == false){
        error.innerHTML = message;
        error.classList = 'error show';
    }
}