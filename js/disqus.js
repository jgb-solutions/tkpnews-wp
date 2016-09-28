jQuery(document).ready(function($){

	var disqus = {name:'',email:'' ,developer:0}

	$( document ).bind( 'pageshow',function(event, ui) {

		//change site name
		disqus_shortname = 'SITESHORTNAME';
		disqus_url = document.location.href;

		disqus_def_name = disqus.name || '';
		disqus_def_email = disqus.email || '';
		disqus_developer = disqus.developer || 0;

		if( $('.ui-page-active article.post')[0] ){
			//modify selectors to select corrent data
			disqus_title = $('.ui-page-active #content .title').html().replace(/(<([^>]+)>)/ig,"");
			disqus_identifier = $('.ui-page-active #content .node').attr('id').replace('-','/');

			//only load disqus if is not already loaded
			if( typeof( DISQUS ) == 'undefined' )
				$.getScript(  'http://' + disqus_shortname + '.disqus.com/embed.js' );

			if( $("#disqus_thread").length <= 0  )
				$('.disqus-ajax').attr({id:'disqus_thread'});
			else if(  $('.disqus-ajax').length >= 2  )
				$('.disqus-ajax:has(a)').removeAttr('id').empty();

			if( typeof( DISQUS ) !== 'undefined'  ){
				DISQUS.reset({
					reload: true,
					config: function () {
						this.page.url = disqus_url;
						this.page.title = disqus_title;
						this.page.identifier = disqus_identifier;
					}
				});
			}
		}

	});
});