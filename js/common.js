var $window = $(window);
var $top = $('#js-topTxt');
var $pageTop = $('#page-top');
var scrollWeight;
var aboutHeight;
var topHeight;

// ハンバーガーメニュー
$('.l-header-hamburger__area').on('click',function(){
    $('.l-header-hamburger__nav').toggleClass('is-heightChange');
    $('.l-header-hamburger__line').toggleClass('is-activeMenu');
});
$('.l-header-hamburger__nav a').on('click',function(){
    $('.l-header-hamburger__nav ul').toggleClass('is-heightChange');
    $('.l-header-hamburger__line').toggleClass('is-activeMenu');
});

// スムーススクロール
$(document).ready(function() {
    $('#page-top a').smoothScroll();
});

// ページの先頭へ戻る
$window.on('scroll',function() {
    if($window.scrollTop() > 300) {
        $pageTop.stop(true).fadeIn(10);
    }
    else {
        $pageTop.stop(true).fadeOut(100);
    }
});