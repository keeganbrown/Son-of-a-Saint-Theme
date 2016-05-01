"use strict";
if(!Date.now)Date.now=function(){return(new Date).getTime()};(function(){var n=["webkit","moz"];for(var e=0;e<n.length&&!window.requestAnimationFrame;++e){var i=n[e];window.requestAnimationFrame=window[i+"RequestAnimationFrame"];window.cancelAnimationFrame=window[i+"CancelAnimationFrame"]||window[i+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var a=0;window.requestAnimationFrame=function(n){var e=Date.now();var i=Math.max(a+16,e);return setTimeout(function(){n(a=i)},i-e)};window.cancelAnimationFrame=clearTimeout}})();

(function (window, $, undefined) {

function init () {
  var $hdr = $('#pushdown-header'),
    $win = $(window);

  function move_headerbar () {
    var _scrolltop = $win.scrollTop();
    if ( _scrolltop > 70 && !$hdr.hasClass('snap') ) {
      $hdr.addClass('snap');
    } else if ( _scrolltop < 70 && $hdr.hasClass('snap') ) {
      $hdr.removeClass('snap');
    }
    setTimeout(move_headerbar, 300)
  }
  move_headerbar();
}
$(init);

$(function() {

  function escapeSlash (str) {
    return str.replace('/','\\/');
  }
  $('body').on('click', 'a[href*="#"]', function(e) {
    var target = $(escapeSlash(this.hash));
    console.log('hey', target);
    if ( target[0] ) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 700);
    }
  });
});

})(window, jQuery);
