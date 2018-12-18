{include 'head.tpl'}

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 clean-superblock" id="contact">
                    <h2>联系我们</h2>
                    
	                <ul id="rtebtn_ul" class="nav nav-tabs">
							<li><i class="fa fa-file-image-o" title="点击上传本地图片">
								<input type="file" name="file" style="width:20px;opacity:0;margin-top:-30px" />
							</i></li>
						<li style="margin-top:-11px" title="点击后，下方输入网络图片地址"><a id="rtebtn_li_netimg" href="javascript:;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></a></li>
						<li title="点击上传txt本文"><i class="fa fa-file-text-o"></i></li>
					</ul>

					<div class="row">
					  <div class="col-sm-11">
					    <div class="header" style="background-color:#f1f1f1"> 
						    <div class="row" >
							    <div id="rtefnc_netimg" class="col-xs-11 col-sm-11" style="display:none">如有需要，请将鼠标移动至上方图标，根据提示操作2</div>
							    <div id="rtefnc_tip" class="col-xs-11 col-sm-11">如有需要，请将鼠标移动至上方图标，根据提示操作</div>
						    </div>
					     </div> 
					  </div>
					</div>

	                <textarea rows="10" name="message" id="contact-body" placeholder="Your Message" class="form-control input-lg" style="margin-top:15px"></textarea>
	                <div class="buttons clearfix" style="margin-top:15px">
	                    <button type="submit" class="btn btn-xlarge btn-clean-one" style="width:100%">Submit</button>
	                </div>     
	                <input type='hidden' name='tp' value='0' />   
                
                </div>
            </div>        
        </div>
<script type="text/javascript">

</script>

        
{include 'foot.tpl'}
