<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('.admin.public.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<ol class="breadcrumb " style="background-color: white">
    <li><a href="weiXin">首页</a></li>
    <li><a href="weiXin/create">公众号管理</a></li>
    <li class="active">公众号添加</li>
</ol>
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" action="weiXin">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label for="exampleInputEmail1">公众号账户</label>
        <input type="text" class="form-control" name="w_name" placeholder="请输入公众号账户">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Appid</label>
        <input type="text" class="form-control" name="appid" placeholder="请输入Appid">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Appsecret</label>
        <input type="text" class="form-control" name="appsecret" placeholder="请输入Appsecret">
    </div>
    <button type="submit" class="btn btn-block btn-primary ">添加</button>
</form>
</div>
<?php echo $__env->make('.admin.public.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>