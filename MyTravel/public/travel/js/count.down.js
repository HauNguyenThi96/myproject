$(document).ready(function() {
	$('#clock').countdown('2018/10/10').on('update.countdown', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<span class="date-count">%-w</span> week%!w '
    + '<span class="date-count">%-d</span> day%!d '
    + '<span class="date-count">%H</span> hr '
    + '<span class="date-count">%M</span> min '
    + '<span class="date-count">%S</span> sec'));
});

});