<?php
namespace VendorName\MainProjectName\PluginName\Providers;
use Illuminate\Support\ServiceProvider; // sử dụng ServiceProvider của Laravel để mở rộng
class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');//load file route lên
        $this->loadViewsFrom(__DIR__.'/../../resources/views','plugin-name');//load thư mục view
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}