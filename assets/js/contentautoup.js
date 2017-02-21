var CAUget = function(el, url) {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function(data, textStatus, jqXHR) {
            el.html(data);
        },
    });
};

$(window).ready(function() {
    $('.contentautoupwrap').each(function(index) {
        var el = $(this);
        var url = $(this).data('url');
        var interval = $(this).data('interval');

        CAUget(el, url);
        setInterval(function() {
            CAUget(el, url);
        }, interval);
    });
});
