const fixedNode = jQuery('#jsFixedSNS');
const scrollStart = fixedNode.offset().top;
let distance = 0;

jQuery(document).scroll(() => {
  distance = jQuery(this).scrollTop();

  if (scrollStart <= distance) {
    fixedNode.addClass('fixed');
  } else if (scrollStart >= distance) {
    fixedNode.removeClass('fixed');
  }
});
