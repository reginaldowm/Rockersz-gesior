<?PHP
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/APAC-DCT/Downloads/Otxserver-New-master/";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(1 => 'Venore', 2 => 'Thais', 3 => 'Kazordoon', 4 => 'Carlin', 5 => 'Ab Dendriel', 6 => 'Rookgaard', 7 => 'Liberty Bay', 8 => 'Port Hope', 9 => 'Ankrahmun', 10 => 'Darashia', 11 => 'Edron', 12 => 'Svargrond', 13 => 'Yalahar', 14 => 'Farmine', 15 => 'Gray Beach', 16 => 'Roshamuul', 30 => 'Rathleton');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/outfit.php';
$config['site']['addons_images_url'] = 'images/addons/';
$config['site']['addons_images_extension'] = '.gif';
$config['site']['mounts_images_url'] = 'images/mounts/';
$config['site']['mounts_images_extension'] = '.gif';
$config['site']['item_images_url'] = '/images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';

# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 3065;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'] = array(6);
$config['site']['max_players_per_account'] = 4;


# Emails Config
$config['site']['lost_acc'] = true; # LOST ACC? SIM (TRUE) OU NÃO (FALSE)
$config['site']['send_emails'] = false; # ENVIAR EMAILS? SIM (TRUE) OU NÃO (FALSE)
$config['site']['mail_address'] = "gabriel.strix@gmsil.com"; # SEU EMAIL (TEM QUE SER GMAIL)
$config['site']['smtp_enabled'] = true; # NÃO MUDAR
$config['site']['smtp_host'] = "smtp.gmail.com"; # COLOCAR 'smtp.gmail.com'
$config['site']['smtp_port'] = 25; # tenta a 25 mesmo, se não der tenta 465
$config['site']['smtp_auth'] = true; # não mudar
$config['site']['smtp_user'] = "gabriel.strix@gmsil.com";  # SEU EMAIL (TEM QUE SER GMAIL)
$config['site']['smtp_pass'] = "wmnhw8i6";  # sua senha


# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 1;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = false;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = false;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 1;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 9999;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiacom';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

#SHOP GUILD
$config['site']['shopguild_system'] = 1;
$config['site']['access_adminguild_panel'] = 8347;

############################
## PagSeguro/Paypal Email ##
############################
$config['pagseguro']['email'] = 'Thiago_47@hotmail.com'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'Thiago_47@hotmail.com'; ## EMAIL PAYPAL ##

// PagSeguro automatico by Matheus e Victor for TibiaKing.com
// Seu email cadastrado no PagSeguro
$config['pagseguro']['email'] = 'Thiago_47@hotmail.com';

// Nome do produto
$config['pagseguro']['produtoNome'] = 'Premium Points';

// Valor de cada ponto
// Exemplo de valores:
// 100 = R$ 1,00
// 250 = R$ 2,50
$config['pagseguro']['produtoValor'] = '100';

## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 0;
$config['site']['caixa'] = 0;
$config['site']['bonusPoints'] = 0;


#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#
$config['site']['CaixaCont'] = 1;"
MEIO DE PAGAMENTO DESATIVADO
"; 

# Seções Shop Gesior Premium
$config['site']['shop_categories'] = array(
	#ITEMS VIPS
	"Items Vips" => array("id" => 1, "description" => "Items donates que so podem ser adquiridos por shop coins.", "new" => 0, "enabled" => true),
	#ITEMS NORMAIS
	"Itens" => array("id" => 2, "description" => "Items para te ajudar na sua jogarda..","new" => 0, "enabled" => true),
    #UTILITARIOS
    "Utilitarios" => array("id" => 3, "description" => "Torne-se diferenciado.","new" => 0, "enabled" => true),
	#Montarias
    "Montarias" => array("id" => 4, "description" => "Torne-se diferenciado.","new" => 0, "enabled" => true),
);
$config['site']['event_count'] = array("Server Open:" => array("Sat", "20:00"), 
                                );