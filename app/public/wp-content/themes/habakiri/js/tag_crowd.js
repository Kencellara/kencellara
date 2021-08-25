const toggleCrowd = (idName) => {
  jQuery(idName).toggleClass('open');
}

jQuery(document).ready(function() {
  jQuery('#js-budgetBtn').on('click', () => toggleCrowd('#budgetTagCrowd'));
  jQuery('#js-genreBtn').on('click', () => toggleCrowd('#genreTagCrowd'));
});
