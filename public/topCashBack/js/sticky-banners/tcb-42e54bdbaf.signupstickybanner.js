!function(n,t,o,e){var l={},i={},r=function(){var n=i.$scrollDestinationElement.offset().top+i.$scrollOffsetElement.scrollTop(),t=i.$focusElement;i.$animateContainer.animate({scrollTop:n},800,"swing",function(){o(t).stop().animate({backgroundColor:"#C3E5DD"},200,"swing",function(){o(t).stop().animate({backgroundColor:"#fff"},500,"swing"),o(t).focus()})})},a=function(t){l.navigateUrl=t.navigateUrl,i.$triggerElement=o(t.triggerElement),i.$scrollDestinationElement=o(t.scrollDestinationElement),i.$focusElement=o(t.focusElement),i.$button=o(".scroll-btn"),i.$scrollOffsetElement=o("body"),i.$container=o(".sticky-container"),i.$banner=o(".fixedSignupBanner"),i.$scrollContainer=o(t.scrollContainer?t.scrollContainer:n),i.$animateContainer=o(t.scrollContainer?t.scrollContainer:"html, body"),i.$button.click(function(){l.navigateUrl?location.href=l.navigateUrl:r()}),i.$scrollContainer.scroll(function(n){i.$scrollContainer.scrollTop()>i.$triggerElement.offset().top?(i.$container.fadeIn(),i.$banner.slideDown()):(i.$banner.slideUp(),i.$container.fadeOut())})};e.signUpStickyBanner={init:a}}(window,document,jQuery,window.tcb=window.tcb||{});