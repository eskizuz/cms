<?php

return [
    'loader'         => [
        'namespaces' => [
            // Here you can setup your new vendor namespace, example:
            // 'Zend' => APPLICATION_PATH . '/../vendor/zendframework/zendframework/library/Zend',
        ],
    ],

    'assets'         => [
        'js' => [
            'assets/admin/js/library.js',
            'assets/admin/js/rotation.js',
            'assets/admin/js/main.js',

            // just comment two lines below if you don't need pages transitions via AJAX
            //'vendor/history/native.history.js',
            //'assets/admin/js/ajax.js',
        ],
    ],

    // Language for admin dashboard.
    // Values: ru, en.
    // All translations contains in /app/modules/Cms/admin_translations in files with names ru.php, en.php.
    // To add another language you can create in this directory new file with name de.php and set 'admin_language' => 'de' it will works.
    'admin_language' => 'ru',
];