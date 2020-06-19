<?php 
 /*
 Plugin Name: satisfactionPlugin
 Plugin URI: http://satisfactionPlugin.com/
 Description: Ce plugin va satisfaire le monde.
 Version: 1.9.4
 Author: NOUS 
 Author URI: http://satisfactionPlugin.com/
 License: GPL3
 Text Domain: satisfactionPlugin
 */

 // Action Bonjour 
function bonjour(){ 
    echo '<h2 id="titre">Êtes-vous satisfait.es ?</h2>
    <form id="enquete">
        <div id="ok">
            <input type="checkbox" id="oui" name="oui">
            <label for="oui">Ah oui complètement !</label>
        </div>
        <div id="ko">
            <input type="checkbox" id="meteorite" name="meteorite">
            <label for="meteorite">Rien de mieux que les météorites !</label>
        </div>
    </form>
    <style>
        #titre {
            color:white;
        }
        #enquete {
            display:flex;
            flex-direction:column;
            color:white;
        }
    </style>
    '; 
 } 
 add_action( 'init', 'bonjour');


 function fonctionFormSatisfaction($param, $content) {
    return '<h1>' . $content . '</h1>';
 }
 add_shortcode('grandTitre', 'fonctionGrandTitre');

?>

