(function ($) {

    $(window).load(function () {
        $("#pre-loader").delay(500).fadeOut();
        $(".loader-wrapper").delay(1000).fadeOut("slow");

    });

    $(document).ready(function () {

        $(".toggle-button").click(function () {
            $(this).parent().toggleClass("menu-collapsed");
        });

        /*--- adding dropdown class to menu -----*/
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#menuid li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle");
        $('nav li.dropdown > a').append('<span class="caret"></span>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');

        /*-- Mobile menu --*/
        if ($('#navbar-collapse-2').length) {
            $('#navbar-collapse-2 .navigation li.dropdown').append(function () {
                return '<i class="bi bi-caret-down-fill" aria-hd="true"></i>';
            });
            $('#navbar-collapse-2 .navigation li.dropdown .bi').on('click', function () {
                $(this).parent('li').children('ul').slideToggle();
            });
        }

        /*-- navbar toggle */
        var obtn = $('.navbar-toggler');
        obtn.on('click', function () {
            $('.offcanvas-header .btn-close').focus();
        });

        /*-- tooltip --*/
        $('[data-toggle="tooltip"]').tooltip();

        /*-- Button Up --*/
        var btnUp = $('<div/>', { 'class': 'btntoTop' });
        btnUp.appendTo('body');
        $(document).on('click', '.btntoTop', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 700);
        });

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200)
                $('.btntoTop').addClass('active');
            else
                $('.btntoTop').removeClass('active');
        });


        /*-- Reload page when width is between 320 and 768px and only from desktop */
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        $(window).on('resize', function () {
            var win = $(this); //this = window
            if (win.width() > 320 && win.width() < 991 && isMobile == false && !$("body").hasClass("elementor-editor-active")) {
                location.reload();
            }
        });
    });

})(this.jQuery);

// dd

document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.custom-dropdown');

    // Check if the dropdown exists before continuing
    if (dropdown) {
        const dropdownButton = dropdown.querySelector('.dropdown-button');
        const dropdownList = dropdown.querySelector('.dropdown-list');

        // Check if dropdownButton and dropdownList exist
        if (dropdownButton && dropdownList) {
            // Toggle the dropdown visibility
            dropdownButton.addEventListener('click', function() {
                dropdown.classList.toggle('active');
            });

            // Handle selection of dropdown item
            dropdownList.querySelectorAll('li').forEach(function(item) {
                item.addEventListener('click', function() {
                    const selectedValue = this.getAttribute('data-value');
                    dropdownButton.textContent = this.textContent;
                    dropdown.classList.remove('active');

                    // Redirect to the selected category product page
                    if (selectedValue) {
                        const baseUrl = dropdown.getAttribute('data-base-url'); // Get base URL from data attribute
                        window.location.href = baseUrl + selectedValue;
                    }
                });
            });

            // Close dropdown if clicked outside
            window.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('active');
                }
            });
        }
    }
});


// font
    document.addEventListener('DOMContentLoaded', function() {
        // Get the heading element
        var headingElement = document.getElementById('banner-heading');
        
        // Ensure the element exists before proceeding
        if (headingElement) {
            // Get the full text of the heading
            var fullText = headingElement.innerHTML.trim();

            // Split the text into words
            var words = fullText.split(' ');

            // Get the last word
            var lastWord = words.pop();

            // Join the remaining words
            var mainText = words.join(' ');

            // Update the heading with the main text and the styled last word
            headingElement.innerHTML = mainText + ' <span style="color: #ebb800; text-transform:none; font-family: \'Pacifico\', cursive;">' + lastWord + '</span>';
        }
    });
    // offer font
    document.addEventListener('DOMContentLoaded', function() {
        // Get the heading element
        var headingElement = document.getElementById('offer-heading');
        
        // Ensure the element exists before proceeding
        if (headingElement) {
            // Get the full text of the heading
            var fullText = headingElement.innerHTML.trim();

            // Split the text into words
            var words = fullText.split(' ');

            // Get the last word
            var lastWord = words.pop();

            // Join the remaining words
            var mainText = words.join(' ');

            // Update the heading with the main text and the styled last word
            headingElement.innerHTML = mainText + ' <span style="color: #f1e5d9; font-size: 26px;">' + lastWord + '</span>';
        }
    });


// product section
jQuery('document').ready(function(){
  var owl = jQuery('.product-box .owl-carousel');
    owl.owlCarousel({
    margin:30,
    nav: false,
    autoplay :true,
    lazyLoad: true,
    autoplayTimeout: 9000,
    loop: true,
    dots:false,
    navText : ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});