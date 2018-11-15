    </div>

    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About</h3>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                        <ul class="clean-list">
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
                            <li><a href="">Blackor Responsive Theme</a></li>
                            <li><a href="">Portfolio Bootstrap Template</a></li>
                            <li><a href="">Clean Slider Template</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                         <div class="footer-widget-icon">
                            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
                Copyright 2018
        </div>
    </footer>


<!--登陆框-->
<div id="zhezhao" style="z-index:9001;"></div>
<div id="logorreg">
	
<table> 
<tr> <td></td>
<td colspan="2"><div style="float:right"><a href="javascript:lgrrgx();">关闭</a></div></td><td></td></tr><tr><td></td>
<td colspan="2"><div style="text-align:center"><h3 id="h3tl">登录</h3></div></td><td></td>
</tr> 
<tr> <td>&nbsp;&nbsp;&nbsp;</td>
<td>账号:</td>
<td ><input type="text" style="height:50%;"/></td><td></td> 
</tr> 
<tr> <td>&nbsp;&nbsp;&nbsp;</td>
<td id="tdpwd">密码:</td> 
<td ><input type="text" style="height:50%"/></td><td></td> 
</tr> 
<tr><td>&nbsp;&nbsp;&nbsp;</td>
        <td id="tddrg" colspan="2"><div id="drag"><div class="drag_bg"></div>
                <div class="drag_text">拖动滑块验证</div><div class="handler handler_bg"></div></div>
        </td><td></td></tr>
<tr> <td></td>
<td colspan="2"><div style="text-align:center"><a id="lgrrgsbmttl" href="javascript:;">提交</a></div></td><td></td>	 
</tr> 
<tr><td></td><td><a id="lgrrgatl" href="javascript:;" onclick="logorreg(2);">注册</a></td><td><a href="javascript:;">忘记密码</a></td><td></td></tr>
</table> 

</div>
    
    <script src="trth/js/jquery.min.js"></script>
    <script src="trth/js/bootstrap.min.js"></script>
    <script src="trth/js/modernizr.js"></script>
    <!--<script src="trth/js/ckeditor.js"></script>-->

    <script type="text/javascript">
    	el_hdr=$('#el_hdr');
    	el_drg=$('#drag');
    	el_lgrrg=$('#logorreg');
    	el_zhzh=$('#zhezhao');
    	flg_lgrrg=0;
		flg_drg=0;
    	function wbdtini(){ldelim}
    		//共用
    		wd_ht=$(window).height();
    		scrll_tp=$(document).scrollTop();
    		bd_ht=$(document.body).height();
    		
    		//置顶导航使用
    		el_ht_hd=el_hdr.height();
    		el_tp_hd=el_hdr.offset().top;
    		el_lft_hd=el_hdr.offset().left;

    		//登陆/注册使用
    		wd_wdth=$(window).width();
    		el_lft_drg=el_drg.offset().left;
    		el_tp_drg=el_drg.offset().top;
    		
    	{rdelim}
    	
    	wbdtini();
    	
    	$(window).on('resize scroll',function(){ldelim}
    		wbdtini();
    		if(scrll_tp>=el_ht_hd){ldelim}
    			if(2*el_ht_hd<wd_ht && 2*el_ht_hd<bd_ht){ldelim}
    				el_hdr.offset({ldelim}top:scrll_tp,left:0{rdelim});
    			{rdelim}
    		{rdelim}else{ldelim}
    			el_hdr.offset({ldelim}top:0,left:0{rdelim});
    		{rdelim}	
    		if(flg_lgrrg!=0){ldelim}
    			logorreg(flg_lgrrg);
    		{rdelim}
    	{rdelim});

    	function logorreg(flg){ldelim}
    		if(flg==1){ldelim}
    			$('#h3tl').html('登陆');
    			$('#lgrrgatl').html('注册');
    			$('#lgrrgatl').attr('onclick','logorreg(2)');
    		{rdelim}else if(flg==2){ldelim}
    			$('#h3tl').html('注册');
    			$('#lgrrgatl').html('登陆');
    			$('#lgrrgatl').attr('onclick','logorreg(1)');
    		{rdelim}

    
                if(flg_lgrrg!=flg){ldelim}
    
                  flg_lgrrg=flg;
    
                  el_zhzh.css('display','block');
                  el_lgrrg.css('display','block');
                          el_drg.css('display','block');
                  $('.handler').css('display','block');
                  el_lft_drg=el_drg.offset().left;
                  el_tp_drg=el_drg.offset().top;
                  //$('.handler').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
                  //$('.drag_bg').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
                  //$('.drag_text').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    
                  //text.text('拖动滑块验证'); 
                  //handler.addClass('handler_bg').removeClass('handler_ok_bg');
                  //handler.css({ldelim}'left': 0{rdelim});
                  //drag_bg.css({ldelim}'width': 0{rdelim});
                  
                  text.text('拖动滑块验证').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
                  handler.addClass('handler_bg').removeClass('handler_ok_bg').css({ldelim}'left': 0{rdelim}).offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
                  drag_bg.css({ldelim}'width': 0{rdelim}).offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
                  
                  el_drg.css({ldelim}'color': '#fff'{rdelim});
                  flg_drg=0;
    
               {rdelim}
    
    



    		if((wd_wdth<300 && wd_ht<600) || (wd_wdth<600 && wd_ht<300)){ldelim}
    			el_lgrrg.css('width','95%');
    			el_lgrrg.css('height','95%');
    		{rdelim}else{ldelim}
    			if(wd_wdth>wd_ht){ldelim}
    				el_lgrrg.css('width','600px');
    				el_lgrrg.css('height','300px');	
    			{rdelim}else{ldelim}
    				el_lgrrg.css('width','300px');
    				el_lgrrg.css('height','600px');
    			{rdelim}
	   		{rdelim}
    		el_wdth_lgrrg=el_lgrrg.width();
    		el_ht_lgrrg=el_lgrrg.height();
    		el_ht_zhzh=el_zhzh.height();

     		if(el_ht_lgrrg+scrll_tp<bd_ht){ldelim}
    			el_lgrrg.offset({ldelim}top:(scrll_tp+wd_ht/2-el_ht_lgrrg/2),left:(wd_wdth/2-el_wdth_lgrrg/2){rdelim});
    		{rdelim}else{ldelim}
    			el_lgrrg.offset({ldelim}top:(bd_ht-el_ht_lgrrg),left:(wd_wdth/2-el_wdth_lgrrg/2){rdelim});
    		{rdelim} 
    		if(el_ht_zhzh+scrll_tp<bd_ht){ldelim}
    			el_zhzh.offset({ldelim}top:scrll_tp,left:0{rdelim});
    		{rdelim}else{ldelim}
    			el_zhzh.offset({ldelim}top:bd_ht-el_ht_zhzh,left:0{rdelim});
    		{rdelim}

    		
    	{rdelim}
    	
    	function lgrrgx(){ldelim}

    		flg_lgrrg=0;
    		el_zhzh.css('display','none');
    		el_lgrrg.css('display','none');
                text.text('拖动滑块验证');
                handler.addClass('handler_bg').removeClass('handler_ok_bg');
                handler.css({ldelim}'left': 0{rdelim});
            drag_bg.css({ldelim}'width': 0{rdelim});
            el_drg.css({ldelim}'color': '#fff'{rdelim});
            flg_drg=0;
    	{rdelim}
    	
        //拖动验证
		var x,  isMove = false
		
        var handler = el_drg.find('.handler');
        var drag_bg = el_drg.find('.drag_bg');
        var text = el_drg.find('.drag_text');

        var maxWidth = el_lgrrg.width() - handler.width();  //能滑动的最大间距
        if(maxWidth>260){ldelim}
        	maxWidth=220;
        {rdelim}

                //鼠标    按下时候的x轴的位置     指针在上下文移动时，移动距离大于0小于最大间距，滑块x轴位置等于鼠标移动距离
                handler
                        .on('mousedown',function(e){ldelim}
                                if(flg_drg==0){ldelim}
                                isMove = true;
                                x = e.pageX ;
                            {rdelim}
                        {rdelim})
                        .on('touchstart',function(e){ldelim}
                                if(flg_drg==0){ldelim}
                                    isMove = true;
                                    x = e.originalEvent.touches[0].pageX ;
                            {rdelim}
                        {rdelim})
                        .on('mousemove',function(e){ldelim}
                                if(flg_drg==0){ldelim}
                                    var _x = e.pageX - x;

                                    if(isMove){ldelim}
                                        if(_x >= 0 && _x <= maxWidth){ldelim}
                                            handler.css({ldelim}'left': _x{rdelim});
                                            drag_bg.css({ldelim}'width': _x{rdelim});
                                        {rdelim}else if(_x > maxWidth){ldelim}  //鼠标指针移动距离达到最大时清空事件
                                            dragOk();
                                        {rdelim}
                                    {rdelim}
                                {rdelim}
                        {rdelim})
                        .on('mouseup',function(e){ldelim}
                                if(flg_drg==0){ldelim}
                                    isMove = false;
                                    var _x = e.pageX - x;
                                    if(_x < maxWidth){ldelim} //鼠标松开时，如果没有达到最大距离位置，滑块就返回初始位置
                                        handler.css({ldelim}'left': 0{rdelim});
                                        drag_bg.css({ldelim}'width': 0{rdelim});
                                    {rdelim}
                                {rdelim}
                        {rdelim})
                        .on('touchmove',function(e){ldelim}
                           e.preventDefault();
                           if(flg_drg==0){ldelim}
                                   var _x = e.originalEvent.touches[0].pageX - x;

                                   if(isMove){ldelim}
                                       if(_x > 0 && _x <= maxWidth){ldelim}
                                           handler.css({ldelim}'left': _x{rdelim});
                                           drag_bg.css({ldelim}'width': _x{rdelim});
                                       {rdelim}else if(_x > maxWidth){ldelim}  //鼠标指针移动距离达到最大时清空事件
                                           dragOk();
                                       {rdelim}
                                   {rdelim}
                                {rdelim}
                        {rdelim})
                        .on('touchend',function(e){ldelim}
                           e.preventDefault();
                           if(flg_drg==0){ldelim}
                                   isMove = false;
                                   var _x = e.originalEvent.changedTouches[0].pageX - x;
                                   if(_x < maxWidth){ldelim} //鼠标松开时，如果没有达到最大距离位置，滑块就返回初始位置
                                       handler.css({ldelim}'left': 0{rdelim});
                                       drag_bg.css({ldelim}'width': 0{rdelim});
                                   {rdelim}
                                {rdelim}
                        {rdelim});
        
        
        //清空事件
        function dragOk(){ldelim}
	    flg_drg=1;
            handler.removeClass('handler_bg').addClass('handler_ok_bg');
            text.text('验证通过');
            el_drg.css({ldelim}'color': '#fff'{rdelim});
        {rdelim}
    	
	</script>

</body>
</html>
