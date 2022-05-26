$(function () {
    $(document).scroll(function () {
        var $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

});

$('.inside-overlay').on('click tap', function () {
    $(this).parent().find('iframe').addClass('iframe-open');
    $(this).hide();
    $('.video-overlay').show();
    console.log('iframe-clicked');
});

$('.close').on('click tap', function () {
    $('.iframe-popup').removeClass('iframe-open');
    $('.video-overlay').hide();
    $('.inside-overlay').show();
    console.log($('.iframe-open').find('iframe'));
    $('#youtube-popup-iframe').attr('src', "");
});
$('.youtube').on('click tap', function () {
    var code = $(this).data('embed');
    if (code){
        var src = "https://www.youtube.com/embed/" + code + "?rel=0&showinfo=0&autoplay=1&mute=0";
        $('#youtube-popup-iframe').attr('src', src);
        $('.video-overlay').show();
    }
    
});
function stopVideo() {
    var videos = document.querySelectorAll('iframe, video');
    Array.prototype.forEach.call(videos, function (video) {
        if (video.tagName.toLowerCase() === 'video') {
            video.pause();
        } else {
            var src = video.src;
            video.src = src;
        }
    });
}

(function () {
    var youtube = document.querySelectorAll(".youtube");

    for (var i = 0; i < youtube.length; i++) {
        if (youtube[i].dataset.embed){
            var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";

            var image = new Image();
            image.src = source;
            image.addEventListener("load", function () {
                youtube[i].appendChild(image);
            }(i));
        }
        
    };
})();