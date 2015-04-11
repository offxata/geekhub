<?php
//Настройки панели администрирования
//Регистрация функции настроек
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}
// Добавление настроек в меню страницы
function add_settings_page() {
add_menu_page( __( 'Опции темы' ), __( 'Опции темы' ), 'manage_options', 'settings', 'theme_settings_page');
}
//Добавление действий
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );
//Сохранение настроек
function theme_settings_page() { 
global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>
<div>
<h2 id="title">Настройка темы</h2>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong>Настройки сохранены</strong></p>
</div>
<?php endif; ?>
<form method="post" action="options.php">
<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>
<table>
<tr valign="top">
<td>Logo</td>
<td><input id="theme_settings[custom_logo]" type="text" size="38" name="theme_settings[custom_logo]" value="<?php esc_attr_e( $options['custom_logo'] ); ?>" /></td>
<td><label> - Пропишите url новой картинки </label></td>
</tr>
</table>
<p><input name="submit" id="submit" class="button button-primary" value="Сохранить" type="submit"></p>
</form>
</div>
<?php } ?>