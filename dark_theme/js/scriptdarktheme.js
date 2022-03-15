$('tbody .pagetitle').prepend('<i class="far fa-window-maximize"></i>');


$('.main .edit-nav ').prepend('<a href="#" id="" class="showmenu" >  <i class="fas fa-bars"></i></a>');

$('.nav').before('<div class="btn-rwd-menu"> <i class="fas fa-bars fa-lg"></i> </div>');

$('.nav').addClass('responsive');

$('.btn-rwd-menu').click(function(){
	$('.nav').toggleClass('responsive');
	
});

$('.showmenu').click(function(){
	$('#sidebar').toggleClass('d-none');
	$('#maincontent').toggleClass('max-width');
	$('.wrapper table').toggleClass('max-width');
});

$('code').on('click',function() {
    var rng, sel;
    if ( document.createRange ) {
        rng = document.createRange();
        rng.selectNode( this )
        sel = window.getSelection();
        var strSel = ''+sel;
        if (!strSel.length) {
            sel.removeAllRanges(); 
            sel.addRange( rng );
        }
    } else {
        var rng = document.body.createTextRange();
        rng.moveToElementText( this );
        rng.select();
    }
});
