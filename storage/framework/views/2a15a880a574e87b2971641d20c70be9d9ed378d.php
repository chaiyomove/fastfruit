<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <article>
        <h2><?php echo e($post->title); ?></h2>
        <?php echo e($post->summary); ?>

    </article>
<?php echo e(isset($msg)?$msg:null); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php echo e($posts->links()); ?>