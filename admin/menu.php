<?

IncludeModuleLangFile(__FILE__);

$aMenu = array(
	'parent_menu' => 'global_menu_services',
	'section'     => 'property_proplink',
	'sort'        => 99999,
	'items_id'    => 'property_proplink_menu',
	'text'        => GetMessage('property.proplink_TITLE'),
	'url'         => '/bitrix/admin/property.proplink_sync.php',
);

return $aMenu;


?>
