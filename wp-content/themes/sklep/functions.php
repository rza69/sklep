<?
	register_nav_menus( array(
		'menu' => 'Menu',
	) );
	
	function menu_mass($name){
	
		$menu_name = $name; 

		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

			$menu_items = wp_get_nav_menu_items($menu->term_id);
			
			$menu = array();
			$count = 0;
			$count_sub = 0;
			foreach($menu_items as $item):
				if($item->menu_item_parent == 0):
					$menu[$count]['title'] =  $item->title;
					$menu[$count]['url'] = $item->url;
				endif;
				foreach($menu_items as $item_sub):
					if($item_sub->menu_item_parent == $item->db_id):
					$menu[$count]['sub'][$count_sub]['title'] = $item_sub->title;
						$menu[$count]['sub'][$count_sub]['url'] = $item_sub->url;
						$count_sub++;
					endif;
				endforeach;
				$count++;
			endforeach;
		}
		return $menu;
	}
	
	function wp_corenavi(){
		global $wp_query, $wp_rewrite;
		$pages = '';
		$max = $wp_query->max_num_pages;
		if (!$current = get_query_var('paged')) $current = 1;
		$a['base'] = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
		$a['total'] = $max;
		$a['current'] = $current;

		$total = 0; //1 - выводить текст "—траница N из N", 0 - не выводить
		$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
		$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
		$a['prev_text'] = '&laquo;'; //текст ссылки "ѕредыдуща¤ страница"
		$a['next_text'] = '&raquo;'; //текст ссылки "—ледующа¤ страница"

		if ($max > 1) echo '<div class="pager">';
		if ($total == 1 && $max > 1) $pages = '<span class="pages">—траница ' . $current . ' из ' . $max . '</span>'."\r\n";
		echo $pages . paginate_links($a);
		if ($max > 1) echo '</div>';
	}
	
	session_start();
	if(isset($_GET['add_cart']))
	{
		if(!isset($_SESSION['count'])){ $_SESSION['count'] = 0; }
		
		if(!in_array($_GET['add_cart'],$_SESSION['products']))
		{
			$_SESSION['products'][$_SESSION['count']] = $_GET['add_cart'];
			$_SESSION['count'] = $_SESSION['count'] + 1;
		}
		
	}
	
	
	

?>