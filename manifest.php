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
    'version' => '1.1.0.2alpha',
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
      array (
        'from' => '<basepath>/source/modules/Contacts/language/ru_ru.lang.php',
        'to_module' => 'Contacts',
        'language' => 'ru_ru',
      ),
	),

  'vardefs' => array (
      array (
        'from' => '<basepath>/source/modules/Accounts/vardefs/vardefs.php',
          'to_module' => 'Accounts',
      ),
      array (
        'from' => '<basepath>/source/modules/Contacts/vardefs/vardefs.php',
          'to_module' => 'Contacts',
      ),
  ),

  'relationships' => array (
      array (
        'meta_data' => '<basepath>/source/relationships/accounts_contacts2MetaData.php',
      ),
  ),

  'layoutdefs' => array (
      array (
        'from' => '<basepath>/source/modules/Accounts/layoutdefs/layoutdefs.php',
          'to_module' => 'Accounts',
      ),
      array (
        'from' => '<basepath>/source/modules/Contacts/layoutdefs/layoutdefs.php',
          'to_module' => 'Contacts',
      ),
  ),
);
