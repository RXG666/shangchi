@extends('Admin.AdminPublic.public')
@section('admin')
<html>
 <head></head>

 <body>
  
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="margin-left:400px"> 
   <div class="panel panel-default bk-bg-white"> 
    <div class="panel-heading bk-bg-white"> 
     <h6><i class="fa fa-indent red"></i>添加管理员</h6> 
     <div class="panel-actions"> 
      <a href="#" class="btn-minimize"><i class="fa fa-caret-up"></i></a> 
     
     </div> 
    </div> 
    <div class="panel-body"> 
     <form action="/adminsuser" method="post" enctype="multipart/form-data" class="form-horizontal "> 
      
      <div class="form-group"> 
       <label class="col-md-3 control-label" for="text-input">名字</label> 
       <div class="col-md-9"> 
        <input type="text" id="text-input" name="name" class="form-control" placeholder="Text" /> 
        <span class="help-block">This is a help text</span> 
       </div> 
      </div> 
      <div class="form-group"> 
       <label class="col-md-3 control-label" for="text-input">密码</label> 
       <div class="col-md-9"> 
        <input type="text" id="text-input" name="password" class="form-control" placeholder="Text" /> 
        <span class="help-block">This is a help text</span> 
       </div> 
      </div> 
    
      
     
        <div class="form-group">
          <label class="col-md-3 control-label" for="file-input">分类图片</label>
          <div class="col-md-9">
            <input type="file" id="file-input" name="img">
          </div>
        </div>
                  
                    {{csrf_field()}}
      
      <input type="submit" class="bk-margin-5 btn btn-primary" value="提交">
  
      <br /> 
     </form> 
    </div> 
   </div> 
   <div class="panel panel-default bk-bg-white"> 
   
    
   </div> 
  </div>

 </body>

</html>
@endsection
@section('title','分类添加')