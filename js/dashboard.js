function showWidget() {
    $(".stat-block").append("<a class='linkBack pull-right' target='_blank' href='//www.hotelalpha.org'>hotelalpha.org</a>");
    $("body").addClass("widget");
}

function getQueryString() {
    var pairs = window.location.search.substring(1).split("&"),
      obj = {},
      pair,
      i;

    for (i in pairs) {
        if (pairs[i] === "") continue;

        pair = pairs[i].split("=");
        obj[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
    }

    return obj;
}

$(function () {
    var args = getQueryString(),
        themeArg = args.theme ? "&theme=" + args.theme : "";

    $('[data-toggle="tooltip"]').tooltip({
        title: function () {
            return $(this).data("tooltip");
        },
        delay: { "show": 500, "hide": 100 }
    });

    $('[data-toggle="popover"]').popover({
        html: true,
        container: 'body',
        content: function () {
            return "<textarea class='form-control' cols='40' rows='3' readonly='readonly'><iframe src='" + $(this).data("link") + themeArg + "' width='400' height='175' scrolling='no' frameborder='0'></iframe></textarea>";
        }
    });

    if (hotelalpha && hotelalpha.statistics) {
        $("#usRate").text(hotelalpha.format(hotelalpha.statistics.us.annualRate));
        $("#73end").text(hotelalpha.statistics.us.from73.endDate.getFullYear());
        $("#73total").text(hotelalpha.format(hotelalpha.statistics.us.from73.total));
        $("#worldRate").text(hotelalpha.format(hotelalpha.statistics.world.annualRate));
    }
});