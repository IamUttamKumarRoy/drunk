;
(function ($) {
    $(document).ready(function () {
        new WOW().init();


        //$("#mainbanner.bannervideo").vide({
        //    webm:"http://mazwai.com/system/posts/videos/000/000/138/webm/matt_devir--one_minute_drive.webm",
        //    mp4:"http://mazwai.com/system/posts/videos/000/000/138/original/matt_devir--one_minute_drive.mp4"
        //});

        $('#drunkmain').smoothState({
            anchors:"h1.entry-title a, .nav-previous a, .nav-next a, .site-title a, li a, .cat-links a, .tag-links a",
            onStart: {
                duration: 550,
                render: function (url, $container) {
                    $("#drunkmain").addClass("animated fadeOut");
                    console.log("fadeout");
                }
            },
            onEnd:{
                duration:550,
                render:function(url, $container, $content){
                    $("#drunkmain").html($content);
                    $("#drunkmain").removeClass("fadeOut");
                    $("#drunkmain").addClass("fadeIn");
                    $("#drunkmain").css({cursor:"default"});
                    $("body").scrollTop(0);
                }
            }
        },{

        });
    });
})(jQuery);