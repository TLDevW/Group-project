<?php
spl_autoload_register(function ($class_name)
{
    $directorys = array(
        'Meteo/',
        'Cinema/',
        'Page/',
        'CafeConcert/',
        'Terrasse/',
        'Festivals/',
        'Balade/',
        'Cyclo/',
        'Trombi/'

    );

    //for each directory
    foreach ($directorys as $directory) {
        //see if the file exsists
        if (file_exists($directory . $class_name . '.php')) {
            include_once($directory . $class_name . '.php');
            //only require the class once, so quit after to save effort (if you got more, then name them something else
            return;
        }
    }
});