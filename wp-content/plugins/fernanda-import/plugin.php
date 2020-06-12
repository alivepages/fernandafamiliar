<?php
/*
Plugin Name: Fernanda Familiar Import
Plugin URI:
Description: Importa posts desde el sitio fernandafamiliar.soy
// TODO: extender para imprtar desde cualquier blog
Version: 0.0.1
Author: Joel F
*/

/**
 * Agrega el plugin al menu de WP
 *
 */
 function fernanda_import(){
	 $page_title = 'Fernanda Familiar Import';
	 $menu_title = 'Fernanda Familiar Import';
	 $capability = 'manage_options';
	 $menu_slug  = 'extra-post-info';
	 $function   = 'fernanda_import_ejec';
	 $icon_url   = 'dashicons-media-code';
	 $position   = 4;
	 add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	}

	/**
	 * ejecucion del plugin
	 * TODO: Omitir post ya existentes en la base de datos
	 *
	 */
	function fernanda_import_ejec() {

		$json = "https://fernandafamiliar.soy/wp-json/wp/v2/posts";
		$response = file_get_contents($json);
		$posts = json_decode($response);

		foreach ($posts as $index => $post) {

			// Poner featured_media_url como parte del contenido
			$featured_media_html = '';
			$featured_media_url = $post->jetpack_featured_media_url;
			if ($featured_media_url) {
				$featured_media_html = '<img class="featured_media" src="'.$featured_media_url.'" width="696" />';
			}

			$link = '<a target="_blank" href="'.$post->jetpack_shortlink.'">';

			// crear el objeto post
			$wp_post = array(
			  'post_title'    => $link.$post->title->rendered."</a>",
			  'post_content'  => $featured_media_html.$post->content->rendered,
			  'post_status'   => $post->status,
			  'post_modified'   => $post->modified,
			  'post_modified_gmt'   => $post->modified_gmt,
				'post_date'   => $post->date,
				'post_date_gmt'   => $post->date_gmt,
				'post_author'   => $post->author,
				'post_type'   => $post->type,
				'post_excerpt'   => $link.$featured_media_html."</a>".$post->excerpt->rendered
			);

			// insertar el post en la base de datos
			wp_insert_post( $wp_post );

		}
		print("Se insertaron ".count($posts)." registros");

	}


	add_action( 'admin_menu', 'fernanda_import' );
