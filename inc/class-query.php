<?php

namespace DB;

class Query {

	public static function action_pre_get_posts( $query ) {
		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}

		if ( ! $query->is_singular() ) {
			$query->set( 'post_type', array( 'post', 'tip' ) );
		}
	}

}
