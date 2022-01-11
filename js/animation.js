//MENU RESPONSIVE
	    $('.icon').click(function() {
	        $('span').toggleClass("cancel")
	        
	    });


	    //BOUTON REMONTER
	    const toTop=document.querySelector(".to-top");

    	window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {
        toTop.classList.add("active");
      }else{
        toTop.classList.remove("active");
      }

    })