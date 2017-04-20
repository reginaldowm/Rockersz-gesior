<?PHP
    if($logged) {
        $main_content .= '<center><b><h3>Adicionar novo character para venda</h3></center></b><br>';
        $main_content .= 'If you put your character on sale anyone can buy it, you will lose acces to that character and you wont be able to log in with that character until someone buys it, you can also delete your offer by talking to an admin!<br><b>when someone buys your character you will get the price in points!</b>';
        $main_content .= '<br>';
        $main_content .= '<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD CLASS=white width="64px"><CENTER><B>Sell your characters</B></CENTER></TD></TR>';
        $main_content .= '<TR BGCOLOR='.$config['site']['darkborder'].'><TD CLASS=black width="64px"><B></B>';
       
        $players_from_logged_acc = $account_logged->getPlayersList();
                           
                                $players_from_logged_acc->addOrder(new SQL_Order(new SQL_Field('name'), SQL_Order::ASC));
                                $main_content .= '<form action="" method="post"><select name="char">';
                                foreach($players_from_logged_acc as $player)
                                {
                                    $main_content .= '<option>'.$player->getName().'</option>';
                                }
       
        $main_content .= '</select> Selecione o character que deseja vender<br>';
        $main_content .= '<input type="text" name="price" maxlength="10" size="4" > Informe o valor do character<br>';
        $main_content .= '<input type="submit" name="submit" value="Sell character"></TD></TR>';
                            $main_content .= '</form></table>';
                           
                            if (isset($_POST['submit'])) {
                               
                            $char = stripslashes($_POST['char']);
                            $price = stripslashes($_POST['price']);
                           
                            if ($char && $price) {

                                if(is_numeric(trim($_POST['price']))) {
                               
                                        $check2 = $SQL->query("SELECT * FROM `players` WHERE `name` = '$char'") or die(mysql_error());
                                foreach ($check2 as $re) {
                                    $voc = $re['vocation'];
                                    $oid = $re['account_id'];
                                }
                                $check1 = $SQL->query("UPDATE `players` SET `account_id` = 1 WHERE `name` = '$char'") or die(mysql_error());
                                $check3 = $SQL->query("INSERT INTO `sellchar` VALUES ('','$char','$voc','$price','1','$oid')");
                                $main_content .= '<b><center>Character adicionado a venda com sucesso, Obrigado!</b></center>';
                                header("Location: index.php?subtopic=buychar");
                               
                                } else {
                           
                                $main_content .= '<b><center>Preço em numeros!!</b></center>';
                                }
                               
                            } else {
                                    $main_content .= '<b><center>Fill out all fields!</b></center>';
                            }
                           
                        }
    } else {
        $main_content .= '<b><center>Please log in first!</b></center>';
    }
?>