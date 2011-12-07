<?php


function set_cache($cacheName,$value,$duration = 60) {
	$CI =& get_instance();
	$CI->load->driver('cache', array('adapter' => 'apc','backup' => 'file'));
	$CI->cache->delete($cacheName);
	$CI->cache->save($cacheName, $value, $duration);
}

function get_cache($cacheName) {
	$CI =& get_instance();
	$CI->load->driver('cache', array('adapter' => 'apc','backup' => 'file'));
	$res = $CI->cache->get($cacheName);
	return $res;
}

function delete_cache($cacheName) {
	$CI =& get_instance();
	$CI->load->driver('cache', array('adapter' => 'apc','backup' => 'file'));  
	$CI->cache->delete($cacheName);
}

function clear_cache() {
	$CI =& get_instance();
	$CI->load->driver('cache', array('adapter' => 'apc','backup' => 'file'));
	$CI->cache->clean();
}
	
