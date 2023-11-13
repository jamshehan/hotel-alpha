function changeTheme() {
    var selected = $("#theme option:selected"),
        theme = selected.val(),
        width = selected.data("width") || 365,
        height = selected.data("height") || 160;

    $("#source").text("");

    $("#widgets iframe").each(function () {
        var $this = $(this),
            src = $this.attr("src");

        src = src.replace(/theme=[^&]+/, "theme=" + theme);
        $this.attr("src", src);
        $this.attr("width", width);
        $this.attr("height", height);

        $("#source").append($("<span/>").text(this.outerHTML)).append("<br/>");
    });
}

$(function () {
    $("#theme").change(function () {
        changeTheme();
    });

    changeTheme();
});