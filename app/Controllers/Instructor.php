<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Instructor extends Controller
{
  public function siteName()
  {
    return get_bloginfo('name');
  }

  public static function list()
  {
    // WP_Query arguments
    $args = array(
      'post_type' => array( 'artist' ),
      'post_per_page' => -1
    );

    // The Query
    $query = new WP_Query( $args );

    return $query;
  }

  public static function cover_image($id){
    $image_url = get_the_post_thumbnail_url($id,'full');
    if ($image_url) {
      return $image_url;
    }
    return 'https://source.unsplash.com/random';
  }
}
