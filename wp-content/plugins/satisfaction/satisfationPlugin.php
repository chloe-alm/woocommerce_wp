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


// /**
//  * @package sa
//  * @version 1.7.2
//  */



// class Satisfaction
// {
//     public function __construct()
//     {

//         include_once('QuestionWidget.php');

//         register_activation_hook(__FILE__, array('Satisfaction', 'install'));
//         register_deactivation_hook(__FILE__, array('Satisfaction', 'desactivate'));
//         register_uninstall_hook(__FILE__, array('Satisfaction', 'uninstall'));

//         add_action('widgets_init', array($this, 'declarerWidget'));
//         add_action('admin_menu', array($this, 'declareAdmin'));
//     }

//     public static function install()
//     {
//         Satisfaction::install_db();
//     }
//     public static function uninstall()
//     {
//         Satisfaction::uninstall_db();
//     }

//     public static function desactivate()
//     {
//     }

//     public static function install_db()
//     {
//         global $wpdb;
//         $wpdb->query("CREATE TABLE IF NOT EXISTS " . $wpdb->prefix . "reponse_question (id int(11) AUTO_INCREMENT PRIMARY KEY, reponse tinyint(1), idUser int(11));");
//     }

//     public static function uninstall_db()
//     {
//         global $wpdb;
//         $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "reponse_question;");
//     }

//     function declarerWidget()
//     {
//         register_widget('QuestionWidget');
//     }

//     public function declareAdmin()
//     {
//         add_menu_page('Configuration du questionnaire', 'Questionnaire', 'manage_options', 'question', array($this, 'menuHtml'));
//         add_submenu_page('question', 'Réinitialisation du questionnaire', 'Réinitialisation', 'manage_options', 'reinit', array($this, 'menuHtmlInit'));
//     }

//     public function menuHtml()
//     {
//         echo '<h1>' . get_admin_page_title() . '</h1>';
//         echo '<p>Page du plugin Questionnaire !!! </p>';
//         echo $this->resume();
//     }

//     public function menuHtmlInit()
//     {
//         global $wpdb;
//         echo '<h1>Réinitialisation</h1>';
//         echo '<p>Cliquer sur le bouton suivant pour réinitialiser le questionnaire</p>';
//         echo "<form method='POST' action='#'>
//         <input type='submit' name='reinit'>
//         </form>
//         ";
//         if (isset($_POST['reinit'])) {
//             $query = 'TRUNCATE TABLE ' . $wpdb->prefix . 'reponse_question';
//             $wpdb->query($query);
//             echo "réinitialisation !!!";
//         }
//     }

//     public function resume()
//     {
//         global $wpdb;
//         $query = "SELECT * FROM " . $wpdb->prefix . "reponse_question";
//         $resultats = $wpdb->get_results($query);
//         $oui = 0;
//         $non = 0;
//         foreach ($resultats as $rep) {
//             if ($rep->reponse == 1)
//                 $oui++;
//             else
//                 $non++;
//         }
//         return "Oui : $oui, Non : $non";
//     }
// }

// new Satisfaction();

?>






<!-- 
 // ----------Test de hook ACTION ------
// function bonjour(){ 
//     echo '<h2 id="titre">Êtes-vous satisfait.es ?</h2>
//     <form id="enquete">
//         <div id="ok">
//             <input type="checkbox" id="oui" name="oui">
//             <label for="oui">Ah oui complètement !</label>
//         </div>
//         <div id="ko">
//             <input type="checkbox" id="meteorite" name="meteorite">
//             <label for="meteorite">Rien de mieux que les météorites !</label>
//         </div>
//     </form>
//     <style>
//         #titre {
//             color:white;
//         }
//         #enquete {
//             display:flex;
//             flex-direction:column;
//             color:white;
//         }
//     </style>
//     '; 
//  } 
//  add_action( 'init', 'bonjour');


//  function fonctionFormSatisfaction($param, $content) {
//     return '<h1>' . $content . '</h1>';
//  }
//  add_shortcode('grandTitre', 'fonctionGrandTitre');

 -->

