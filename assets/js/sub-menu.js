$('.has-children').hover(function() {
  $(this).children('ul.children').show();
}, function() {
  $(this).children('ul.children').hide();
});
