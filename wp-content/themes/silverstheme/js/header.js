
document.getElementById("hamburger-menu").addEventListener("click", function() {
              $("#menus").animate({
                width: "toggle"
              });
          });

          window.onscroll= function(){
            document.getElementById("menus").style.display= "none"
            
            
          }

          AOS.init({
            duration: 1500,
            
          })
       
