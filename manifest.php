<?php
$manifest = array(
    'name' => 'semlot_accounts',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin@pravmail.ru',
    'description' => 'Доработка модуля контрагентов (semlot)',
    'is_uninstallable' => true,
    'published_date' => '2016-08-06',
    'type' => 'module',
    'version' => '1.0.0',
);
$installdefs = array(
    'id' => 'semlot_accounts',
    'copy' => array(
        array(
            'from' => '<basepath>/source/copy',
            'to' => '.'
        ),
    ),
	'language' => array (
      array (
        'from' => '<basepath>/source/modules/application/language/ru_ru.lang.php',
        'to_module' => 'application',
        'language' => 'ru_ru',
      ),
      array (
        'from' => '<basepath>/source/modules/Accounts/language/ru_ru.lang.php',
        'to_module' => 'Accounts',
        'language' => 'ru_ru',
      ),
	),
);
