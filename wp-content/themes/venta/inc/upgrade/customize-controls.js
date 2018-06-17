( function( api ) {

	// Extends our custom "ezen" section.
	api.sectionConstructor['venta'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
