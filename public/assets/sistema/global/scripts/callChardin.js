(function() {

  $(function() {
    $('body').chardinJs();
    $('a[data-toggle="chardinjs"]').on('click', function(e) {
      e.preventDefault();
      if ($('.jumbotron img').is(':visible')) {
        return ($('body').data('chardinJs')).toggle();
      } else {
        return $('.jumbotron img').animate({
          height: 250
        }, 600, function() {
          return ($('body').data('chardinJs')).toggle();
        });
      }
    });
    return $('body').on('chardinJs:stop', function() {
      $('a.btn.primary').off('click').text('See more on Github').attr('href', 'https://github.com/heelhook/chardin.js');
      return $('a#opentour').css({
        display: 'block'
      });
    });
  });

}).call(this);
