<?PHP
if($logged) {

if ($action == '') {

$main_content .= '<center>Here is the list of the current characters that are in the shop!</center>';
$main_content .= '<BR>';
$main_content .= '<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD CLASS=white width="64px"><CENTER><B>Name</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Vocation</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Level</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Price</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Buy it</B></CENTER></TD></TR>';
$getall = $SQL->query('SELECT `id`, `name`, `price`, `status` FROM `sellchar` ORDER BY `id`')or die(mysql_error());
foreach ($getall as $tt) {
$namer = $tt['name'];
$queryt = $SQL->query("SELECT `name`, `vocation`, `level` FROM `players` WHERE `name` = '$namer'");
foreach ($queryt as $ty) {
if ($ty['vocation'] == 1) {
$tu = 'Sorcerer';
} else if ($ty['vocation'] == 2) {
$tu = 'Druid'; 
} else if ($ty['vocation'] == 3) {
$tu = 'Paladin'; 
} else if ($ty['vocation'] == 4) {
$tu = 'Knight';
} else if ($ty['vocation'] == 5) {
$tu = 'Sorcerer';
} else if ($ty['vocation'] == 6) {
$tu = 'Druid'; 
} else if ($ty['vocation'] == 7) {
$tu = 'Paladin'; 
} else if ($ty['vocation'] == 8) {
$tu = 'Knight';
}
$ee = $tt['name'];
$ii = $tt['price'];
$main_content .= '<TR BGCOLOR='.$config['site']['darkborder'].'><TD CLASS=black width="64px"><CENTER><B><a href="index.php?subtopic=characters&name='.$tt['name'].'">'.$tt['name'].'</a></B></CENTER></TD><TD CLASS=black width="64px"><CENTER><B>'.$tu.'</B></CENTER></TD><TD CLASS=black width="64px"><CENTER><B>'.$ty['level'].'</B></CENTER></TD><TD CLASS=black width="64px"><CENTER><B>'.$tt['price'].'</B></CENTER></TD><TD CLASS=black width="64px"><CENTER><B>
<form action="?subtopic=buychar&action=buy" method="POST">
<input type="hidden" name="char" value="'.$ee.'">
<input type="hidden" name="price" value="'.$ii.'">
<input type="submit" name="submit" value="Buy it"></B></CENTER></TD></TR></form>';
}
}
$main_content .= '</TABLE>';

}

if ($action == 'buy') {

$name = $_POST['char'];
$price = $_POST['price'];
$ceh = $SQL->query("SELECT `name` FROM `sellchar` WHERE `name` = '$name'");

if ($ceh) {

if ($name == '') {

$main_content .= '<b><center>Select a character to buy first/b>';

} else {

$user_premium_points = $account_logged->getCustomField('premium_points');
$user_id = $account_logged->getCustomField('id');

if ($user_premium_points >= $price) {

$check = $SQL->query("SELECT * FROM `sellchar` WHERE `name` = '$name'") or die(mysql_error());
$check1 = $SQL->query("SELECT * FROM `players` WHERE `name` = '$name'") or die(mysql_error());
$check2 = $SQL->query("SELECT `oldid` FROM `sellchar` WHERE `name` = '$name'");
foreach ($check as $result) {
foreach($check1 as $res) {
foreach($check2 as $ress) {

$oid = $ress['oldid'];
$main_content .= '<center>You bought<b> '.$name.' ( '.$res['level'].' ) </b>for <b>'.$result['price'].' points.</b><br></center>';
$main_content .= '<br>';
$main_content .= '<center><b>The character is in your account, have fun!</b></center>';
$execute1 = $SQL->query("UPDATE `accounts` SET `premium_points` = `premium_points` - '$price' WHERE `id` = '$user_id'");
$execute2 = $SQL->query("UPDATE `players` SET `account_id` = '$user_id' WHERE `name` = '$name'");
$execute2 = $SQL->query("UPDATE `accounts` SET `premium_points` = `premium_points` + '$price' WHERE `id` = '$oid'");
$execute3 = $SQL->query("DELETE FROM `sellchar` WHERE `name` = '$name'");

}
}
}

} else {

$main_content .= '<center><b>You dont have enought premium points</b></center>';

}

} 

} else {
$main_content .= '<center><b>Character cannot be buyed</b></center>';
}
}

} else {

$main_content .= '<center>Please log in first!</center>';
}
?>