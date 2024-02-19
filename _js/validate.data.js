window.addEventListener("DOMContentLoaded",(event)=>{
    
    
  
 })
 function rmvMsg(str)
 {
    var msg = document.getElementById('msg');
    click = str;
    if(!click)
    {
        setTimeout(function(){
                msg.style.display = "none";
            },5000);
    }
    else{
        msg.style.display = "none";
    }
 }
 function validateForm()
 {

    for(i=1 ;i<16 ;i++)
    {
        if(document.getElementById(i).value == '')
        {
            document.getElementById("msg").style.display = "flex";
            document.getElementById("pmsg").textContent = "Preencha todos os campos obrigatórios!"//alert('')
            i = 16;
            rmvMsg(false);
        }
            i++;
    }
    
    var CharPermition = 'QWERTYUIOPLKJHGFDSAZXCVBNM1234567890qwertyuioplkjhgfdsazxcvbnm';
    var modelname = document.getElementById('1').value;
    var formSubmit = document.getElementById("submt-form");
    txt = modelname.match("[^A-Za-z0-9_]");
    if(CharPermition.indexOf(txt)<0 && txt != null)
    {
        formSubmit.reset();
        document.getElementById("msg").style.display = "flex";
        document.getElementById("msg").focus();
        document.getElementById("pmsg").textContent = "Não são permitidos caracteres especiais!!"
        
        rmvMsg(false);
    }
    else
    {
        //submitOn();
    }
}
 function submitOn()
{
  var formSubmit = document.getElementById("submt-form");
  formSubmit.submit();
  formSubmit.reset();
}
function validateData(str)
{
    var data = document.getElementById(str).value;
    if(data == null||data =='')
    {
        return false;
    }
}

/*
const formModel = document.querySelector(".form-area");
     
    function resetForm()
    {
        var form = document.getElementById("submt-form")
        form.reset()
    }
    var KeyPermition = [
        "CapsLock","Backspace","Enter","Escape","NumLock","F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12","Tab","Shift","Control","Meta","Delete","Home","Insert","End","Alt","ArrowUp","ArrowDown","ArrowLeft","ArrowRigth","ContextMenu","ScrollLock","Pause"," "
    ]
    
    modelname.addEventListener("keydown",function(e){
       
        if(KeyPermition.indexOf(e.key)<0)
        {
            if(CharPermition.indexOf(e.key)<0){
                
                //document.getElementById("alertEr").textContent = "*Proibido caracteres especiais"
                //e.preventDefault();
            }
        }
      
    })
*/
  
    /*    history.pushState(null, null, document.URL);
             window.addEventListener('popstate', function () {
              history.pushState(null, null, document.URL);
             });*/ 
/* */