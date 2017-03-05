   // Constants 
    const navBtn = document.querySelector('.navigation-title');
    const navItems= document.querySelectorAll('.nav-list li');
    const dropdown = document.querySelectorAll('.dropdown');
    const chevron = document.querySelector('span.glyphicon.glyphicon-chevron-down');
    const navigation = document.querySelector('.nav')



   // Adding .active class on nav li elements on mouse click
    function addActive() {
      for (var i = 0;  i < navItems.length; i++) {
        // remove the active class from all li elements
        navItems[i].classList.remove('active');

        //add active class on this elements 
        this.classList.add('active');
      }
    }

    // Toogle classes on click 
    function toggleClasses() {
      navigation.classList.toggle('active-nav');
      navBtn.classList.toggle('close-btn');
    }

    // Add event listener on all list elements
    for (var i = 0; i < navItems.length; i++) {
        navItems[i].addEventListener("mousedown", addActive);
    }

    // Show hide navigation menu on mobile devices
    // Add event listener on navigation SVG
    navBtn.addEventListener('mousedown', toggleClasses);


   // jQuery when the DOM is loaded 
    $(document).ready(function(){
      // Add click listener  
      $('.has-child').click( function() {
          // Find the child selector and toggleClass
          $(this).find(".glyphicon-chevron-down").toggleClass("down"); 
      });
    });
