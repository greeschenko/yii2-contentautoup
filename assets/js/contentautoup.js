$(window).ready(function() {
    $('.contentautoupwrap').each(function(index) {
        var el = $(this);
        var url = $(this).data('url');
        var interval = $(this).data('interval');

        setInterval(function() {
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                success: function(data, textStatus, jqXHR) {
                    el.html(data);
                },
            });
        }, interval);
    });
});
