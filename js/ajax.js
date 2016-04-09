function ajax(id, panjang, aktif,total){

	    $("#results").fadeOut("fast");
        $("#results").prepend('');
        $('.berita').fadeIn("slow");
        $('.show').hide();
        var clicked_id = $(id).attr("id").split("-"); //Jika element link halaman di klik, di gunakan split() (seperti explode PHP) untuk memisahkan karakter berdasarkan tanda "-".
        var page_num = parseInt(clicked_id[0]); //clicked_id[0] mengambil karakter pertama sebelum tanda "-" 
        $('.pagination').show();
        $('.judul').show();
         //Mencabut semua class active
        $('.page').hide();
        for (var i = 1; i <= 2; i++) {
            var j = page_num + i
            $('#' + j).show();
            j = page_num - i
            $('#' + j).show();
        }
        $('#' + page_num).show();
            //file isi.php akan dimuat berdasarkan halaman yang diminta
            //catatan (page_num-1), untuk mendapatkan posisi datanya
        $("#results").load("page_content.php", {'page':(page_num),'panjang':(panjang)}, function(){
             $("#results").show("slow");
             $('.judul').show("slow");
             $('.berita').fadeOut("slow");
        });
    if (aktif==1){
        $('.paginate_click').removeClass('active');
        $('#' + clicked_id).addClass('active');
    }
}

function reload(page, panjang){
    $("#results").fadeOut("fast");
    $("#results").prepend('');  
    $('.page').hide();
    $('#' + page).show();
    for (var i = 1; i <= 2; i++) {
        var j = page + i
        $('#' + j).show();
        j = page - i
        $('#' + j).show();
    }

    $('.berita').fadeIn("slow");

    $("#results").load("page_content.php", {'page':(page),'panjang':(panjang)}, function(){
         $("#results").show("slow");
         $('.judul').show("slow");
         $('.berita').fadeOut("slow");
    });
}

function next(id,panjang){
    $('.paginate_click').removeClass('active');
    id =id+1;
    $('#' + id).addClass('active');
    reload(id,panjang);
}

function prev(posisi){
    $('.paginate_click').removeClass('active');
    id =id-1;
    $('#' + id).addClass('active');
    reload(id,panjang);
}

function maju(id){
    id =id+1;
    $(".kiri").prepend(''); 
    $('.kiri').hide();
    $('.kiri-load').show();
    $(".kiri").load("page/right.php", {'page':(id)}, function(){
             $(".kiri").show("slow");
             $('.kiri-load').hide('slow');
    });
    return false;
}

function mundur(id){
    id =id-1;
    $('.kiri').hide();
    $('.kiri-load').show('slow');
    $(".kiri").load("page/right.php", {'page':(id)}, function(){
             $(".kiri").show("slow");
             $('.kiri-load').show('slow');
    });
    return false;
}

function back(){
    $('#isi_news').hide('fast');
    $('#results').show('fast');
    $('.pagination').show();
    $('.judul').show();
}

function num_page(){
    for (var i = 1; i <= total; i++) {
        $('#' + i).hide();
    }

    for (var i = 1; i <= 2; i++) {
        var j = page_num + i
        $('#' + j).show();
        j = page_num - i
        $('#' + j).show();
    }
}



function open_news(id, a){
        $('.list-group-item').removeClass('active');
        $(a).addClass('active');
        $("#isi_news").hide("slow");
        $('.pagination').hide();
        $("#results").fadeOut("slow");
        $("#results").prepend('');
        $('.berita').fadeIn("slow");
        $('.judul').hide();
        var clicked_id = $(id).attr("id").split("-");
        var page_num = parseInt(clicked_id[0]); 

        $("#isi_news").load("open_news.php", {'id':(page_num)}, function(){
             $("#isi_news").show("slow");
             $('.berita').fadeOut("slow");
        });
        return false;

}