const gosignup =document.getElementById('gosignup'),
      form  =document.querySelector('.form'),
      h4    =document.querySelector('.h4'),
      h1    =document.querySelector('.h1'),
      gologin =document.querySelector('.gologin'),
      register =document.querySelector('.register'),
      strock=document.querySelector('.strock'),
      content = document.getElementById('content');
     


      gosignup.addEventListener('click',()=>{
        form.classList.toggle('display');
        gosignup.classList.add('display');
        gologin.classList.add('button');
        register.classList.remove('display');
        strock.classList.add('back-end');
        strock.classList.remove('back-end-remove');
        h4.innerHTML="keep connected please";
        h1.innerHTML="Hello, Friend!";
        content.style.border='25px';
      });
      gologin.addEventListener('click',()=>{
        form.classList.remove('display');
        gosignup.classList.remove('display');
        gologin.classList.remove('button');
        strock.classList.add('back-end-remove');
        strock.classList.remove('back-end');
        register.classList.add('display');
        h4.innerHTML="New here?";
        h1.innerHTML="Welcome Back in NewCoins";
      });
      