  $(function () {$("#nav").tinyNav({header: "MENU"}); $("#nav2").tinyNav({header: "MENU"}); $('.slider').bxSlider({mode: 'fade', controls: false, auto: true, autoStart: true, speed: 750, pause: 5000}); $(".fancybox").fancybox(); $('.btn-up').click(function (event) { $("html, body").animate({ scrollTop: 0 }, "slow"); event.preventDefault();}); $('.hidd-load').removeClass("hidd-load");});