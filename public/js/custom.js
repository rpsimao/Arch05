function displayimage(id){

    var path = $(id).attr("src");

    $("#displayimage").hide().html('<img src="'+path+'">').fadeIn();

}


function filter(id){

    $('.home-mosaic').fadeOut();
    $('.'+id).fadeIn();


}

function filterShowAll(){

    $('.home-mosaic').fadeIn();

}