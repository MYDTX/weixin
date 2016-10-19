<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{URL::asset('/')}}">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/layer/skin/layer.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="css/layer/layer.js"></script>
    <style>
        #main{
            margin-top: 100px;
            opacity:0.9;
        }
    </style>
    <title>登录</title>
</head>
<body style="background-image: url('1.jpg');background-size:100% 100%;background-repeat:no-repeat; background-attachment: fixed;">
<div class="container" >
    <div class="row clearfix">
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column " id="main" >
            <div class="page-header">
                <h1>
                    微信<small>登录</small>
                </h1>
            </div>
            <form role="form" id="loginform">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>账户</label><input class="form-control"  name="u_name" type="text" />
                </div>
                <div class="form-group">
                    <label>密码</label><input class="form-control" name="u_pwd"  type="password" />
                </div>
                <div class="checkbox">
                </div> <button type="button" class="btn btn-primary btn-block" id="login">登录</button>
            </form>
        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
<input type="hidden" id="message" value="{{session('message')}}">
</body>
</html>
<script>
    var message=$('#message').val();
    if(message!=""){
        layer.msg(message, {icon: 6});
    }
    $('#login').click(function(){
        var data=$('#loginform').serialize();
        $.post('admin',data,function(msg){
            if(msg==1){
                location.href="weiXin";
            }else{
                layer.msg('账户或密码失败！', {icon: 5});
            }
        })
    })
</script>