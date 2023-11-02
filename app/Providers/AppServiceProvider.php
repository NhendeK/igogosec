<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('customInput', function ($expression) {
            list($type, $name, $id, $placeholder) = array_map('trim', explode(',', $expression));
            return "<?php echo 
                '<div>
                    <label for=\"' . $id . '\" class=\"block mb-2 font-bold text-sm text-green-500 dark:text-white text-italic\">' . $placeholder . '</label>
                    <input type=\"' . $type . '\" id=\"' . $id . '\" name=\"' . $name . '\" class=\"bg-gray-50 border border-gray-300 text-blue-500 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold\" placeholder=\"' . $placeholder . '\" required>
                </div>'; 
            ?>";
        });

        Blade::directive('selectStart', function($expression){
            list($name, $id, $placeholder) = array_map('trim', explode(',', $expression));
            return "<?php echo 
                '<div>
                   
                     <label for=\"' . $id . '\" class=\"block mb-2 font-bold text-sm text-green-500 dark:text-white\">' . $placeholder . '</label>
                <select id=\"' . $name . '\" class=\"bg-gray-50 border border-gray-300 text-blue-500 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold\">

                </div>'; 
            ?>";
        });

        Blade::directive('endSelect', function(){
            return "<?php echo '</select>' ?>";
        });


        Blade::directive('submitButton', function($expression){
            list($type, $placeholder) = array_map('trim', explode(',', $expression));
            return "<?php echo  '
                <button 
        type=\"' . $type .'\" 
        class=
        \"
            text-black 
            bg-white
            hover:bg-green-500 focus:ring-4 
            focus:outline-none 
            focus:ring-blue-300  
            rounded-lg 
            w-full 
            sm:w-auto 
            px-5 
            py-2.5 
            text-center 
            dark:bg-blue-600 
            dark:hover:bg-blue-700 
            dark:focus:ring-blue-800 
            font-bold 
            text-xl
            border-2
            hover:text-white
        \">
            Register Student
    </button>
            ' ?>";
        });
    }
}
