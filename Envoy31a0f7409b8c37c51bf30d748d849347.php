<?php $__container->servers(['node1' => ['root@104.248.187.0'],'node2'=>['root@206.189.216.51']]); ?>

<?php $__container->startTask('deploy', ['on' => 'node1','node2'],'parallel'=>true); ?>
    cd /var/www
    git pull origin master
    composer install -no-dev
    php artisan migrate --force
<?php $__container->endTask(); ?>