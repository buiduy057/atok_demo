$(document).on("ready", function () {
    $(".lazy").slick({
        lazyLoad: "ondemand",
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});
