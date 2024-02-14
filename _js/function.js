window.addEventListener("DOMContentLoaded",(event)=>{
    menustatus = false;
    const btnmenu = document.querySelector('.btn-menu');
    const contentmenubar = document.getElementById('menu-mobile');
    let statusmenu = false;
  
    btnmenu.addEventListener('click',function() {
      if(!statusmenu)
      {
        contentmenubar.style.display = "flex";
        statusmenu = true;
      }
      else
      {contentmenubar.style.display = "none";statusmenu = false;}

    })
    contentmenubar.addEventListener("click",function(){
        this.style.display = "none";
        statusmenu = false;
    })
    window.addEventListener("resize",(event)=>{
      if(this.innerWidth > 945)
      {
        contentmenubar.style.display = "none";
        statusmenu = false;
      }
    })
    
    const btn = document.querySelector('.form-search');
     btn.addEventListener("submit",(event)=>{
        
        if(document.querySelector('.input-search').value == '')
        {
          event.preventDefault();
          alert("Preencha o campo de pesquisa para começar!!")
        }
     })
     const btns = document.querySelector('#btns');
     btns.addEventListener("click",(event)=>{
        
        if(document.querySelector('.input-search').value == '')
        {
          event.preventDefault();
          alert("Preencha o campo de pesquisa para começar!!")
        }
     })

})

