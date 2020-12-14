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
    for (var i = 0; i < 999; i++) {
        plus = '.plus'.concat(i);
        minu = '.minu'.concat(i);
        // $('.count'.concat(i)).prop('disabled', true);
        $(document).on('click', minu, function($index) {
            clname = this.className.split(" ");
            conc = clname[0].substring(4, clname[0].length);
            // window.alert(conc);
            $('.count'.concat(conc)).val(parseInt($('.count'.concat(conc)).val()) - 1);
            if ($('.count'.concat(conc)).val() == 0) {
                $('.count'.concat(conc)).val(1);
            }
        });
        $(document).on('click', plus, function($index) {
            clname = this.className.split(" ");
            conc = clname[0].substring(4, clname[0].length);
            $('.count'.concat(conc)).val(parseInt($('.count'.concat(conc)).val()) + 1);
        });
    }
});