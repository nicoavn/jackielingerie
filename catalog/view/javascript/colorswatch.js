
function csClickProduct(s) {
    if ($(s).attr("data-type") == "Color") {

        $.ajax({
            url: 'index.php?route=product/product/colorswatchusr',
            type: 'get',
            data: { colorsw_id: $(s).val() },
            dataType: 'json',
            beforeSend: function() {

            },
            success: function(json) {

                // alert(json.toSource());

                if (json.images.length > 0) {

                    $(".thumbnails").find("li").remove();
                    var csimg = '';
                    jQuery.each( json.images, function( i, val ) {
                        // alert(val.popup);

                        //alert(json.images.length);
                        if (i == 0 && json.images.length == 1) {
                            csimg += '<li><a class="thumbnail" href="'+val.popup+'" title=""> <img src="'+val.imgproduct+'" title="" alt=""></a></li>';
                            csimg += '<li class="image-additional"><a class="thumbnail" href="'+val.popup+'" title=""> <img src="'+val.thumb+'" title="" alt=""></a></li>';
                        }
                        else if (i == 0 && json.images.length > 1) {
                            csimg += '<li><a class="thumbnail" href="'+val.popup+'" title=""> <img src="'+val.imgproduct+'" title="" alt=""></a></li>';
                        }
                        else {
                            csimg += '<li class="image-additional"><a class="thumbnail" href="'+val.popup+'" title=""> <img src="'+val.thumb+'" title="" alt=""></a></li>';
                        }


                        //   csimg += '<li class="image-additional"><a href="'+val.popup+'" class="popup-image" data-image="'+val.popup+'" data-zoom-image="'+val.popup+'"><img src="'+val.thumb+'" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>';

                    });

                    csimg += "";

                    //$(".thumbnails-carousel").remove();
                    $(".thumbnails").append(csimg);
                    $("ul.thumbnails").find("li a.thumbnail").first().click();

                }


            }
        });

    }

}

function csClickCFR(s) { // Category , Featured , Related

    $.ajax({
        url: 'index.php?route=product/product/colorswatchusr',
        type: 'get',
        data: { colorsw_id: $(s).attr("data-colorswid") },
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(json) {

  //          alert(json.toSource());
            //alert(json.images.length);

            if (json.images.length > 0) {

                var width = $("#colorsw" + $(s).attr("data-prodid")).width();
                var height = $("#colorsw" + $(s).attr("data-prodid")).height();

                $("#colorsw" + $(s).attr("data-prodid")).attr("src",json.images[0].imgproduct);
                $("#colorsw" + $(s).attr("data-prodid")).attr({"width":width, "height": height});

            }



        }
    });

}

/*
function csClickCategory(s) {

    $.ajax({
        url: 'index.php?route=product/product/colorswatchusr',
        type: 'get',
        data: { colorsw_id: $(s).attr("data-colorswid") },
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(json) {

            //alert(json.toSource());

            var width = $("#colorsw" + $(s).attr("data-prodid")).width();
            var height = $("#colorsw" + $(s).attr("data-prodid")).height();

            $("#colorsw" + $(s).attr("data-prodid")).attr("src",json.images[0].imgproduct);
            $("#colorsw" + $(s).attr("data-prodid")).attr({"width":width, "height": height});


        }
    });

}


function csClickFeatured(s) {

    $.ajax({
        url: 'index.php?route=product/product/colorswatchusr',
        type: 'get',
        data: { colorsw_id: $(s).attr("data-colorswid") },
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(json) {

            //alert(json.toSource());

            var width = $("#colorsw" + $(s).attr("data-prodid")).width();
            var height = $("#colorsw" + $(s).attr("data-prodid")).height();

            $("#colorsw" + $(s).attr("data-prodid")).attr("src",json.images[0].imgproduct);
            $("#colorsw" + $(s).attr("data-prodid")).attr({"width":width, "height": height});


        }
    });



}

function csClickRelated(s) {

    $.ajax({
        url: 'index.php?route=product/product/colorswatchusr',
        type: 'get',
        data: { colorsw_id: $(s).attr("data-colorswid") },
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(json) {

            //alert(json.toSource());

            var width = $("#colorsw" + $(s).attr("data-prodid")).width();
            var height = $("#colorsw" + $(s).attr("data-prodid")).height();

            $("#colorsw" + $(s).attr("data-prodid")).attr("src",json.images[0].imgproduct);
            $("#colorsw" + $(s).attr("data-prodid")).attr({"width":width, "height": height});


        }
    });

}
*/