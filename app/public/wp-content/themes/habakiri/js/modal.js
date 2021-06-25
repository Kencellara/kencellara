jQuery(document).ready(function() {
  jQuery('.js-modal-open').on('click', () => {
    const target = jQuery('.js-modal-open').data('target');
    const modal = document.getElementById(target);
    jQuery(modal).fadeIn(300);
    return false;
  });

  jQuery('.js-modal-close').on('click', () => {
    jQuery('.js-modal').fadeOut( 300 );
    return false;
  });
});
