const toggleCrowd = (kind) => {
  const btnId = '#js-' + kind + 'Btn';
  const crowdId = '#' + kind + 'TagCrowd';
  jQuery(btnId).toggleClass('open');
  jQuery(crowdId).toggleClass('open');
}

jQuery(document).ready(function() {
  jQuery('#js-budgetBtn').on('click', () => toggleCrowd('budget'));
  jQuery('#js-genreBtn').on('click', () => toggleCrowd('genre'));
});
