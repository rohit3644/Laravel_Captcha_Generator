$(document).ready(function () {
    $("#refresh").click(function () {
        $.ajax({
            url: "/refresh",
            type: "get",
            success: function (response) {
                $("img").replaceWith("<s></s>");
                $("s").text(response.captcha);
                $("#hiddenCaptcha").val(response.captcha);
                const element = $("s")[0]; // global variable
                html2canvas(element).then(function (canvas) {
                    const imageData = canvas.toDataURL("image/jpeg", 0.9);
                    $(".captcha").html('<img src="' + imageData + '" />');
                });
            },
        });
    });
});
