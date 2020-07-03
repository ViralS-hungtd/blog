(function ($) {
  "use strict";
  
  let App = {
    init: function() {
      this.searchbar();
      this.scrollOut();
      this.scrollNumber();
    },
    searchbar: function() {
      $('.cyber-header__search-btn').click(function(e) {
        e.preventDefault();
        $('.cyber-header__search-input').addClass('d-block');
      })

      $(document).click(function(e) {
        if($(e.target).parent('.cyber-header__form').length === 0 && $(e.target).parent('.cyber-header__search-btn').length === 0) {
          $('.cyber-header__search-input').removeClass('d-block');
        }
      })
    },
    scrollOut: function() {
      ScrollOut({
        once: true
      });
    },
    scrollNumber: function() {
      if($(".cyber-number").length > 0) {
        $(window).scroll(testScroll);
      }
      var viewed = false;

      function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
      }

      function testScroll() {
        if (isScrolledIntoView($(".cyber-number")) && !viewed) {
          viewed = true;
          $('.value').each(function () {
            $(this).prop('Counter',0).animate({
              Counter: $(this).text()
            }, {
              duration: 3000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
            });
          });
        }
      }
    }
  }

  $(function(){
    App.init();
  })
})(jQuery);