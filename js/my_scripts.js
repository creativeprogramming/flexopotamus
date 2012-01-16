// Custom compressed scripts go in here.






// End Custom scripts

// Toggle for nav menu
$('.menu-button').click(function() {
	$('#access').slideToggle('fast', function() {});
	$('#searchform').slideToggle('fast', function() {});			
});

// Toggle click for sub-munes on touch screens
$('.menu-item').click(function() {
	$(this).find('.sub-menu').slideToggle('fast', function() {});
});

/*global jQuery */
/*! 
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/

(function( $ ){

  $.fn.fitVids = function() {
    var div = document.createElement('div'),
        ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];
        
  	div.className = 'fit-vids-style';
    div.innerHTML = '&shy;<style>         \
      .fluid-width-video-wrapper {        \
         width: 100%;                     \
         position: relative;              \
         padding: 0;                      \
      }                                   \
                                          \
      .fluid-width-video-wrapper iframe,  \
      .fluid-width-video-wrapper object,  \
      .fluid-width-video-wrapper embed {  \
         position: absolute;              \
         top: 0;                          \
         left: 0;                         \
         width: 100%;                     \
         height: 100%;                    \
      }                                   \
    </style>';
                      
    ref.parentNode.insertBefore(div,ref);
  
    return this.each(function(){
      var selectors = [
        "iframe[src^='http://player.vimeo.com']", 
        "iframe[src^='http://www.youtube.com']", 
        "iframe[src^='http://www.kickstarter.com']", 
        "object", 
        "embed"
      ];

      var $allVideos = $(this).find(selectors.join(','));
      
      $allVideos.each(function(){
        var $this = $(this), 
            height = this.tagName == 'OBJECT' ? $this.attr('height') : $this.height(),
            aspectRatio = height / $this.width();
        $this.wrap('<div class="fluid-width-video-wrapper" />').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  
  }
})( jQuery );


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
    var doc = w.document;

    if( !doc.querySelector ){ return; }

    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ", maximum-scale=1.0",
        enabledZoom = initialContent + ", maximum-scale=10.0",
        enabled = true,
        orientation = w.orientation,
        rotation = 0;

    if( !meta ){ return; }

    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true;
    }

    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false;
    }

    function checkTilt( e ){
        orientation = Math.abs( w.orientation );
        rotation = Math.abs( e.gamma );

        if( rotation > 8 && orientation === 0 ){
            if( enabled ){
                disableZoom();
            }   
        }
        else {
            if( !enabled ){
                restoreZoom();
            }
        }
    }

    w.addEventListener( "orientationchange", restoreZoom, false );
    w.addEventListener( "deviceorientation", checkTilt, false );

})( this );