<?php
require_once get_template_directory() . '/inc/class.breadcrumbs.php';
require_once get_template_directory() . '/inc/class.entry-meta.php';
require_once get_template_directory() . '/inc/class.page-header.php';
require_once get_template_directory() . '/inc/class.related-posts.php';
require_once get_template_directory() . '/inc/class.slider.php';
require_once get_template_directory() . '/inc/class.habakiri-customizer-framework.php';
require_once get_template_directory() . '/inc/customizer.php';

function habakiri_parent_theme_setup() {
	if ( !class_exists( 'Habakiri' ) ) {
		class Habakiri extends Habakiri_Base_Functions {
			public function __construct() {
				parent::__construct();
			}
		}
	}
	$Habakiri = new Habakiri();
}
add_action( 'after_setup_theme', 'habakiri_parent_theme_setup', 99999 );

/**
 * Name       : Habakiri_Base_Functions
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : October 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
class Habakiri_Base_Functions {

	/**
	 * __construct
	 */
	public function __construct() {
		global $content_width;
		if ( !isset( $content_width ) ) $content_width = 1140;
		load_theme_textdomain( 'habakiri', get_template_directory() . '/languages' );

		add_editor_style( array(
			'./editor-style.min.css',
		) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'
		) );

		$custom_background_defaults = array();
		add_theme_support(
			'custom-background',
			apply_filters( 'habakiri_custom_background_defaults', $custom_background_defaults )
		);

		$custom_header_defaults = array(
			'width'          => 1366,
			'height'         => 768,
			'flex-height'    => false,
			'flex-width'     => false,
			'uploads'        => true,
			'random-default' => true,
			'header-text'    => false,
		);
		add_theme_support(
			'custom-header',
			apply_filters( 'habakiri_custom_header_defaults', $custom_header_defaults )
		);

		add_post_type_support( 'page', 'excerpt' );

		$this->customizer();
		$this->register_nav_menus();

		add_action( 'widgets_init'      , array( $this, 'register_sidebar' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'wp_head'           , array( $this, 'styles_bugfix_for_safari' ) );
		add_action( 'wp_footer'         , array( $this, 'wp_footer' ) );

		add_filter( 'query_vars'                 , array( $this, 'query_vars' ) );
		add_filter( 'tiny_mce_before_init'       , array( $this, 'tiny_mce_before_init' ) );
		add_filter( 'body_class'                 , array( $this, 'body_class' ) );
		add_filter( 'post_class'                 , array( $this, 'post_class' ) );
		add_filter( 'walker_nav_menu_start_el'   , array( $this, 'walker_nav_menu_start_el' ), 10, 4 );
		add_filter( 'excerpt_length'             , array( $this, 'excerpt_length' ), 9 );
		add_filter( 'excerpt_mblength'           , array( $this, 'excerpt_length' ), 9 );

		add_filter( 'comment_form_default_fields', array( $this, 'comment_form_default_fields' ) );
		add_filter( 'comment_form_field_comment' , array( $this, 'comment_form_field_comment' ) );
		add_filter( 'comment_form_submit_field'  , array( $this, 'comment_form_submit_field' ) );

		add_filter( 'get_calendar'               , array( $this, 'get_calendar' ) );

		/* 投稿のアーカイブページを設定  */
		add_filter( 'register_post_type_args'    , array( $this, 'post_has_archive' ), 10, 2 );
		add_filter( 'post_type_archive_link'     , array( $this, 'post_archive_link' ), 10, 2 );
	}

	/* 投稿アーカイブページの作成 */
	public function post_has_archive( $args, $post_type ) {
	  global $wp_rewrite;
	  if ( 'post' === $post_type && ! is_null( $wp_rewrite ) ) {
	    $archive_slug = 'articles';
	    // Setting 'has_archive' ensures get_post_type_archive_template() returns an archive.php template.
	    $args['has_archive'] = $archive_slug;
	    // We have to register rewrite rules, because WordPress won't do it for us unless $args['rewrite'] is true.
	    $archive_slug = $wp_rewrite->root . $archive_slug;
	    add_rewrite_rule( "{$archive_slug}/?$", "index.php?post_type=$post_type", 'top' );
	    $feeds = '(' . trim( implode( '|', $wp_rewrite->feeds ) ) . ')';
	    add_rewrite_rule( "{$archive_slug}/feed/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
	    add_rewrite_rule( "{$archive_slug}/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
	    add_rewrite_rule( "{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$post_type" . '&paged=$matches[1]', 'top' );
	  }
	  return $args;
	}

	public function post_archive_link( $args, $post_type ) {
	  if ( 'post' === $post_type ) {
	    $link = home_url( 'articles/' );
	  }
	  return $link;
	}

	/**
	 * Add query var for related posts
	 *
	 * @param array $public_query_vars
	 * @return array
	 */
	public function query_vars( $public_query_vars ) {
		$public_query_vars[] = 'is_related';
		return $public_query_vars;
	}

	/**
	 * Add the class to tne wysiwyg editor
	 *
	 * @param array $init
	 * @return array
	 */
	public function tiny_mce_before_init( $init ){
		$init['body_class'] = 'entry__content';
		return $init;
	}

	/**
	 * Theme customizer
	 */
	protected function customizer() {
		$Customizer = new Habakiri_Customizer();
		add_action( 'wp_head', array( $Customizer, 'register_styles' ) );
		add_action( 'customize_register', array( $Customizer, 'customize_register' ) );
	}

	/**
	 * Register menus
	 */
	protected function register_nav_menus() {
		add_theme_support( 'menu' );
		register_nav_menus( array(
			'global-nav' => __( 'Global Navigation', 'habakiri' ),
			'social-nav' => __( 'Social Navigation', 'habakiri' ),
		) );
	}

	/**
	 * Return the classes for header
	 *
	 * @return array
	 */
	public static function get_header_classses() {
		$header_classes[] = Habakiri::get( 'header' );
		$header_classes[] = Habakiri::get( 'header_fixed' );
		return $header_classes;
	}

	/**
	 * Register widget areas
	 */
	public function register_sidebar() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'habakiri' ),
			'id'            => 'sidebar',
			'description'   => __( 'Sidebar', 'habakiri' ),
			'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="sidebar-widget__title h4">',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer', 'habakiri' ),
			'id'            => 'footer-widget-area',
			'description'   => __( 'Footer Widget Area', 'habakiri' ),
			'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget__title">',
		) );

		add_filter(
			'dynamic_sidebar_params',
			array( $this, 'dynamic_sidebar_params' )
		);
	}

	/**
	 * Return the class of culumn size for footer widget area
	 *
	 * @param array $params ウィジェットエリア設定の配列
	 * @return array
	 */
	public function dynamic_sidebar_params( $params ) {
		if ( isset( $params[0]['id'] ) && $params[0]['id'] === 'footer-widget-area' ) {
			$class = Habakiri::get( 'footer_columns' );
			$params[0]['before_widget'] = str_replace(
				'class="widget',
				'class="' . Habakiri::get( 'footer_columns' ) . ' widget',
				$params[0]['before_widget']
			);
		}
		return $params;
	}

	/**
	 * Display comments
	 *
	 * @param object $comment
	 * @param array $args
	 * @param int $depth
	 */
	public static function the_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<li <?php comment_class( array( 'comments__item' ) ); ?> id="li-comment-<?php comment_ID() ?>">
			<dl id="comment-<?php comment_ID(); ?>" class="comment">
				<dt class="comment__header">
					<div class="comment__author">
						<?php echo get_avatar( $comment, '48' ); ?>
					<!-- end .comment-author --></div>
				</dt>
				<dd class="comment__body">
					<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'habakiri' ) ?></em>
					<?php endif; ?>
					<div class="comment__meta vcard">
						<?php
						printf(
							__( '<cite class="fn">%1$s</cite> said on %2$s at %3$s', 'habakiri' ),
							get_comment_author_link(),
							get_comment_date(),
							get_comment_time()
						);
						edit_comment_link( 'edit', '  ', '' );
						?>
					<!-- end .comment-meta --></div>
					<?php comment_text() ?>
					<?php
					$comment_reply_link = get_comment_reply_link(
						array_merge(
							$args,
							array(
								'depth'     => $depth,
								'max_depth' => $args['max_depth'],
							)
						)
					);
					?>
					<?php if ( !empty( $comment_reply_link ) ) : ?>
					<div class="comment__reply reply btn btn-sm btn-primary">
						<?php echo $comment_reply_link; ?>
					<!-- end .reply --></div>
					<?php endif; ?>
				</dd>
			</dl>
		<?php
	}

	/**
	 * Display trackbacks
	 *
	 * @param object $comment
	 * @param array $args
	 * @param int $depth
	 */
	public static function the_pings( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<li <?php comment_class( array( 'trackbacks__item' ) ); ?> id="li-comment-<?php comment_ID() ?>">
			<dl id="comment-<?php comment_ID(); ?>" class="trackback">
				<dd class="trackback__body">
					<div class="trackback__meta vcard">
						<?php
						printf(
							__( '<cite class="fn">%1$s</cite> said on %2$s at %3$s', 'habakiri' ),
							get_comment_author_link(),
							get_comment_date(),
							get_comment_time()
						);
						edit_comment_link( 'edit', '  ', '' );
						?>
					<!-- end .comment-meta --></div>
					<?php comment_text() ?>
				</dd>
			</dl>
		<?php
	}

	/**
	 * Load the CSS and JS
	 */
	public function wp_enqueue_scripts() {
		$url     = get_template_directory_uri();
		$theme   = wp_get_theme();
		$version = $theme->get( 'Version' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		$assets_name = get_template() . '-assets';
		wp_enqueue_style(
			$assets_name,
			$url . '/css/assets.min.css',
			array(),
			$version
		);

		wp_enqueue_style(
			get_template(),
			$url . '/style.min.css',
			array( $assets_name ),
			date( 'YmdHis', filemtime( get_stylesheet_directory() . '/style.css' ) )
		);

		if ( is_child_theme() ) {
			wp_enqueue_style(
				get_stylesheet(),
				get_stylesheet_uri(),
				array( $assets_name ),
				date( 'YmdHis', filemtime( get_stylesheet_directory() . '/style.css' ) )
			);
		}

		wp_enqueue_script(
			get_template(),
			$url . '/js/app.min.js',
			array( 'jquery' ),
			$version,
			true
		);
	}

	/**
	 * Safari 6.1+ (10.0 is the latest version of Safari at this time)
	 * @see https://github.com/inc2734/habakiri/issues/17
	 */
	public function styles_bugfix_for_safari() {
		?>
		<style>
		/* Safari 6.1+ (10.0 is the latest version of Safari at this time) */
		@media (max-width: 991px) and (min-color-index: 0) and (-webkit-min-device-pixel-ratio: 0) { @media () {
			display: block !important;
			.header__col {
				width: 100%;
			}
		}}
		</style>
		<?php
	}

	public function wp_footer() {
		?>
		<script>
		jQuery( function( $ ) {
			$( '.js-responsive-nav' ).responsive_nav( {
				direction: '<?php echo esc_js( Habakiri::get( 'offcanvas_nav_direction' ) ); ?>'
			} );
		} );
		</script>
		<?php
	}

	/**
	 * Return body classes
	 * Add the appropriate class by the layout of the blog
	 */
	public function body_class( $classes ) {
		global $template;
		$template_file = basename( $template );

		if ( in_array( $template_file, array( 'single.php', 'archive.php' ) ) ) {
			if ( is_single() ) {
				$classes[] = 'blog-template-single-' . Habakiri::get( 'blog_template');
			} elseif ( !is_singular() ) {
				$classes[] = 'blog-template-archive-' . Habakiri::get( 'blog_template');
			}
		}
		return $classes;
	}

	/**
	 * Output hentry class  when the single page only
	 *
	 * @param array $classes
	 * @return array
	 */
	public function post_class( $classes ) {
		$allow_hentry_post_types = apply_filters( 'habakiri_allow_hentry_post_types', array( 'post' ) );
		if ( !in_array( get_post_type(), $allow_hentry_post_types ) ) {
			$classes = array_diff( $classes, array( 'hentry' ) );
		}
		return $classes;
	}

	/**
	 * Display description in global navigation
	 *
	 * @param string $output HTML
	 * @param object $item
	 * @param int $depth
	 * @param object $args
	 * @return string
	 */
	public function walker_nav_menu_start_el( $output, $item, $depth, $args ) {
		if ( $depth === 0 && $args->theme_location === 'global-nav' && !empty( $item->description ) ) {
			$pattern     = '/(<a.*?>)([^<]*?)(<\/a>)/';
			$replacement = '$1<strong>$2</strong><small>' . esc_html( $item->description ) . '</small>$3';
			return preg_replace( $pattern, $replacement, $output );
		}
		return $output;
	}

	/**
	 * Excerpt length
	 *
	 * @param int
	 * @return int
	 */
	public function excerpt_length( $length ) {
		return Habakiri::get( 'excerpt_length' );
	}

	/**
	 * Comment form text field styling
	 *
	 * @param array $fields
	 * @return array
	 */
	public function comment_form_default_fields( $fields ) {
		foreach ( $fields as $key => $field ) {
			$fields[$key] = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $field );
		}
		return $fields;
	}

	/**
	 * Comment form textarea styling
	 *
	 * @param string $comment_field
	 * @return string
	 */
	public function comment_form_field_comment( $comment_field ) {
		$comment_field = preg_replace( '/(id=".+?")/', '$1 class="form-control"', $comment_field );
		return $comment_field;
	}

	/**
	 * Comment form button styling
	 *
	 * @param string $comment_field
	 * @return string
	 */
	public function comment_form_submit_field( $submit_field ) {
		$submit_field = str_replace( 'class="submit"', 'class="submit btn btn-primary"', $submit_field );
		return $submit_field;
	}

	/**
	 * Calendar styling
	 *
	 * @param string $calendar
	 * @return string
	 */
	public function get_calendar( $calendar ) {
		return str_replace( '<table', '<table class="table"', $calendar );
	}

	/**
	 * Return the theme option
	 *
	 * @param string $key
	 * @return null|string
	 */
	public static function get( $key ) {
		$default   = Habakiri_Customizer::get_default( $key );
		$theme_mod = get_theme_mod( $key, $default );
		return $theme_mod;
	}

	/**
	 * Header whether a line
	 *
	 * @return bool
	 */
	public static function is_one_row_header() {
		$headers = array( 'header--default', 'header--transparency' );
		if ( in_array( Habakiri::get( 'header' ), $headers ) ) {
			return true;
		}
		return false;
	}

	/**
	 * Display the copyright
	 */
	public static function the_copyright() {
		_deprecated_function( 'Habakiri::the_copyright()', 'Habakiri 2.0.0', "get_template_part( 'modules/copyright' )" );
		get_template_part( 'modules/copyright' );
	}

	/**
	 * Display the logo
	 */
	public static function the_logo() {
		_deprecated_function( 'Habakiri::the_logo()', 'Habakiri 2.0.0', "get_template_part( 'modules/logo' )" );
		get_template_part( 'modules/logo' );
	}

	/**
	 * Display the page header
	 *
	 * @param int $post_id
	 */
	public static function the_page_header( $post_id = null ) {
		_deprecated_function( 'Habakiri::the_page_header()', 'Habakiri 2.0.0', "get_template_part( 'modules/page-header' )" );
		get_template_part( 'modules/page-header' );
	}

	/**
	 * Display the breadcrumbs
	 */
	public static function the_bread_crumb() {
		_deprecated_function( 'Habakiri::the_bread_crumb()', 'Habakiri 2.0.0', "get_template_part( 'modules/breadcrumbs' )" );
		get_template_part( 'modules/breadcrumbs' );
	}

	/**
	 * Display the post thumbnail
	 */
	public static function the_post_thumbnail() {
		$classes = array(
			'entry--has_media__link',
		);
		if ( !has_post_thumbnail() ) {
			$classes[] = 'entry--has_media__link--text';
		}
		$classes = apply_filters( 'habakiri_post_thumbnail_link_classes', $classes );
		?>
		<a href="<?php the_permalink(); ?>" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php
				$size = apply_filters( 'habakiri_post_thumbnail_size', 'thumbnail' );
				the_post_thumbnail( $size, array(
					'class' => '',
				) );
				?>
			<?php else : ?>
				<span class="entry--has_media__text">
					<?php echo apply_filters( 'habakiri_no_thumbnail_text', get_the_time( 'd' ) ); ?>
				</span>
			<?php endif; ?>
		</a>
		<?php
	}

	/**
	 * Display the related posts
	 */
	public static function the_related_posts() {
		_deprecated_function( 'Habakiri::the_related_posts()', 'Habakiri 2.0.0', "get_template_part( 'modules/related-posts' )" );
		get_template_part( 'modules/related-posts' );
	}

	/**
	 * Return the custom taxonomies of the current post
	 *
	 * @param int|null $post_id
	 * @return array
	 */
	public static function get_the_taxonomies( $post_id = null ) {
		$post_type_object = get_post_type_object( get_post_type( $post_id ) );
		if ( !empty( $post_type_object->taxonomies ) ) {
			return $post_type_object->taxonomies;
		}
		return array();
	}

	/**
	 * Display the posts pagination
	 */
	public static function the_pager() {
		_deprecated_function( 'Habakiri::the_pager()', 'Habakiri 2.0.0', "get_template_part( 'modules/pagination' )" );
		get_template_part( 'modules/pagination' );
	}

	/**
	 * Display the entry meta
	 */
	public static function the_entry_meta() {
		_deprecated_function( 'Habakiri::the_entry_meta()', 'Habakiri 2.0.0', "get_template_part( 'modules/entry-meta' )" );
		get_template_part( 'modules/entry-meta' );
	}

	/**
	 * Display the link pages
	 */
	public static function the_link_pages() {
		_deprecated_function( 'Habakiri::the_link_pages()', 'Habakiri 2.0.0', "get_template_part( 'modules/link-pages' )" );
		get_template_part( 'modules/link-pages' );
	}

	/**
	 * Display the title
	 *
	 * @param int|null $post_id
	 */
	public static function the_title( $post_id = null ) {
		global $wp_query;
		$post    = get_post( $post_id );
		$post_id = isset( $post->ID ) ? $post->ID : 0;
		if ( !$post_id ) {
			return;
		}
		do_action( 'habakiri_before_title' );
		?>
		<?php if ( get_query_var( 'is_related' ) ) : ?>
		<h1 class="entry__title entry-title h4"><a href="<?php the_permalink(); ?>"><?php echo get_the_title( $post_id ); ?></a></h1>
		<?php elseif ( is_page() ) : ?>
			<?php if ( !is_page_template( 'templates/front-page.php' ) && !is_page_template( 'templates/rich-front-page.php' ) ) : ?>
			<h1 class="entry__title"><?php echo get_the_title( $post_id ); ?></h1>
			<?php endif; ?>
		<?php elseif ( is_single() ) : ?>
		<h1 class="entry__title entry-title"><?php echo get_the_title( $post_id ); ?></h1>
		<?php else : ?>
		<h1 class="entry__title entry-title h3"><a href="<?php the_permalink(); ?>"><?php echo get_the_title( $post_id ); ?></a></h1>
		<?php endif; ?>
		<?php
		do_action( 'habakiri_after_title' );
	}

	/**
	 * Return size of the site branding
	 *
	 * @return string
	 */
	public static function get_site_branding_size() {
		$gnav_breakpoint = Habakiri::get( 'gnav_breakpoint' );
		if ( !$gnav_breakpoint ) {
			return;
		}
		if ( Habakiri::is_one_row_header() ) {
			return sprintf( 'col-%s-4', $gnav_breakpoint );
		}
		return sprintf( 'col-%s-12', $gnav_breakpoint );
	}

	/**
	 * Return size of the global navigation wrapper
	 *
	 * @return string
	 */
	public static function get_gnav_size() {
		$gnav_breakpoint = Habakiri::get( 'gnav_breakpoint' );
		if ( !$gnav_breakpoint ) {
			return;
		}
		if ( Habakiri::is_one_row_header() ) {
			return 'col-' . $gnav_breakpoint . '-8';
		}
		return 'col-' . $gnav_breakpoint . '-12';
	}

	/**
	 * Return the breakpoint when switching responsive_nav <> offcanvas_nav
	 *
	 * @return int
	 */
	public static function get_gnav_breakpoint() {
		$breakpoint      = null;
		$gnav_breakpoint = Habakiri::get( 'gnav_breakpoint' );
		switch ( $gnav_breakpoint ) {
			case 'md' :
				$breakpoint = 992;
				break;
			case 'lg' :
				$breakpoint = 1200;
				break;
		}
		return $breakpoint;
	}

	/* 内部リンク用カード */
	public static function show_Linkcard($atts) {
		extract(shortcode_atts(array('slug'=>''),$atts));
		$id = Habakiri_Base_Functions::get_post_id_by_slug($slug);
		$post = get_post($id);

		$sc_Linkcard .='
			<div class="emphasize-link">
				<div class="blogcard ex">
					<a href="'. $post->guid .'" target="_blank">
					 <div class="blogcard_thumbnail"><img src='. get_the_post_thumbnail_url($id, 'full') .' loading="lazy" /></div>
					 <div class="blogcard_content">
					  <div class="blogcard_title">'. $post->post_title .'</div>
					  <div class="blogcard_excerpt">'. $post->post_excerpt .'</div>
					 </div>
					 <div class="clear"></div>
					</a>
				</div>
			</div>';

		return $sc_Linkcard;
	}

	//投稿スラッグ（固定ページは除く） から 投稿idを取得。
	public static function get_post_id_by_slug($post_slug) {
		$args=array(
		  'name' => $post_slug,
		  'post_type' => 'post',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);
		$found_posts = get_posts($args);
		if( $found_posts ) {
			return $found_posts[0]->ID;
		}else{
			return NULL;
		}
	}

	public function dateArithmetic() {
		$dateArithmetic = array( 'result' => '',  'display' => '',  'switch' => 0 );
		$modified_date = get_the_time('Y-m-d');
		$now_date = new DateTime();
		$now_date = $now_date->format('Y-m-d');
		$dateArithmetic['result'] = (strtotime($now_date) - strtotime($modified_date)) / (60 * 60 * 24);
		if($dateArithmetic['result']>365){
			$dateArithmetic['switch'] = 1;
			for($count=-1; $count>=-10; $count--){
				if($count==-10){
					$dateArithmetic['display'] = '10年以上';
					break;
				}
				$XX = date('Y-m-d', strtotime($count.'year'));
				if((strtotime($modified_date)>strtotime($XX))){
					$dateArithmetic['display'] = ''.abs($count+1).'年';
					break;
				}
			}
		}else if($dateArithmetic['result']>31){
			for($count=-1; $count>=-12; $count--){
				$XX = date('Y-m-d', strtotime($count.'month'));
				if((strtotime($modified_date)>strtotime($XX))){
					$dateArithmetic['display'] = abs($count+1).'月';
					break;
				}
			}
		}else{
					$dateArithmetic['display'] = $dateArithmetic['result'].'日';
		}
		return $dateArithmetic;
	}

	public function getPostThNumber($slug = 'gourmet') {
	  global $wpdb, $post;
		// $term_id = get_tags(array('slug' => $slug))[0]->term_id;
		$term_id = get_category_by_slug($slug)->term_id;

	  $number = $wpdb->get_var("
	    SELECT COUNT(*)
	    FROM $wpdb->posts INNER JOIN $wpdb->term_relationships ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
	    WHERE post_status = 'publish'
	    AND post_type = 'post'
	    AND term_taxonomy_id = $term_id
	    AND post_date <= '$post->post_date'
	  ");

	  return $number;
	}

	public function getMultiTagPosts($slug_arr) {
	  global $wpdb;

		$arg = array(
	    'post_status' => 'publish',
	    'post_type' => 'post',
	    'tax_query' => array(
	      array(
	        'taxonomy' => 'post_tag',
	        'field' => 'slug',
	        'terms' => $slug_arr,
	        'operator' => 'AND'
	      )
	    )
		);
		$posts = get_posts($arg);
		$posts_count = count($posts);

	  return $posts_count;
	}

	public function sortPostsByCategory() {
		global $posts;

		$sorted_posts = array('hokubu'=>[],'iga'=>[],'chubu'=>[],'iseShima'=>[],'higashikishu'=>[]);
		foreach ($posts as $a_post) {
			if (in_category(array('kuwana','komono','suzuka','yokkaichi', 'kameyama'), $a_post)):
				$sorted_posts['hokubu'][] = $a_post;
			elseif (in_category(array('iga'), $a_post)):
				$sorted_posts['iga'][] = $a_post;
			elseif (in_category(array('tsu','meiwa','matsusaka','taki'), $a_post)):
				$sorted_posts['chubu'][] = $a_post;
			elseif (in_category(array('ise','toba','shima','minamiise'), $a_post)):
				$sorted_posts['iseShima'][] = $a_post;
			elseif (in_category(array('odai','kihoku','owase'), $a_post)):
				$sorted_posts['higashikishu'][] = $a_post;
			endif;
		}

	  return $sorted_posts;
	}

	public function introInsta() {
		$sticker_img_dir = wp_upload_dir()['baseurl'] . '/sticker/';
		$introInsta .='
			<div class="noticeBox">
				<div class="noticeBoxHeader">おしらせ</div>
				<p>ケンチェ飯では三重県グルメ全店舗制覇を目指して、どこよりも詳しいグルメ情報をお届け！</p>
				<p>Instagramでは、随時DMでフォロワー様からの提案・ご意見を受付中！<br>また、フォロワー限定のイベントなども・・・！？</p>
				<p>フォローしてお得な情報をゲットしてね！</p>
				<a class="followInsta" href="https://www.instagram.com/kencellara_food/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i><span>フォロー</span></a>
			</div>';

		return $introInsta;
	}

	public function kencePoint($atts, $content=null) {
		$atts = shortcode_atts(array(
				'title' => 'ケンチェの一言'
			),
			$atts
		);
		extract($atts);
		$kencePoint ="<div class='kencePoint'><div class='kencePointTitle'><i class='fas fa-edit'></i>{$title}</div>{$content}</div>";

		return $kencePoint;
	}

	public function getPostViews($postID) {
	  $count_key = 'post_views_count';
	  $count = get_post_meta($postID, $count_key, true);
	  if ($count=='') {
	    delete_post_meta($postID, $count_key);
	    add_post_meta($postID, $count_key, '0');
	    return "0 View";
	  }
	  return $count.' Views';
	}

	public function setPostViews($postID) {
	  $count_key = 'post_views_count';
	  $count = get_post_meta($postID, $count_key, true);
	  if ($count=='') {
	    $count = 0;
	    delete_post_meta($postID, $count_key);
	    add_post_meta($postID, $count_key, '0');
	  } else {
	    $count++;
	    update_post_meta($postID, $count_key, $count);
	  }
	}

	public function is_sp() {
	  $useragents = array('Android', 'iPhone');
	  $pattern = '/'.implode('|', $useragents).'/i';
	  if (!preg_match($pattern, $_SERVER['HTTP_USER_AGENT'])) {
	  	return false;
	  }
	  return true;
	}

	public function set_random_articles() {
	  $articles = array(
		"miyako-sushi",
		"touyouke-grill",
		"kannoshita",
		"kyouguti-coffee",
		"gyouza-channel",
		"tando",
		"wakaba",
		"kan",
		"atumura",
		"goshichiya",
		"keijou",
		"ueda-syouten",
		"kazamidori",
		"tomiyama",
		"kaikou",
		"giorno-pace",
		"bubu-cafe",
		"chocolaterie4",
		"new-kotobuki",
		"torisoba-narukawa"
	  );
	  $rands = array();
	  $random_articles = array();
	  for ($i = 0; $i <= 19; $i++) {
		$is_dup = true;
		while ($is_dup) {
		  $tmp = mt_rand(0, 19);
		  if (!in_array($tmp, $rands)) {
		    array_push($rands, $tmp);
		    array_push($random_articles, $articles[$tmp]);
			$is_dup = false;
		  }
		}
	  }
	  return $random_articles;
	}
}

add_shortcode("sc_Linkcard", "Habakiri_Base_Functions::show_Linkcard");
add_shortcode("introInsta", "Habakiri_Base_Functions::introInsta");
add_shortcode("kencePoint", "Habakiri_Base_Functions::kencePoint");

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
