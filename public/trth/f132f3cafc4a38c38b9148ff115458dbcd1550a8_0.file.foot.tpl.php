<?php
/* Smarty version 3.1.32, created on 2018-10-05 10:58:16
  from '/Users/fanyongdi/Documents/git/yonderwon/tmplt/trth/foot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb727a89d2779_80661152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f132f3cafc4a38c38b9148ff115458dbcd1550a8' => 
    array (
      0 => '/Users/fanyongdi/Documents/git/yonderwon/tmplt/trth/foot.tpl',
      1 => 1538729666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb727a89d2779_80661152 (Smarty_Internal_Template $_smarty_tpl) {
?>    </div>

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
<tr> <td></td>
<td colspan="2"><div style="text-align:center"><a id="lgrrgsbmttl" href="javascript:;">提交</a></div></td><td></td> 
</tr> 
<tr><td></td><td><a id="lgrrgatl" href="javascript:;" onclick="logorreg(2);">注册</a></td><td><a href="javascript:;">忘记密码</a></td><td></td></tr>
</table> 

</div>

<style>
            .ck-editor__editable {
                min-height: 200px;
            }
            
            #contact-toolbar {margin-top:15px}
            #contact-body {border-right:1px solid grey;border-left:1px solid grey;border-bottom:1px solid grey; }
</style>
    
    <?php echo '<script'; ?>
 src="<?php echo APP_NAME;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo APP_NAME;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo APP_NAME;?>
/js/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo APP_NAME;?>
/js/ckeditor.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
    	el_hdr=$('#el_hdr');
    	flg_lgrrg=0;
    	function wbdtini(){
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
    	}
    	
    	wbdtini();
    	
    	$(window).on('resize scroll',function(){
    		wbdtini();
    		if(scrll_tp>=el_ht_hd){
    			if(2*el_ht_hd<wd_ht && 2*el_ht_hd<bd_ht){
    				el_hdr.offset({top:scrll_tp,left:0});
    			}
    		}else{
    			el_hdr.offset({top:0,left:0});
    		}	
    		if(flg_lgrrg!=0){
    			logorreg(flg_lgrrg);
    		}
    	});

    	function logorreg(flg){
    		flg_lgrrg=flg;
    		el_lgrrg=$('#logorreg');
    		el_zhzh=$('#zhezhao');
    		
    		if(flg==1){
    			$('#h3tl').html('登陆');
    			$('#lgrrgatl').html('注册');
    			$('#lgrrgatl').attr('onclick','logorreg(2)');
    		}else if(flg==2){
    			$('#h3tl').html('注册');
    			$('#lgrrgatl').html('登陆');
    			$('#lgrrgatl').attr('onclick','logorreg(1)');
    		}
    		
    		el_zhzh.css('display','block');
    		el_lgrrg.css('display','block');

    		if((wd_wdth<300 && wd_ht<600) || (wd_wdth<600 && wd_ht<300)){
    			el_lgrrg.css('width','95%');
    			el_lgrrg.css('height','95%');
    		}else{
    			if(wd_wdth>wd_ht){
    				el_lgrrg.css('width','600px');
    				el_lgrrg.css('height','300px');	
    			}else{
    				el_lgrrg.css('width','300px');
    				el_lgrrg.css('height','600px');
    			}
	   		}
    		el_wdth_lgrrg=el_lgrrg.width();
    		el_ht_lgrrg=el_lgrrg.height();
    		el_ht_zhzh=el_zhzh.height();

     		if(el_ht_lgrrg+scrll_tp<bd_ht){
    			//alert(1);
    			el_lgrrg.offset({top:(scrll_tp+wd_ht/2-el_ht_lgrrg/2),left:(wd_wdth/2-el_wdth_lgrrg/2)});
    		}else{
    			el_lgrrg.offset({top:(bd_ht-el_ht_lgrrg),left:(wd_wdth/2-el_wdth_lgrrg/2)});
    		} 
    		if(el_ht_zhzh+scrll_tp<bd_ht){
    			el_zhzh.offset({top:scrll_tp,left:0});
    		}else{
    			el_zhzh.offset({top:bd_ht-el_ht_zhzh,left:0});
    		}

    		
    	}
    	
    	function lgrrgx(){
    		flg_lgrrg=0;
    		el_zhzh.css('display','none');
    		el_lgrrg.css('display','none');
    	}
    	

//  上传适配器，格式官网上有，以一种Promise 的方式。Promise好像是有阻塞的意思在里面。
class UploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }
    upload() {
        return new Promise((resolve, reject) => {
            const data = new FormData();
            data.append('upload', this.loader.file);
            data.append('allowSize', 10);//允许图片上传的大小/兆
            $.ajax({
                url: 'loadImage',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.res) {
                        resolve({
                            default: data.url
                        });
                    } else {
                        reject(data.msg);
                    }

                }
            });
           
        });
    }
    abort() {
    }
}

DecoupledEditor
        .create( document.querySelector( '#contact-body' ), {
            language:"zh-cn"
        })
        .then( editor => {
            const toolbarContainer = document.querySelector( '#contact-toolbar' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            
           // 这个地方加载了适配器
            editor.plugins.get('FileRepository').createUploadAdapter = (loader)=>{
                return new UploadAdapter(loader);
            };
        } )
        .catch( error => {
            console.error( error );
        } );
    	
    	
	<?php echo '</script'; ?>
>

</body>
</html><?php }
}
