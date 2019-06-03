@servers(['node1' => ['root@node1'],'node2'=>['root@node2']])

@task('deploy', ['on' => ['node1','node2'],'parallel'=>true])
    cd /var/www/DeveloperLaravel
    git pull origin master
    composer install -no-dev
    php artisan migrate --force
@endtask