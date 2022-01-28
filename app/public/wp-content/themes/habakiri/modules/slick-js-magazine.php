<script>
  jQuery('.sliderMagazine').slick({
    arrows: true,
    centerMode: false,
    slidesToShow: 3,
    dots: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
            centerMode: false,
            slidesToShow: 3
            }
        },
        {
            breakpoint: 420,
            settings: {
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1
            }
        }
    ]
});
</script>