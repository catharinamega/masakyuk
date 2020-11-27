// SMOOTH SCROLLING
// event pada saat link diklik
$('.page-scroll').on('click', function(e){
    // ambil isi href
    var tujuan = $(this).attr('href');
    // tangkap elemen yang brsangkutan
    var elemenTujuan = $(tujuan);
    

    // pindahkan scroll
    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top - 90
    }, 1000, 'easeInOutExpo');
    // console.log(elemenTujuan.offset().top); <- utk ngitung jarak
    e.preventDefault();
});