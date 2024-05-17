document.addEventListener("DOMContentLoaded", function() {
    var indicators = document.querySelectorAll('#carouselExampleIndicators .carousel-indicators li');
    var images = document.querySelectorAll('#carouselExampleIndicators .carousel-inner .carousel-item img');
  
    images.forEach(function(image, index) {
      image.addEventListener('click', function() {
        var cards = document.querySelectorAll('.card.mb-3');
        cards[index].scrollIntoView({ behavior: 'smooth' });
      });
    });
  
    
  });