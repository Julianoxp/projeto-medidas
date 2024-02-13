window.addEventListener("DOMContentLoaded",(event)=>{
    const formModel = document.querySelector(".form-area");
    const modelname = document.getElementById('modelcar');
    var KeyPermition = [
        "CapsLock","Backspace","Enter","Escape","NumLock","F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12","Tab","Shift","Control","Meta","Delete","Home","Insert","End","Alt","ArrowUp","ArrowDown","ArrowLeft","ArrowRigth","ContextMenu","ScrollLock","Pause"," "
    ]
    var CharPermition = 'QWERTYUIOPLKJHGFDSAZXCVBNM1234567890qwertyuioplkjhgfdsazxcvbnm';
    modelname.addEventListener("keydown",function(e){
       
        if(KeyPermition.indexOf(e.key)<0)
        {
            if(CharPermition.indexOf(e.key)<0){
                alert('caractere invalido')
                e.preventDefault();
            }
        }
      
    })
    
})