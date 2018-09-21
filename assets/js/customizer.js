( function( $ ) {
  wp.customize( '', function( value ) {
    value.bind( function( to ) {
      $( '.contact-number' ).text( to );
    } );
  };
} ) ( jQuery );
