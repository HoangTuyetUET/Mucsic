$(function() {
    $("#playlist1 li").on("click", function() {
        $("#videoarea").attr({
            "src": $(this).attr("movieurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#videoarea").attr({
        "src": $("#playlist1 li").eq(0).attr("movieurl"),
        "poster": $("#playlist1 li").eq(0).attr("moviesposter")
    })
})