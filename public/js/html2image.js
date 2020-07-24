$(document).ready(function () {
    const element = $("#captchValue")[0]; // global variable
    html2canvas(element).then(function (canvas) {
        const imageData = canvas.toDataURL("image/jpeg", 0.9);
        $(".captcha").html('<img src="' + imageData + '" />');
    });
});
