<?php
/**
* Plugin Name: Begrüßung nach Tageszeit
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [hallo] on any page ore post and greet your website visitors with the time of day in german.
* Author: WordTune
* Author URI: https://wordtune.me/
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/
//Say hallo in german
function hallo (){
$uhrzeit = date('H');
    if ($uhrzeit < 11) {
       $gruss = "Guten Morgen";
       }
elseif ($uhrzeit >= 11 && $uhrzeit < 16){
       $gruss = "Guten Tag";
       }
elseif ($uhrzeit >= 16 && $uhrzeit < 23){
       $gruss = "Guten Abend";
       }
  else {
       $gruss = "Guten Morgen";
       }
echo esc_attr( $gruss );

}
add_shortcode ( 'hallo', 'hallo' );
?>
