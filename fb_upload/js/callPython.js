

function callPython(paras,func, async)
{
    async = typeof async !== 'undefined' ? async : true;
    $.ajax({
        type: "POST",
        dataType: "json",
        async: async,
        //url: "http://127.0.0.1/channel.php",
        url: "/channel.php",
        data: paras,
        success: function(ret) {;
            func(ret);
        },
        error: function(xhr) {
            alert('Ajax request error');
        },
    });
}