$(".dateinput").focus(function () {
    $(".dateinput").next().addClass("active");
    $(".dateinput").css({
        color: 'black',
        transition: 'initial'
    });
});

$(".dateinput").focusout(function () {
    if ($(".dateinput").val().length === 0) {
        $(".dateinput").css({
            color: 'white',
            transition: 'initial'
        });
        $(".dateinput").next().removeClass("active");
    }
});
if ($(".dateinput").not(":focus")) {
    if ($(".dateinput").val().length === 0) {
        $(".dateinput").css({
            color: 'white'
            , transition: 'initial'
        });
        $(".dateinput").next().removeClass("active");
    }
}
