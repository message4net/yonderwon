{include 'head.tpl'}

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 clean-superblock" id="contact">
                    <h2>Contact</h2>
                    
                    <form action="#" method="get" accept-charset="utf-8" class="contact-form">
                        <input type="text" name="name" id="contact-name" placeholder="Name" class="form-control input-lg">
                        <input type="email" name="email" id="contact-email" placeholder="Email" class="form-control input-lg">
                        <!--
                        <input type="toolbar" name="toolbar" id="contact-toolbar" class="form-control input-lg">
                        <textarea rows="10" name="message" id="contact-body" placeholder="Your Message" class="form-control input-lg">
                        
                        </textarea>
                        -->
                        <div id="contact-toolbar"></div>
                        <div name="message" id="contact-body">
                        
                        </div>
                        
                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-clean-one">Submit</button>
                        </div>                    
                    </form>
                </div>
            </div>        
        </div>

<style>
            .ck-editor__editable {ldelim}
                min-height: 200px;
            {rdelim}

            #contact-toolbar {ldelim}margin-top:15px{rdelim}
            #contact-body {ldelim}border-right:1px solid grey;border-left:1px solid grey;border-bottom:1px solid grey; {rdelim}
</style>

<script src="trth/js/ckeditor.js"></script>
<script type="text/javascript">

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


</script>
        
{include 'foot.tpl'}
