/*-----------------------------------------------------------------------------
 * Écrasement des fonctions du muffin builder afin de pouvoir
 * traduire le contenu avec qtranslate
 *-----------------------------------------------------------------------------*/

function mfn_print_zoom_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_zoom_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_column( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	
	$column_class 	= '';
	$column_attr 	= '';
	$style 			= '';
	
	// align
	if( key_exists('align', $item['fields']) && $item['fields']['align'] ){
		$column_class	.= ' align_'. $item['fields']['align'];
	}	
	
	// animate
	if( key_exists('animate', $item['fields']) && $item['fields']['animate'] ){
		$column_class	.= ' animate';
		$column_attr	.= ' data-anim-type="'. $item['fields']['animate'] .'"'; 
	}

	// background
	if( key_exists('column_bg', $item['fields']) && $item['fields']['column_bg'] ){
		$style .= ' background-color:'. $item['fields']['column_bg'] .';';
	}
	
	// padding
	if( key_exists('padding', $item['fields']) && $item['fields']['padding'] ){
		$style .= ' padding:'. $item['fields']['padding'] .';';
	}
	
	echo '<div class="column_attr'. $column_class .'" '. $column_attr .' style="'. $style .'">';
		echo _e(do_shortcode( $item['fields']['content'] ));
	echo '</div>';
}

function mfn_print_accordion( $item ) {
	echo _e(sc_accordion( $item['fields'] ));
}

function mfn_print_article_box( $item ) {
	echo _e(sc_article_box( $item['fields'] ));
}

function mfn_print_blockquote( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_blockquote( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_blog( $item ) {
	echo _e(sc_blog( $item['fields'] ));
}

function mfn_print_blog_news( $item ) {
	echo _e(sc_blog_news( $item['fields'] ));
}

function mfn_print_blog_slider( $item ) {
	echo _e(sc_blog_slider( $item['fields'] ));
}

function mfn_print_call_to_action( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_call_to_action( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_chart( $item ) {
	echo _e(sc_chart( $item['fields'] ));
}

function mfn_print_clients( $item ) {
	echo _e(sc_clients( $item['fields'] ));
}

function mfn_print_clients_slider( $item ) {
	echo _e(sc_clients_slider( $item['fields'] ));
}

function mfn_print_code( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_code( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_contact_box( $item ) {
	echo _e(sc_contact_box( $item['fields'] ));
}

function mfn_print_content( $item ) {
	echo '<div class="the_content">';
		echo '<div class="the_content_wrapper">';
			_e(the_content());
		echo '</div>';
	echo '</div>';
}

function mfn_print_countdown( $item ) {
	echo _e(sc_countdown( $item['fields'] ));
}

function mfn_print_counter( $item ) {
	echo _e(sc_counter( $item['fields'] ));
}

function mfn_print_divider( $item ) {
	echo _e(sc_divider( $item['fields'] ));
}

function mfn_print_fancy_divider( $item ) {
	echo _e(sc_fancy_divider( $item['fields'] ));
}

function mfn_print_fancy_heading( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_fancy_heading( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_faq( $item ) {
	echo _e(sc_faq( $item['fields'] ));
}

function mfn_print_feature_list( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_feature_list( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_flat_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_flat_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_hover_box( $item ) {
	echo _e(sc_hover_box( $item['fields'] ));
}

function mfn_print_hover_color( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_hover_color( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_how_it_works( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_how_it_works( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_icon_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_icon_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_image( $item ) {
	echo _e(sc_image( $item['fields'] ));
}

function mfn_print_info_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_info_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_list( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_list( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_map( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_map( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_offer( $item ) {
	echo _e(sc_offer( $item['fields'] ));
}

function mfn_print_offer_thumb( $item ) {
	echo _e(sc_offer_thumb( $item['fields'] ));
}

function mfn_print_opening_hours( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_opening_hours( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_our_team( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_our_team( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_our_team_list( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_our_team_list( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_photo_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_photo_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_placeholder( $item ) {
	echo _e('<div class="placeholder">&nbsp;</div>');
}

function mfn_print_portfolio( $item ) {
	echo _e(sc_portfolio( $item['fields'] ));
}

function mfn_print_portfolio_grid( $item ) {
	echo _e(sc_portfolio_grid( $item['fields'] ));
}

function mfn_print_portfolio_photo( $item ) {
	echo _e(sc_portfolio_photo( $item['fields'] ));
}

function mfn_print_portfolio_slider( $item ) {
	echo _e(sc_portfolio_slider( $item['fields'] ));
}

function mfn_print_pricing_item( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_pricing_item( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_progress_bars( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_progress_bars( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_promo_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_promo_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_quick_fact( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_quick_fact( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_shop_slider( $item ) {
	echo _e(sc_shop_slider( $item['fields'] ));
}

function mfn_print_sidebar_widget( $item ) {
	echo _e(sc_sidebar_widget( $item['fields'] ));
}

function mfn_print_slider( $item ) {
	echo _e(sc_slider( $item['fields'] ));
}

function mfn_print_slider_plugin( $item ) {
	echo _e(sc_slider_plugin( $item['fields'] ));
}

function mfn_print_story_box( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(sc_story_box( $item['fields'], $item['fields']['content'] ));
}

function mfn_print_tabs( $item ) {
	echo _e(sc_tabs( $item['fields'] ));
}

function mfn_print_testimonials( $item ) {
	echo _e(sc_testimonials( $item['fields'] ));
}

function mfn_print_testimonials_list( $item ) {
	echo _e(sc_testimonials_list( $item['fields'] ));
}

function mfn_print_timeline( $item ) {
	echo _e(sc_timeline( $item['fields'] ));
}

function mfn_print_trailer_box( $item ) {
	echo _e(sc_trailer_box( $item['fields'] ));
}

function mfn_print_video( $item ) {
	echo _e(sc_video( $item['fields'] ));
}

function mfn_print_visual( $item ) {
	if( ! key_exists('content', $item['fields']) ) $item['fields']['content'] = '';
	echo _e(do_shortcode( $item['fields']['content'] ));
}

function mfn_print_sliding_box( $item ) {
	echo _e(sc_sliding_box( $item['fields'] ));
}
