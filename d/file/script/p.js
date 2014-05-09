

/*=====================================
 * Preview
 *=====================================*/
 $(function(){
	(function(){
		
		
		//初始化
		var layoutResize=function(){
			var _height=$(window).height();
			if ($('#j-tplpreview-expand').is('.close')){
				_height-=$('#tplpreview-info').height();
			}
			$('#ifr-tplpreview').height(_height);
			var _width=$(window).width();
			
		}
		layoutResize();
		$(window).resize(layoutResize);
		$('#ifr-tplpreview').attr('src', $('#ifr-tplpreview').attr('j_load'));
	
		
		//过滤
	
	
	
		
	
	})();
	
	
	
});