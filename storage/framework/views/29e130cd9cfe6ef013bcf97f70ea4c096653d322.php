<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('admin.public.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<ol class="breadcrumb " style="background-color: white">
    <li><a href="index.php?r=index/main">首页</a></li>
    <li><a href="index.php?r=menu/jiegou">自定义菜单</a></li>
    <li class="active">自定义</li>
</ol>
<!--文字回复-->
<div class="well">
    <div >

        <form class="form-horizontal" role="form" id="oneform" action="menu" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group col-lg-8">
                <label for="inputEmail3" class="col-sm-2 control-label" >选择用户</label>
                <div class="col-sm-6">
                    <select class="form-control" name="w_id" id="user">
                        <option value="0">选择用户</option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($v->w_id); ?>" ><?php echo e($v->w_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="form-inline col-lg-12 one two" >
                <label for="inputEmail3" class="col-sm-2 control-label" >菜单</label>

                <div class="col-sm-6 small">
                    <input type="text" class="form-control"  name="button[0][name]" id="inputEmail3" placeholder="请输入标题">

                </div>
                <button type="button" class="btn btn-default soncaidan ">子菜单</button>
                <button type="button" class="btn btn-primary delmenu ">移除</button>
            </div>
            <div class="form-group three">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">保存数据结构</button>
                    <button type="button" class="btn btn-default addcaidan">添加菜单</button>
                </div>
            </div>
        </form>

    </div>
</div>

</div>
<?php echo $__env->make('admin.public.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
<script>
    /*
     * 添加菜单
     * */
    $('.addcaidan').click(function(){
        var len=$('.two').length;
        if(len<3){
            var  str="<div class=\"form-inline col-lg-12 two\"> <label  class=\"col-sm-2 control-label\" >菜单</label> <div class=\"col-sm-6 small\"> <input type=\"text\" class=\"form-control\"  name=\"button["+len+"][name]\"  placeholder=\"请输入标题\"> </div> <button type=\"button\" class=\"btn btn-default soncaidan \">子菜单</button> <button type=\"button\" class=\"btn btn-primary delmenu \">移除</button></div>";
            $(this).parents('.three').prev().after(str);
        }else{
            layer.msg("主菜单最多三个！", {icon: 5});
        }
    })
    /*
     * 移除菜单
     * */
    $(document).on('click','.delmenu',function(){
        $(this).parent().remove();
    })
    /*
     * 添加子菜单
     * */
    $(document).on('click','.soncaidan',function(){
        var aaa=$(this).parent().find('.aaa').length;
        var ind=$('.two').length-1;
        if(aaa>4){
            layer.msg("子菜单最多五个！", {icon: 5});
        }else{
            var str="<div class=\" form-inline  aaa\" ><input class=\"form-control input-sm\" type=\"text\" name=\"button["+ind+"][sub_button]["+aaa+"][name]\" placeholder=\"子菜单名称\"><select class=\"form-control input-sm lei\" name=\"button["+ind+"][sub_button]["+aaa+"][type]\"> <option value=\"0\">请选择菜单类型</option><option value=\"view\">视图类型</option><option value=\"click\">按钮类型</option> </select><span></span><button type=\"button\" class=\"btn btn-sm btn-primary   sondel \">移除</button> </div>"
            $(this).parent().find('.small').append(str);
        }
    })
    /*
     * 移除此菜单
     * */
    $(document).on('click','.sondel',function(){
        $(this).parent().remove();
    })
    /*
     * 选择子菜单类型
     * */
    $(document).on('change','.lei',function(){
        var aaa=$(this).parent().parent().find('.aaa').length-1;
        var ind=$('.two').length-1;
        var lei=$(this).val();
        if(lei=="view"||lei==0){
            $(this).parent().find('span').html("<input class=\"form-control input-sm\" type=\"text\" name=\"button["+ind+"][sub_button]["+aaa+"][url]\" placeholder=\"url名称\">")
        }else{
            $(this).parent().find('span').html("<input class=\"form-control input-sm\" type=\"text\" id=\"disabledInput\" name=\"button["+ind+"][sub_button]["+aaa+"][key]\" value=\"V10\" placeholder=\"健名称\">")
        }
    })
    /*
     * 选择用户
     * */
    $('#oneform').submit(function(){
        var w_id=$('#user').val();
        if(w_id==0){
            layer.msg("请选择用户！", {icon: 5});
            return false;
        }
    })
</script>

