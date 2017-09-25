jQuery(document).ready(function($){


    /* initialization
     ----------------------------------------------*/

    init();

    /* Events
    ----------------------------------------------*/

    $('#update-preview').click(function(e){

        e.preventDefault();

        var imgTitle = $('input[name=title]').val();

        if(imgTitle)
        {
            getRandomImg(imgTitle, function(imgUrl){
                renderImg(imgUrl);
            })
        }
    });


    /* function
     ----------------------------------------------*/

    function init()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var imgPreview = $('#img-preview');

        imgPreview.hide();

        if(imgPreview.attr('src'))
        {
            imgPreview.show();
        }
    }

    function renderImg(imgUrl)
    {
        $('#img-preview').show();
        $('#img-preview').attr('src', imgUrl);
        $('input[name=img]').val(imgUrl);
    }

    function getRandomImg(queryString, callback)
    {
        $.getJSON({
            type: "POST",
            url: '/admin/api/random-img',
            data: {'img_query': queryString},
            success: function(data) {
                callback(data.url)
            }
        })
    }

});