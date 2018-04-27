/**
 * Created by Shany on 2017-02-20.
 */

$( document ).ready(function() {
    if($( window ).width() < 1024)
    $( ".srcaption-smallwhite" ).data( "voffset",250 );
});



$( ".cartClick" ).click(function() {
    window.location.replace("checkout.php");
});

