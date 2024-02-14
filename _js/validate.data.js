window.addEventListener("DOMContentLoaded",(event)=>{
    
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
  
 })
 function validateForm()
 {
      var CharPermition = 'QWERTYUIOPLKJHGFDSAZXCVBNM1234567890qwertyuioplkjhgfdsazxcvbnm';
      var modelname = document.getElementById('modelcar').value;
      var formSubmit = document.getElementById("submt-form");
      txt = modelname.match("[A-Za-z0-9]");
      if(CharPermition.indexOf(txt)<0)
      {
          formSubmit.reset();
          alert('Não é permitido caracteres especiais!!');
      }
      else
      {
          submitOn();
      }
 }
 function submitOn()
{
  var formSubmit = document.getElementById("submt-form");
  formSubmit.submit();
  formSubmit.reset();
}

  
    /*    history.pushState(null, null, document.URL);
             window.addEventListener('popstate', function () {
              history.pushState(null, null, document.URL);
             });*/ 