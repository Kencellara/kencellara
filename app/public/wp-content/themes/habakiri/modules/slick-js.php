<script>
  jQuery('.slider').slick({
    arrows: true,
    centerMode: true,
    centerPadding: '20px',
    slidesToShow: 3,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 420,
        settings: {
          arrows: true,
          centerMode: false,
          slidesToShow: 1
        }
      }
    ]
  });
</script>
