// SMOOTH SCROLLING
// event pada saat link diklik
$('.page-scroll').on('click', function(e) {
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

$(document).ready(function($index) {
    var plus;
    var minu;
    for (var i = 0; i < 13; i++) {
        plus = '.plus'.concat(i);
        minu = '.minus'.concat(i);
        // $('.count'.concat(i)).prop('disabled', true);


        $(document).on('click', minu, function($index) {

            $('.count'.concat(this.className[5])).val(parseInt($('.count'.concat(this.className[5])).val()) - 1);
            if ($('.count'.concat(this.className[5])).val() == 0) {
                $('.count'.concat(this.className[5])).val(1);
            }
        });
        $(document).on('click', plus, function($index) {
            $('.count'.concat(this.className[4])).val(parseInt($('.count'.concat(this.className[4])).val()) + 1);
        });
    }
});