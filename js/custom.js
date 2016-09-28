jQuery(document).on('pageshow', function() {
	$(document).on( 'panelopen', '#tkpn-search', function() {

		var search = $( this ).find( "#search" );
		search.focus();

		search.on('keyup', function()
		{
			lookup(this.value);
		});
	});

	viewCount();
});

function lookup( searchinput )
{
	var searchr = $("#search-results");
	if ( searchinput.length == 0 )
 	{
    // Hide the suggestion box.
    searchr.hide();
	} else {
			var data = {
				action: 'tkpn_search',
				query: searchinput
		};

		$.post( tkpnAjax.ajaxUrl, data, function( data )
		{
      if( data.length > 0 ){
        $.mobile.activePage.find("#search-results").html(data).find('ul').listview().end().show();
      }
    });
	}
}

function viewCount()
{
	var target 	= $.mobile.activePage.find('span.viewCount'),
				id 		= target.data('id'),
				data = {
					action: 'tkpnViewCount',
					tkpnID: id
				};

	jQuery.post( tkpnAjax.ajaxUrl, data, function( data ) {
	  if ( data.length > 0 ) {
	  	target.html( data + ' Views');
	  }
	});
}