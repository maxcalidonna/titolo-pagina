<?php

/*
Plugin Name: Titolo pagina dinamico
Plugin URI: 
Description: Utile plug-in per recuperare il titolo della pagina dai parametri del sito passati tramite url
Version: 1.0.0
Author: Massimiliano Calidonna
Author URI: www.webdevitalia.com
License: GPLv2
*/

/* 
Copyright (C) 2020 Massimiliano Calidonna

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/
add_shortcode('titolo_pagina', 'recupera_campagna');
function recupera_init() {
    function recupera_campagna() {
        
        if (isset($_GET['tit_comp'])) { 
             $titolo = $_GET['tit_comp'];
             
         } else { 
             $titolo = '';
             
         }
        return $titolo;
    }
}
add_action('init', 'recupera_init');

?>