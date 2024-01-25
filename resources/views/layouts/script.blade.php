<!-- <script rel="preload" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script> -->

<!-- Bottom Guided -->
<!-- Bottom Guided -->
<!-- Tabs Script for new bc guided -->
<script>
    const tabs = document.querySelectorAll(".tab-nbcgt");

    function tabify(tab) {
        const tabList = tab.querySelector(".tab__list-nbcgt");

        if (tabList) {
            const tabItems = [...tabList.children];
            const tabContent = tab.querySelector(".tab__content-nbcgt");
            const tabContentItems = [...tabContent.children];
            let tabIndex = 0;

            tabIndex = tabItems.findIndex((item, index) => {
                return [...item.classList].indexOf("is--active") > -1;
            });

            tabIndex > -1 ? (tabIndex = tabIndex) : (tabIndex = 0);

            function setTab(index) {
                tabItems.forEach((x, index) => x.classList.remove("is--active"));
                tabContentItems.forEach((x, index) => x.classList.remove("is--active"));

                tabItems[index].classList.add("is--active");
                tabContentItems[index].classList.add("is--active");
            }

            tabItems.forEach((x, index) =>
                x.addEventListener("click", () => setTab(index))
            );
            setTab(tabIndex);
            tab.querySelectorAll(".tab-nbcgt").forEach((tabContent) => tabify(tabContent));
        }
    }

    tabs.forEach(tabify);
</script>
<!-- Tabs Script for new bc guided End -->
<script src="{{asset('newassets')}}/js/jquery.min.js"></script>
<script src="{{asset('newassets')}}/js/jquery.scrollbar.js"></script>
<script src="{{asset('newassets')}}/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('#service_carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<div class='custom-nav-prev'><i class='bi-arrow-left-circle'></i></div>", "<div class='custom-nav-next'><i class='bi-arrow-right-circle'></i></div>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>
<!-- Slider For blogs -->
<script>
    $(document).ready(function() {
        $('#client-logosnds').owlCarousel({
            loop: true,
            autoplaySpeed: 1000,
            nav: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            },
            navText: ["<img src='http://pixsector.com/cache/a8009c95/av8a49a4f81c3318dc69d.png'/>", "<img src='http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png'/>"]
        });

    });
</script>
<!-- Slider For blogs End -->
<script>
    var counted = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 9000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            counted = 1;
        }

    });
</script>
<script>
    var btn = $('#buttonz');
    btn.addClass('show');
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
</script>
<!-- Side Bar Right -->
<script>
    // Get all menu from document
    document.querySelectorAll('.buttonTrigger').forEach(OpenMenu);

    // Menu Open and Close function
    function OpenMenu(active) {
        if (active.classList.contains('buttonTrigger') === true) {
            active.addEventListener('click', function(e) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
                this.classList.toggle('active');
            });
        }
    };
</script>
<!-- Side Bar Right End -->
<!-- Navbar Scroll BG -->
<script>
    $(document).ready(function() {
        //Fade in delay for the background overlay (control timing here)
        $("#bkgOverlay").delay(1000).fadeIn(100);
        //Fade in delay for the popup (control timing here)
        $("#delayedPopup").delay(1000).fadeIn(100);
        // $("#bkgOverlay").delay(18000).fadeOut(400);
        // $("#delayedPopup").delay(18000).fadeOut(400);
        $("#btnClose").click(function() {
            $("#bkgOverlay").css("display", "none");
            $("#delayedPopup").css("display", "none");
        });
    });
</script>
<script>
    $(document).ready(function() {
        //Fade in delay for the background overlay (control timing here)
        $("#bkgOverlayH").delay(6000).fadeIn(400);
        //Fade in delay for the popup (control timing here)
        $("#delayedPopupH").delay(6000).fadeIn(400);
        // $("#bkgOverlay").delay(18000).fadeOut(400);
        // $("#delayedPopup").delay(18000).fadeOut(400);
        $("#btnCloseH").click(function() {
            $("#bkgOverlayH").css("display", "none");
            $("#delayedPopupH").css("display", "none");
        });
    });
</script>
<script>
    const navbar = document.getElementById('navbar-scroll-bg');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) { // Adjust this value based on when you want the color to change
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
<!-- Navbar Scroll BG End -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('#client-logos').owlCarousel({
            loop: true,
            autoplaySpeed: 1000,
            nav: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            },
            navText: ["<img src='http://pixsector.com/cache/a8009c95/av8a49a4f81c3318dc69d.png'/>", "<img src='http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png'/>"]
        });

    });
</script>
<!-- Slider testimonials  -->
<script type="text/javascript" rel="preload" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Slider testimonials  -->
<script>
    jQuery(document).ready(function($) {
        var $slickElement = $(".slideshow");
        $slickElement.slick({
            autoplay: true,
            dots: false
        })
    });
</script>
<!-- Cursor -->
<script>
    $(document).ready(function() {
        $("#myDiv").hover(function() {
            $(this).css("cursor", "text")
        })
    });
</script>
<!-- Cursor End -->
<script>
    const newYear = document.getElementById("date");
    const updateYear = () => {
        newYear.textContent = (new Date).getFullYear()
    };
    document.addEventListener("DOMContentLoaded", updateYear);
</script>
<!-- Copyright End -->
<!-- button disabled -->
<script>
    $(document).ready(function() {
        function unblock() {
            $("#blocker").css("display", "none")
        }

        function block() {
            $("#blocker").css("display", "block")
        }
        $("body").on("click", "#checkbox", function() {
            if ($(this).prop("checked")) {
                unblock()
            } else {
                block()
            }
        });
        $("#blocker").on("click", function() {
            alert("Please check the agree field.")
        })
    });
</script>
<!-- button disabled End -->
<!-- Compressed Scripts -->
<script src="{{asset('assets')}}/js/slides.min.js" type="text/javascript"></script>
<script rel="preload" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#popUpForm').fadeIn(7000);
        setTimeout(function() {
            $("#popUpForm").fadeOut(1500);
        }, 30000)
    });
    $("#close").click(function() {
        $("#popUpForm").css("display", "none");
    });
</script>
<script>
    $(".togglefaq").click(function(e) {
        e.preventDefault();
        var notthis = $(".active").not(this);
        notthis.find(".icon-minus").addClass("icon-plus").removeClass("icon-minus");
        notthis.toggleClass("active").next(".faqanswer").slideToggle(300);
        $(this).toggleClass("active").next().slideToggle("fast");
        $(this).children("i").toggleClass("icon-plus icon-minus")
    });
</script>
<script>
    var MODAL_OVERLAY_SELECTOR_SELECTOR_MOD = "modal-overlay--showed";
    var MODAL_OPENED_SELECTOR_MOD = "modal--opened";
    var modalLinks = document.querySelectorAll(".js-open-modal");
    var modalOverlay = document.querySelector(".modal-overlay");
    var modal = null;
    var modalClose = null;

    function openModal(modalIdSelector) {
        modal = document.querySelector(modalIdSelector);
        modalClose = modal.querySelector(".modal__close");
        modal.classList.add(MODAL_OPENED_SELECTOR_MOD);
        modalOverlay.classList.add(MODAL_OVERLAY_SELECTOR_SELECTOR_MOD);
        modalClose.addEventListener("click", function(event) {
            event.preventDefault();
            closeModal()
        })
    }

    function closeModal() {
        modalOverlay.classList.remove(MODAL_OVERLAY_SELECTOR_SELECTOR_MOD);
        modal.classList.remove(MODAL_OPENED_SELECTOR_MOD)
    }
    for (var link of modalLinks) {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            var modalId = this.hash || this.dataset.modalId;
            openModal(modalId)
        })
    }
</script>
<!-- model for contact form End -->
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null
            } else {
                content.style.maxHeight = content.scrollHeight + "px"
            }
        })
    }
</script>
<script rel="preload" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<!-- error message script -->
<script>
    $(document).ready(function() {
        $(".lacontactForm").validate({
            rules: {
                phone: {
                    required: true,
                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(".lacontactForm2").validate({
            rules: {
                phone: {
                    required: true,
                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(".lacontactForm3").validate({
            rules: {
                phone: {
                    required: true,
                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<!-- USA 1 -->
<script>
    $(document).ready(function() {
        $(".lacontactFormusa1").validate({
            rules: {
                phone: {
                    required: true,

                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<!-- USA 1 End -->
<!-- USA 2 -->
<script>
    $(document).ready(function() {
        $(".lacontactFormusa2").validate({
            rules: {
                phone: {
                    required: true,

                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<!-- USA 2 End -->
<script>
    $(document).ready(function() {
        $(".lacontactFormf1").validate({
            rules: {
                phone: {
                    required: true,

                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(".lacontactFormf2").validate({
            rules: {
                phone: {
                    required: true,

                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<script>
    $(document).ready(function() {
        $(".lacontactFormf3").validate({
            rules: {
                phone: {
                    required: true,

                    minlength: 11,
                    maxlength: 19
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                phone: {
                    required: "Please enter valid number",

                    minlength: "please enter complete number."
                }
            }
        })
    });
</script>
<!-- end error message script -->

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
<!-- Name Field Validation -->
<script>
    $("#name, .phonez").on("input", function(e) {
        var regexName = /^[a-zA-Z\s]+$/; // Allow alphabets and spaces for the name
        var regexPhone = /^[0-9\s+]+$/; // Allow digits, spaces, and plus sign for the phone number

        var value = $(this).val();

        if ($(this).hasClass("phonez")) {
            if (!regexPhone.test(value)) {
                $(this).val(value.replace(/[^0-9\s+]/g, ''));
            }
        } else {
            if (!regexName.test(value)) {
                $(this).val(value.replace(/[^a-zA-Z\s]/g, ''));
            }
        }
    });
</script>

<!-- Name Field Validation End -->
<script>
    function validateEmail() {
        const emailInput = document.getElementById("email");
        const errorMessage = document.getElementById("error-message");
        const email = emailInput.value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@test.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("mikezenimmerma@gmail.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@yoast.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@upseotop.com")) {
            errorMessage.textContent = "Invalid email."
        } else {
            errorMessage.textContent = ""
        }
    }
</script>
<!-- For Inner Form validate on UAE -->
<script>
    function validateEmailinuaef() {
        const emailInputinuaef = document.getElementById("emailinuaef");
        const errorMessageinuaef = document.getElementById("error-messageinuaef");
        const emailinuaef = emailInputinuaef.value;
        const emailPatterninuaef = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailinuaef === "" || !emailPatterninuaef.test(emailinuaef)) {
            errorMessageinuaef.textContent = "Invalid email.";
            return
        } else if (emailinuaef.includes("@test.com")) {
            errorMessageinuaef.textContent = "Invalid email.";
            return
        } else if (emailinuaef.includes("mikezenimmerma@gmail.com")) {
            errorMessageinuaef.textContent = "Invalid email.";
            return
        } else if (emailinuaef.includes("@yoast.com")) {
            errorMessageinuaef.textContent = "Invalid email.";
            return
        } else if (emailinuaef.includes("@upseotop.com")) {
            errorMessageinuaef.textContent = "Invalid email.";
            return
        } else {
            errorMessageinuaef.textContent = ""
        }
    }
</script>
<!-- For Inner Form validate on UAE -->
<script>
    function validateEmailinuae() {
        const emailInputinuae = document.getElementById("emailinuae");
        const errorMessageinuae = document.getElementById("error-messageinuae");
        const emailinuae = emailInputinuae.value;
        const emailPatterninuae = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailinuae === "" || !emailPatterninuae.test(emailinuae)) {
            errorMessageinuae.textContent = "Invalid email.";
            return
        } else if (emailinuae.includes("@test.com")) {
            errorMessageinuae.textContent = "Invalid email.";
            return
        } else if (emailinuae.includes("mikezenimmerma@gmail.com")) {
            errorMessageinuae.textContent = "Invalid email.";
            return
        } else if (emailinuae.includes("@yoast.com")) {
            errorMessageinuae.textContent = "Invalid email.";
            return
        } else if (emailinuae.includes("@upseotop.com")) {
            errorMessageinuae.textContent = "Invalid email.";
            return
        } else {
            errorMessageinuae.textContent = ""
        }
    }
</script>
<!-- For Inner Form validate on UAE End -->
<!-- For Inner Form validate on USA -->
<script>
    function validateEmailinusa() {
        const emailInputinusa = document.getElementById("emailinusa");
        const errorMessageinusa = document.getElementById("error-messageinusa");
        const emailinusa = emailInputinusa.value;
        const emailPatterninusa = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailinusa === "" || !emailPatterninusa.test(emailinusa)) {
            errorMessageinusa.textContent = "Invalid email.";
            return
        } else if (emailinusa.includes("@test.com")) {
            errorMessageinusa.textContent = "Invalid email.";
            return
        } else if (emailinusa.includes("mikezenimmerma@gmail.com")) {
            errorMessageinusa.textContent = "Invalid email.";
            return
        } else if (emailinusa.includes("@yoast.com")) {
            errorMessageinusa.textContent = "Invalid email.";
            return
        } else if (emailinusa.includes("@upseotop.com")) {
            errorMessageinusa.textContent = "Invalid email.";
            return
        } else {
            errorMessageinusa.textContent = ""
        }
    }
</script>
<!-- For Inner Form validate on USA End -->
<!-- Home page Slider -->
<script rel="preload" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140216/jquery.cycle2.min.js"></script>
<!-- Home page Slider End -->

<!-- Email For Whole Popup  -->
<script>
    function validateEmailwhl() {
        const emailInput = document.getElementById("emailwhl");
        const errorMessage = document.getElementById("error-messagewhl");
        const email = emailInput.value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@test.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("mikezenimmerma@gmail.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@yoast.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@upseotop.com")) {
            errorMessage.textContent = "Invalid email."
        } else {
            errorMessage.textContent = ""
        }
    }
</script>
<!-- Email For Whole Popup End -->
<!-- Email For demo Popup  -->
<script>
    function validateEmailst() {
        const emailInput = document.getElementById("emailst");
        const errorMessage = document.getElementById("error-messagest");
        const email = emailInput.value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@test.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("mikezenimmerma@gmail.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@yoast.com")) {
            errorMessage.textContent = "Invalid email."
        } else if (email.includes("@upseotop.com")) {
            errorMessage.textContent = "Invalid email."
        } else {
            errorMessage.textContent = ""
        }
    }
</script>
<!-- Email For demo Popup End -->