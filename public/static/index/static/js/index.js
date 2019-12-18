//小轮播图
$(function() {
    var $bannersmall = $('.banner_small > ul > li');
    var $bannertab = $('.banner_tab > ul > li');
    var $bannertabspan = $('.banner_tab > ul > li > span');
    var $bannerbtn = $('.banner_btn');
    var $bannerbtn1 = $('.banner_btn_1');
    var $bannerworddiv = $('.banner_word > div');
    let index = 0;
    let time;

    $bannertab.click(function() {
        index = $(this).index();
        fn()
    });
    $bannerbtn1.click(function() {
        var i = $(this).index();
        if (i) {
            index++;
            index %= $bannertab.length;
        }
        fn();
    });
    $bannerbtn.click(function() {
        var i = $(this).index();
        if (i) {
            index--;
            if (index < 0) index = $bannertab.length - 1;
        }
        fn();
    });
    auto()
    $('.banner_small').hover(function() {
        clearInterval(time);
    }, function() {
        auto();
    });

    function auto() {
        time = setInterval(function() {
            index++;
            index %= $bannertab.length;
            fn();
        }, 3000);
    };

    function fn() {
        $bannertabspan.addClass('banner_active');
        $bannertab.eq(index).siblings().find('span').removeClass('banner_active');
        $bannersmall.eq(index).stop(true).fadeIn(1500).siblings().stop(true).fadeOut(1500);
        $bannerworddiv.eq(index).stop(true).fadeIn(1500).siblings().stop(true).fadeOut(1500);
    }
});

//模块淡入
$(document).ready(function() {
    var height = $(window).height();
    var width = $(window).width();
    if (width > 770) {
        $('.more_content').css({ 'opacity': '0' });
        $('.banner_small').css({ 'opacity': '0' });
        $('.charm_three').css({ 'opacity': '0' });
        $('.trip-center').css({ 'opacity': '0' });
        $('.more_content').animate({ 'top': '30' });
        $('.banner_small').animate({ 'top': '30' });
        $('.charm_three').animate({ 'top': '30' });
        $('.trip-center').animate({ 'top': '30' });

        function getS(_ele) {
            var _scollTop = $(_ele).offset().top;
            return _scollTop;
        }

        function f1() {
            $('.more_content').css({ 'opacity': '1', 'transition': 'all 1s', 'position': 'relative' });
            $('.more_content').animate({ 'top': '0' }, 200);
            f1 = function() {}
        }

        function f2() {
            $('.banner_small').css({ 'opacity': '1', 'transition': 'all 1s', 'position': 'relative' });
            $('.banner_small').animate({ 'top': '0' }, 200);
            f2 = function() {}
        }

        function f3() {
            $('.charm_three').css({ 'opacity': '1', 'transition': 'all 1s', 'position': 'relative' });
            $('.charm_three').animate({ 'top': '0' }, 200);
            f3 = function() {}
        }

        function f4() {
            $('.trip-center').css({ 'opacity': '1', 'transition': 'all 1s', 'position': 'relative' });
            $('.trip-center').animate({ 'top': '0' }, 200);
            var path = document.querySelectorAll('path');
            for (var i = 0; i < path.length; i++) {
                var length = path[i].getTotalLength();
                path[i].style.transition = path[i].style.WebkitTransition =
                    'none';
                path[i].style.strokeDasharray = length + ' ' + length;
                path[i].style.strokeDashoffset = length;
                path[i].getBoundingClientRect();
                path[i].style.transition = path[i].style.WebkitTransition =
                    'stroke-dashoffset 2s linear';
                path[i].style.strokeDashoffset = '0';
            }
            f4 = function() {}
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() > getS('.more_content') - height - 100) {
                f1();
            }
            if ($(window).scrollTop() > getS('.banner_small') - height - 100) {
                f2();
            }
            if ($(window).scrollTop() > getS('.charm_three') - height - 100) {
                f3();
            }
            if ($(window).scrollTop() > getS('.trip-center') - height - 100) {
                f4();
            }
        });
    }
});