/**
 * Created by Andrei on 7/8/2016.
 */
$(document).ready(function () {
    $('.js-section-features').waypoint(function (direction) {
        if(direction=="down"){
            $('nav').addClass('sticky');
        }else{
            $('nav').removeClass('sticky');
        }
    },{
        offset:'60px'
    });
    /* Scroll on buttons */
    $('.js-scroll-to-plan').click(function () {
        $('html,body').animate({scrollTop:$(".js-section-plan").offset().top},1000)
    });
    $('.js-scroll-to-start').click(function () {
        $('html,body').animate({scrollTop:$(".js-section-features").offset().top},1000)
    });
    /* A nimation on scroll */
    $('.js-wp-1').waypoint(function (direction) {
        $('.js-wp-1').addClass('animated fadeIn');
    },{offset:'50%'})
    $('.js-wp-2').waypoint(function (direction) {
        $('.js-wp-2').addClass('animated fadeInUp');
    },{offset:'50%'})
    $('.js-wp-3').waypoint(function (direction) {
        $('.js-wp-3').addClass('animated fadeIn');
    },{offset:'50%'})
    $('.js-nav-icon').click(function () {
        var nav=$('.js-main-nav');
        var icon=$('.js-nav-icon i');
        nav.slideToggle(200);
        if(icon.hasClass('ion-navicon-round')){
            icon.addClass('ion-clode-round');
            icon.removeClass('ion-navicon-round');
        }else{
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }
    })
})