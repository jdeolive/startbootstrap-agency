(function($) {

    // scroll based animations
    $(window).scroll(function(evt) {
        $(".scrollin").each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
              el.addClass("animate"); 
            } 
        });
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        dots:false,
        items: 1,
        // autoplay: true,
        // autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        animateOut: 'zoomOutLeft',
        animateIn: 'slideInRight',
        smartSpeed:450
    });
    var owl = $('.owl-carousel').owlCarousel();
    $(".owl-prev").click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $(".owl-next").click(function () {
        owl.trigger('next.owl.carousel');
    });

    $(".board-grid-cell").hover(
        function(e) {
            $(e.currentTarget).find(".caption").css("bottom", "0px");
        },
        function(e) {
            $(e.currentTarget).find(".caption").css("bottom", "-100px");
        }
    );

    $('#board-modal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var name = button.data('name')
      var title = button.data('title')
      var bioId = button.data('bio')

      var modal = $(this);
      modal.find('.board-member-name').text(name);
      modal.find('.board-member-title').text(title);

      var bio =  modal.find('.board-member-bio');
      bio.empty();

      var content = $('#' + bioId).clone();
      content.removeClass();

      bio.append(content);
    })

})(jQuery); 