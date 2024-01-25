<script src="{{asset('newassets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script>
		 document.addEventListener('DOMContentLoaded', function () {
    new SimpleBar(document.getElementById('myScrollableElement'));
  });
		$(document).ready(function(){
			
			$('#service_carousel').owlCarousel({
				loop:true,
				dots:false,
				nav:true,
				navText: ["<div class='custom-nav-prev'><i class='bi-arrow-left-circle'></i></div>", "<div class='custom-nav-next'><i class='bi-arrow-right-circle'></i></div>"],
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					1000:{
						items:5,
						nav:true,
						loop:false
					}
				}
			});
		});
		const closeBtn = document.getElementById('disclaimer_close');
		const disclaimerBox = document.getElementById('disclaimer_box')
		
		closeBtn.addEventListener('click', function(){
			disclaimerBox.style.display = 'none'
		});
		document.addEventListener('click',function(e){
		  // Hamburger menu
		  if(e.target.classList.contains('hamburger-toggle')){
			e.target.children[0].classList.toggle('active');
		  }
		}) 
	</script>
<!-- <script rel="preload" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script> -->

<script>
    let cookieModal = document.querySelector(".cookie-consent-modal")
    let cancelCookieBtn = document.querySelector(".btnhh.cancel")
    let acceptCookieBtn = document.querySelector(".btnhh.accept")
    cancelCookieBtn.addEventListener("click", function() {
        cookieModal.classList.remove("active")
    })
    acceptCookieBtn.addEventListener("click", function() {
        cookieModal.classList.remove("active")
        localStorage.setItem("cookieAccepted", "yes")
    })
    setTimeout(function() {
        let cookieAccepted = localStorage.getItem("cookieAccepted")
        if (cookieAccepted != "yes") {
            cookieModal.classList.add("active")
        }
    }, 2000)
    // set cookie according to you
    var cookieName = "Dynamics Stream";
    var cookieValue = "DSSS";
    var cookieExpireDays = 30;
    // when users click accept button
    let acceptCookie = document.getElementById("acceptCookie");
    acceptCookie.onclick = function() {
        createCookie(cookieName, cookieValue, cookieExpireDays);
    }
    // function to set cookie in web browser
    let createCookie = function(cookieName, cookieValue, cookieExpireDays) {
        let currentDate = new Date();
        currentDate.setTime(currentDate.getTime() + (cookieExpireDays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + currentDate.toGMTString();
        document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
        if (document.cookie) {
            document.getElementById("cookiePopup").style.display = "none";
        } else {
            alert("Unable to set cookie. Please allow all cookies site from cookie setting of your browser");
        }
    }
    // get cookie from the web browser
    let getCookie = function(cookieName) {
        let name = cookieName + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>

<!-- Navbar script -->
<script>
    const menu = document.querySelector(".menu");
    const menuInner = menu.querySelector(".menu__inner");
    const menuArrow = menu.querySelector(".menu__arrow");
    const menuTitle = menu.querySelector(".menu__title");
    const burger = document.querySelector(".burger");
    const overlay = document.querySelector(".overlayds");

    // Navbar Menu Toggle Function
    function toggleMenu() {
        menu.classList.toggle("is-active");
        overlay.classList.toggle("is-active");
    }

    // Show Mobile Submenu Function
    function showSubMenu(children) {
        subMenu = children.querySelector(".submenu");
        subMenu.classList.add("is-active");
        subMenu.style.animation = "slideLeft 0.35s ease forwards";
        const menuTitle = children.querySelector("i").parentNode.childNodes[0]
            .textContent;
        menu.querySelector(".menu__title").textContent = menuTitle;
        menu.querySelector(".menu__header").classList.add("is-active");
    }

    // Hide Mobile Submenu Function
    function hideSubMenu() {
        subMenu.style.animation = "slideRight 0.35s ease forwards";
        setTimeout(() => {
            subMenu.classList.remove("is-active");
        }, 300);

        menu.querySelector(".menu__title").textContent = "";
        menu.querySelector(".menu__header").classList.remove("is-active");
    }

    // Toggle Mobile Submenu Function
    function toggleSubMenu(e) {
        if (!menu.classList.contains("is-active")) {
            return;
        }
        if (e.target.closest(".menu__dropdown")) {
            const children = e.target.closest(".menu__dropdown");
            showSubMenu(children);
        }
    }

    // Fixed Navbar Menu on Window Resize
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 768) {
            if (menu.classList.contains("is-active")) {
                toggleMenu();
            }
        }
    });
    // Initialize All Event Listeners
    burger.addEventListener("click", toggleMenu);
    overlay.addEventListener("click", toggleMenu);
    menuArrow.addEventListener("click", hideSubMenu);
    menuTitle.addEventListener("click", hideSubMenu);
    menuInner.addEventListener("click", toggleSubMenu);
</script>
<!-- Navbar script End -->