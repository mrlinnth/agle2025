@servers(['localhost' => ['127.0.0.1'], 'prod' => ['runcloud@167.99.73.143']])

@task('deploy', ['on' => 'prod'])
    cd /home/runcloud/webapps/agle2025
    git restore .
    git pull
    composer install
    php artisan migrate --force
    pnpm install
    pnpm build
    php artisan optimize:clear
@endtask
