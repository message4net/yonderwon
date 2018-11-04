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
<td>密码:</td> 
<td ><input type="text" style="height:50%"/></td><td></td> 
</tr> 
<tr><td></td><td colspan="2"><div id="drag"><div class="drag_bg"></div><div class="drag_text">拖动滑块验证</div><div class="handler handler_bg"></div></div></td><td></td></tr>


<tr> <td></td>
<td colspan="2"><div style="text-align:center"><a id="lgrrgsbmttl" href="javascript:;">提交</a></div></td><td></td>	 
</tr> 
<tr><td></td><td><a id="lgrrgatl" href="javascript:;" onclick="logorreg(2);">注册</a></td><td><a href="javascript:;">忘记密码</a></td><td></td></tr>
</table> 

</div>

<style>
            .ck-editor__editable {ldelim}
                min-height: 200px;
            {rdelim}
            
            #contact-toolbar {ldelim}margin-top:15px{rdelim}
            #contact-body {ldelim}border-right:1px solid grey;border-left:1px solid grey;border-bottom:1px solid grey; {rdelim}
</style>
    
    <script src="trth/js/jquery.min.js"></script>
    <script src="trth/js/bootstrap.min.js"></script>
    <script src="trth/js/modernizr.js"></script>
    <script src="trth/js/ckeditor.js"></script>

    <script type="text/javascript">
    	el_hdr=$('#el_hdr');
    	el_drg=$('#drag');
    	flg_lgrrg=0;
    	function wbdtini(){ldelim}
    		//共用
    		wd_ht=$(window).height();
    		scrll_tp=$(document).scrollTop();
    		bd_ht=$(document.body).height();
    		
    		//置顶导航使用
    		el_ht_hd=el_hdr.height();
    		el_tp_hd=el_hdr.offset().top;
    		el_lft_hd=el_hdr.offset().left;
    		//alert('drgTop:'+el_drg.offset().top+',drgLeft:'+el_drg.offset().left);
    		//登陆/注册使用
    		wd_wdth=$(window).width();
    		el_lft_drg=el_drg.offset().left;
    		el_tp_drg=el_drg.offset().top;
    		$('.handler').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    		$('.drag_bg').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    		$('.drag_text').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    		
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
    		flg_lgrrg=flg;
    		el_lgrrg=$('#logorreg');
    		el_zhzh=$('#zhezhao');
    		//alert('drgTop1:'+el_drg.offset().top+',drgLeft1:'+el_drg.offset().left);
    		if(flg==1){ldelim}
    			$('#h3tl').html('登陆');
    			$('#lgrrgatl').html('注册');
    			$('#lgrrgatl').attr('onclick','logorreg(2)');
    		{rdelim}else if(flg==2){ldelim}
    			$('#h3tl').html('注册');
    			$('#lgrrgatl').html('登陆');
    			$('#lgrrgatl').attr('onclick','logorreg(1)');
    		{rdelim}
    		
    		el_zhzh.css('display','block');
    		el_lgrrg.css('display','block');
    		el_drg.css('display','block');
    		
    		el_lft_drg=el_drg.offset().left;
    		el_tp_drg=el_drg.offset().top;
    		$('.handler').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    		$('.drag_bg').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});
    		$('.drag_text').offset({ldelim}top:el_tp_drg,left:el_lft_drg{rdelim});

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
    			//alert(1);
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
    	{rdelim}
    	

//  上传适配器，格式官网上有，以一种Promise 的方式。Promise好像是有阻塞的意思在里面。
class UploadAdapter {ldelim}
    constructor(loader) {ldelim}
        this.loader = loader;
    {rdelim}
    upload() {ldelim}
        return new Promise((resolve, reject) => {ldelim}
            const data = new FormData();
            data.append('upload', this.loader.file);
            data.append('allowSize', 10);//允许图片上传的大小/兆
            $.ajax({ldelim}
                url: 'index.php?a=comm&m=upl',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data) {ldelim}
                    if (data.res) {ldelim}
                        resolve({ldelim}
                            default: data.url
                        {rdelim});
                    {rdelim} else {ldelim}
                        reject(data.msg);
                    {rdelim}

                {rdelim}
            {rdelim});
           
        {rdelim});
    {rdelim}
    abort() {ldelim}
    {rdelim}
{rdelim}

DecoupledEditor
        .create( document.querySelector( '#contact-body' ), {ldelim}
            language:"zh-cn"
        {rdelim})
        .then( editor => {ldelim}
            const toolbarContainer = document.querySelector( '#contact-toolbar' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            
            
           // 这个地方加载了适配器
            editor.plugins.get('FileRepository').createUploadAdapter = (loader)=>{ldelim}
                return new UploadAdapter(loader);
            {rdelim};
        {rdelim} )
        .catch( error => {ldelim}
            console.error( error );
        {rdelim} );
    	
 
    	//拖动验证
		var x,  isMove = false
		//var drag = $('#drag');
		
        var handler = el_drg.find('.handler');
        var drag_bg = el_drg.find('.drag_bg');
        var text = el_drg.find('.drag_text');
        var maxWidth = el_drg.width() - handler.width();  //能滑动的最大间距
        
        //鼠标按下时候的x轴的位置
        handler.mousedown(function(e){ldelim}
            isMove = true;
            //x = e.pageX - parseInt(handler.css('left'), 10);
            //x = e.pageX ;
            x=handler.pageX;
        {rdelim});
        
        //鼠标指针在上下文移动时，移动距离大于0小于最大间距，滑块x轴位置等于鼠标移动距离
        $(document).mousemove(function(e){ldelim}
            //var _x = e.pageX - x;
            var _x = x.pageX - x;
            if(isMove){ldelim}
                if(_x > 0 && _x <= maxWidth){ldelim}
                    handler.css({ldelim}'left': _x{rdelim});
                    drag_bg.css({ldelim}'width': _x{rdelim});
                {rdelim}else if(_x > maxWidth){ldelim}  //鼠标指针移动距离达到最大时清空事件
                    dragOk();
                {rdelim}
            {rdelim}
        {rdelim}).mouseup(function(e){ldelim}
            isMove = false;
            //var _x = e.pageX - x;
            var _x = x.pageX - x;
            if(_x < maxWidth){ldelim} //鼠标松开时，如果没有达到最大距离位置，滑块就返回初始位置
                handler.css({ldelim}'left': 0{rdelim});
                drag_bg.css({ldelim}'width': 0{rdelim});
            {rdelim}
        {rdelim});
        
        //清空事件
        function dragOk(){ldelim}
            handler.removeClass('handler_bg').addClass('handler_ok_bg');
            text.text('验证通过');
            el_drg.css({ldelim}'color': '#fff'{rdelim});
            handler.unbind('mousedown');
            $(document).unbind('mousemove');
            $(document).unbind('mouseup');
        {rdelim}
    	
	</script>

</body>
</html>