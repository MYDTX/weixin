<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('.admin.public.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<ol class="breadcrumb " style="background-color: white">
    <li><a href="index.php?r=index/main">首页</a></li>
    <li><a href="index.php?r=index/show">公众号管理</a></li>
    <li class="active">公众号展示</li>
</ol>
<table class="table table-hover table-striped table-bordered">
    <tr>
        <th class="text-center">编号</th>
        <th class="text-center">微信号</th>
        <th class="text-center">appid</th>
        <th class="text-center">appsecret</th>
        <th class="text-center">操作</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr class="text-center">
        <td><?php echo e($v->w_id); ?></td>
        <td><?php echo e($v->w_name); ?></td>
        <td ><?php echo e($v->appid); ?></td>
        <td><?php echo e($v->appsecret); ?></td>
        <td>
            <a href="weiXin/<?php echo e($v->w_id); ?>/edit" class="glyphicon glyphicon-pencil"></a>
            <a  class="glyphicon glyphicon-minus del" w_id="<?php echo e($v->w_id); ?>"></a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
</div>
<?php echo $__env->make('.admin.public.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
<script>
    $('.del').click(function(){
        _this=$(this);
        var w_id=$(this).attr('w_id');
        $.post("weiXin/"+w_id,{_method:'delete','_token':"<?php echo e(csrf_token()); ?>"},function(msg){
            if(msg==1){
                _this.parents('tr').remove();
                layer.msg("删除成功！", {icon: 6});
            }else{
                layer.msg("删除失败！", {icon: 5});
            }
        })
    })
</script>
