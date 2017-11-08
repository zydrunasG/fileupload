function removeClass(ac) {


    document.getElementById("li-home").classList.remove("active");

    if(document.getElementById("li-publicfiles")){
        document.getElementById("li-publicfiles").classList.remove('active');
    }
      if(document.getElementById("li-myfiles")){
          document.getElementById("li-myfiles").classList.remove('active');
    }
      if(document.getElementById("li-file")){
        document.getElementById("li-file").classList.remove('active');
    }


    if(document.getElementById("li-profile")){
        document.getElementById("li-profile").classList.remove('active');
    }


    if(document.getElementById("li-login")){
        document.getElementById("li-login").classList.remove('active');
    }
    if( document.getElementById("li-register")){
        document.getElementById("li-register").classList.remove('active');
    }



}