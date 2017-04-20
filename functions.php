remove_action('wp_head', 'wp_generator');
add_filter( 'show_admin_bar', '__return_false' );
define('DISALLOW_FILE_EDIT', true); 
<<<<<<< HEAD

Удаление всех редакций:
global $wpdb;
$wpdb->query(
	"
	DELETE a,b,c FROM $wpdb->posts a  
	LEFT JOIN $wpdb->term_relationships b ON (a.ID = b.object_id)  
	LEFT JOIN $wpdb->postmeta c ON (a.ID = c.post_id)  
	WHERE a.post_type = 'revision'
	"
);
// как только редакции исчезнут, код нужно удалить
=======
>>>>>>> origin/wordpress
