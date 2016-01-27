/**
 *
 * Example Main Javascript
 * 
 * @package		codeigniter-bootstrap-ajax-pagination
 * @author		Suwi D. Utomo
 * @copyright	Copyright (c) 2016, Brainsofmedia.com.
 * @license		MIT License
 * @link		http://www.brainsoftmedia.com
 * @since		Version 1.0 
 */

var Example = function(){
	var handlePagination = function (){
		// handling pagination on first onload
		$('ul.pagination li a').click(function(e){
			elmUrl 		= $(this).attr('data-url');
			
			handleLoadingPage(elmUrl);
			e.preventDefault(); 
		})
	}
	var handleLoadingPage = function(elmurl){
		$('#postList-students').load(elmurl,function(data){
			handlePagination();
		})
	}
	
	return {
		init: function(){
			handlePagination();
		}
	}
}();