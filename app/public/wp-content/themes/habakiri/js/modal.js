const modalOpen = (idName) => {
  const target = jQuery(idName).data('target');
  const modal = document.getElementById(target);
  jQuery(modal).fadeIn(300);
  return false;
}

jQuery(document).ready(function() {
  jQuery('#js-modal-open-1').on('click', () => modalOpen('#js-modal-open-1'));
  jQuery('#js-modal-open-2').on('click', () => modalOpen('#js-modal-open-2'));

  jQuery('.js-modal-close').on('click', () => {
    jQuery('.js-modal').fadeOut( 300 );
    return false;
  });
});
