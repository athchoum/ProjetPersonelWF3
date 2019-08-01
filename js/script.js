(function () {
  var $bar, perc, start, update;

  $bar = $('.percentage');

  perc = 0;

  update = function () {
    $bar.css("width", perc + '%');
    $bar.attr("perc", Math.floor(perc) + '%');
    perc += 0.2;
    if (Math.floor(perc) === 5) {
      $bar.addClass('active');
    }
    if (Math.floor(perc) === 95) {
      $bar.removeClass('active');
    }
    if (perc >= 100) {
      return perc = 0;
    }
  };

  start = function () {
    var run;
    return run = setInterval(update, 2);
  };

  start();

}).call(this);
