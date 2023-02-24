const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");
// const ws = new WebSocket('ws://localhost:8080/chat');
form.onsubmit = (e)=>{
    e.preventDefault();  
}

continueBtn.onclick = () =>{
    // Hola let's start with Ajax lads
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.respone;
                console.log(data);
            }
        }
    }
    xhr.send();
}