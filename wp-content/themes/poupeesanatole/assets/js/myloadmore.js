// https://rudrastyh.com/wordpress/load-more-posts-ajax.html 
jQuery (function($) {
	$('.misha_loadmore').click(function(){
 
		var button = $(this), 
		    data =  { 
                'action' :  'loadmore' , 
                'query' : misha_loadmore_params.posts,
                'page'  : misha_loadmore_params.current_page 
		};
 
		$.ajax({
			url: misha_loadmore_params.ajaxurl ,
			data: data , 
			type: 'POST', 
			beforeSend:  function(xhr){ 
				button. text ( "Chargement..." );
			} , 
			success: function (data){ 
				if(data){  
					button.text("Voir plus d'articles").prev().before(data); 
					misha_loadmore_params.current_page ++;
					if(misha_loadmore_params.current_page == misha_loadmore_params.max_page)  
					    button.remove();
				}  
                else{ 
					button.remove();
				} 
			} 
		}); 
	}); 
});