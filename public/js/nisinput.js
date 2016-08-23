$(".nisinput").focus(function () {
    $(".nisinput").next().next().addClass("active");
    $(".nisinput").css({
        color: 'black',
        transition: 'initial'
    });
});

$(".nisinput").focusout(function () {
    if ($(".nisinput").val().length === 0) {
        $(".nisinput").css({
            color: 'white',
            transition: 'initial'
        });
        $(".nisinput").next().next().removeClass("active");
    }
});
if ($(".nisinput").not(":focus")) {
    if ($(".nisinput").val().length === 0) {
        $(".nisinput").css({
            color: 'white'
            , transition: 'initial'
        });
        $(".nisinput").next().removeClass("active");
    }
}
