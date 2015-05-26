jQuery( document ).ready( function ( e ) {
  if ( $(document).width() > 560) { 
    $( "a.ok-ribbon" ).addClass( "closed" ).removeAttr('href');
    
    $('a.ok-ribbon').click(function(e) {
        $(this).toggleClass("closed open");
        $('body > #ok-panel').toggleClass("closed open");
    });
  }
});