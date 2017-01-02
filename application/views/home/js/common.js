function ajax_send(postURL,objJSON,sFunc,eFunc) {
    if (objJSON==0) {
        $.ajax({
                url: postURL,
                type: 'post',
                dataType: 'JSON',
                success: sFunc,
                error: eFunc
            });
    }
    else {
        $.ajax({
            url: postURL,
            data: objJSON,
            type: 'post',
            dataType: 'JSON',
            success: sFunc,
            error: eFunc
        });
    }
}

function load_error(data) {
    alert("页面加载失败！");
}