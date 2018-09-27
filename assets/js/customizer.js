( function( $ ) {

  wp.customize( 'contact_phone', function( value ) {
    value.bind( function( to ) {
      $( '.contact-number' ).text( to );
    } );
  } );

  wp.customize( 'contact_mail', function( value ) {
    value.bind( function( to ) {
      $( '.contact-mail' ).text( to );
    } );
  } );

  wp.customize( 'about_image', function( value ) {
    value.bind( function( to ) {
      if( to == '' )
      {
        $( '.about img' ).hide();
      }
      else
      {
        $( '.about img' ).show();
        $( '.about img' ).attr( 'src', to );
      }
    } );
  });

} ) ( jQuery );
