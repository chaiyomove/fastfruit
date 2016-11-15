<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Laravel AJAX Pagination with JQuery</title>

</head>
<body>

    <h1>Posts</h1>

    <div class="posts">
        <?php echo $__env->make('posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>

    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    });

    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });

    function getPosts(page) {
        $.ajax({
            url : '<?php echo e(url('blog')); ?>?page=' + page,
            type: 'GET',
            dataType: 'json'
        }).done(function (data) {
            $('.posts').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }

    </script>

</body>
</html>
