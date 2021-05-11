//Add custom site JS here

// $(function() {
//     //Owl slider
//     ///https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html
//     var owl = $(".owl-carousel");

//     owl.owlCarousel({
//         loop:true,
//         dots: true,
//         dotsEach: true,
//         responsiveClass:true,
//         margin: 20,
//         responsive:{
//             0:{
//                 items:1,
//             },
//             601:{
//                 items:2,
//             },
//             769:{
//                 items:3,
//             }
//         },
//         itemsTablet: [768,2], //2 items between 768 and 6000
//         itemsMobile: [600,1],
//         nav:true,
//         navText: ["<div class='arrow left'><div class='point'></div></div>", "<div class='arrow right'><div class='point'></div></div>"],
//     });

//     $('.owl-item').trigger('initialized.owl.carousel').show();
// });

$(document).ready(function() {
    function isBreakpoint(alias) {
        return $('.device-' + alias).is(':visible');
    }
});