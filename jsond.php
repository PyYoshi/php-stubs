<?php
// php-jsond 1.3.0
// https://github.com/bukka/php-jsond

/**
 * @param $json string
 * @param $assoc bool false
 * @param $depth int 512
 * @param $options int 0
 * @return mixed
 */
function jsond_decode($json, $assoc=false, $depth=512, $options=0){}

/**
 * @param $value mixed
 * @param $options int 0
 * @param $depth int 512
 * @return string
 */
function jsond_encode($value, $options=0, $depth=512){}

/**
 * @return string
 */
function jsond_last_error_msg(){}

/**
 * @return int
 */
function jsond_last_error(){}
