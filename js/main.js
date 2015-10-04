"use strict";
if(!Date.now)Date.now=function(){return(new Date).getTime()};(function(){var n=["webkit","moz"];for(var e=0;e<n.length&&!window.requestAnimationFrame;++e){var i=n[e];window.requestAnimationFrame=window[i+"RequestAnimationFrame"];window.cancelAnimationFrame=window[i+"CancelAnimationFrame"]||window[i+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var a=0;window.requestAnimationFrame=function(n){var e=Date.now();var i=Math.max(a+16,e);return setTimeout(function(){n(a=i)},i-e)};window.cancelAnimationFrame=clearTimeout}})();

(function (window, $, undefined) {

function init () {
	var $hdr = $('#pushdown-header'),
		$win = $(window),
		_mt = ~~(($hdr.css('margin-top')).replace(/[^0-9]*/gi,'')),
		scrolltop = 0;

	function move_headerbar () {
		var _scrolltop = $win.scrollTop();
		if ( _scrolltop < 0 ) _scrolltop = 0;
		if ( _scrolltop !== scrolltop ) {
			if (_mt - _scrolltop >= 0 ) {
				$hdr.css('top', -(_mt - _scrolltop));
			} 
			//console.log( _mt, _scrolltop );
			scrolltop = _scrolltop;
		}
		//requestAnimationFrame(move_headerbar);
	}
	move_headerbar();
}
$(init);

})(window, jQuery);