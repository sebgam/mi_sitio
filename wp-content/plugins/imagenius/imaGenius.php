<?php
/*
Plugin Name: imaGenius
Plugin URI: https://docs.google.com/file/d/0BwWjGErK0rRIbzBMcmdZRzNnTVE/edit?usp=sharing
Description: imaGenius allows you to embed images in your Wordpress posts and pages, using cool pure-CSS3 transitions, frames and effects!
Version: 1.7
Author: Eugenio Petullà
Author URI: http://www.eugeniopetulla.com/contattami.html
License: GPL3
*/

/*
imaGenius (Wordpress Plugin)
Copyright (C) 2012 Eugenio Petullà
Contact me at http://www.eugeniopetulla.com/contattami.html
Translation provided by Martina Presta - martyx87@gmail.com 

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

function polaroid_shortcode( $atts, $content = null ){
    extract( shortcode_atts( array(
      'size' => '225',
      'align' => 'left',
      'title' => ' ',
      'link' => $content,
      'filter' => '',
      'effect' => 'rotatezoom',
      ), $atts ) );
      
      $imagesize = $size - 10;
 
      return ' 
      <div class="pola_canv ' .$filter . ' ' . $effect . '" max-width=' . $size . 'px"  style="float:' . $align . '"><a href="' . $link . '"><img src="' . $content . '" width="' . $imagesize . 'px"></a><p>' .$title. '</p></div>';
 
}
function roundpola_shortcode( $atts, $content = null ){
    extract( shortcode_atts( array(
      'size' => '225',
      'align' => 'left',
      'title' => ' ',
      'link' => $content,
      'filter' => '',
      'effect' => 'rotatezoom',
      ), $atts ) );
      
      $imagesize = $size - 10;
 
      return ' 
      <div class="roundpola ' .$filter . ' ' . $effect . '" max-width=' . $size . 'px" style="float:' . $align . '"><a href="' . $link . '"><img src="' . $content . '" width="' . $imagesize . 'px"></a><p>' .$title. '</p></div>';
 
}
function imagenius_shortcode( $atts, $content = null ){
    extract( shortcode_atts( array(
      'link' => $content,
      'size' => '225',
      'align' => 'left',
      'filter' => '',
      'effect' => 'imgzoom',
      ), $atts ) );
      
      return '
      <div class="imagenius ' . $filter . ' ' . $effect . '" style="float:' . $align . '"><a href="' . $link . '"><img src="' . $content . '" width="' . $size . 'px"></a></div>';
}
function framegenius_shortcode( $atts, $content = null ){
    extract( shortcode_atts( array(
      'link' => $content,
      'size' => '225',
      'align' => 'left',
      'filter' => '',
      'effect' => 'imgzoom',
      'texture' => 'necturine'
      ), $atts ) );
      
      $file = dirname(__FILE__) . '/imaGenius.php';
      
      return '
      <div class="framegenius ' . $filter . ' ' . $effect . '" style="float:' . $align . '; background-image:url(' . plugin_dir_url($file) . 'images/' . $texture . '.png);"><a href="' . $link . '"><div class="framegeniusborder"><img src="' . $content . '" width="' . $size . 'px"></div></a></div>';
}
function simplegenius_shortcode( $atts, $content = null ){
    extract( shortcode_atts( array(
      'link' => $content,
      'size' => '225',
      'align' => 'left',
      'filter' => '',
      'effect' => 'zoom',
      ), $atts ) );
      
      return '
      <div class="' . $filter . ' ' . $effect . '" style="float:' . $align . '"><a href="' . $link . '"><img src="' . $content . '" width="' . $size . 'px"></a></div>';
}  
function imagenius_style() {
wp_register_style('imaGenius', WP_PLUGIN_URL . '/imagenius/css/imagenius_style.css');
wp_enqueue_style('imaGenius');
}
add_action( 'wp_enqueue_scripts', 'imagenius_style' );
add_shortcode('polagenius', 'polaroid_shortcode');
add_shortcode('roundpolagenius', 'roundpola_shortcode');
add_shortcode('imagenius', 'imagenius_shortcode');
add_shortcode('framegenius', 'framegenius_shortcode');
add_shortcode('simplegenius', 'simplegenius_shortcode');

?>
