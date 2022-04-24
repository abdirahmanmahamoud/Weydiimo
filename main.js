let body = document.querySelector('.body');
const suaal = async  () =>{
    const res = await fetch('api/jawaab.php');
    const data = await res.json();
    let html =  `
    <div class="title">${data.data[0].suaal}</div>
    <div class="row">
        <div class="suaal-row">
            <div class="xaraf">A</div>
            <div class="suaal">${data.data[0].a}</div>
        </div>
        <div class="suaal-row">
            <div class="xaraf">B</div>
            <div class="suaal">${data.data[0].b}</div>
        </div>
    </div>
    <div class="row">
        <div class="suaal-row">
            <div class="xaraf">C</div>
            <div class="suaal">${data.data[0].c}</div>
        </div>
        <div class="suaal-row">
            <div class="xaraf">D</div>
            <div class="suaal">${data.data[0].d}</div>
        </div>
        </div>
        <div class='d-none'>${data.data[0].jawaab}</div>
    `;
    body.innerHTML = html;
};
suaal()

body.addEventListener('click',(e) =>{
    if(e.target.classList == 'suaal-row'){
        e.target.classList = 'suaal-row sax';
        let click = e.target.children[1].innerText;
        let d_none = document.querySelector('.d-none').innerText;
        setTimeout(function(){
            if(click === d_none){
                e.target.classList = 'suaal-row action';
                setTimeout(function(){
                    saxSuaal();
                },2000)
            }else{
                e.target.classList = 'suaal-row dijar';
                let sax = document.querySelectorAll('.suaal-row');
                sax.forEach(element => {
                    let saxJawaab = element.querySelector('.suaal');
                    if(saxJawaab.innerText === d_none){
                        saxJawaab.parentElement.classList = 'suaal-row action';

                    }
                 });
            }
         },1000)
    }
})
function saxSuaal(){
    let username = document.querySelector('.name').innerText;
    let jbw = document.querySelector('.jbw spam');
    let send = {
        'username' : username,
        'action' : 'jawaab'
    }
    $.ajax({
        method : 'POST',
        dataType : 'JSON',
        url :  'api/user.php',
        data :  send,
        success : function(data){
            let status = data.status;
            let per = data.data;
            if(per == 'ok'){
                suaal();
            }
        },
        error : function(data){
            console.log(data)
        },
    })
}