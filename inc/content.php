
<?php  
$page = $_GET["page"];
$name = $_GET["name"];
require 'inc/database.php';

switch ( $page ) {

	// work page
	case 'work':

		// start container
		echo "<div class=\"container\">";
		
		// template selector
		switch ( $template ) {
			case 'photo':
				echo '<img class="scale-with-grid" src="img/'.$image.'"><h3>'.$title.'</h3><p>'.$body.'</p>';
				echo '<img class="scale-with-grid" src="img/'.$image.'"><h3>'.$title.'</h3><p>'.$body.'</p>';
				break;
			
			default:
				if ( is_null( $name ) ) {  
					echo "<img src='http://www.offthegridnews.com/wp-content/uploads/2013/03/chickens.jpg'><br>";
					echo "nothing but us chickens here!";
				} else {
					echo "<img src=\"img/" . $image . "\"><br>";
					echo "<h3>".$title."</h3>";
					echo $body;
				}
				echo "</div>";
				break;
		}
		break;		
	
	default:
		echo '
			<div class="container">
				<h3>Simple Variable Pass</h3>
				<ul>
					<li>pulling info from a database file</li>
					<li>passing a variable to <a href="work"><em>work.php</em></a></li>
					<li>no separate files</li>
				</ul>
			</div>
		';
		break;
}
