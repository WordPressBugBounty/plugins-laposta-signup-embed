<?php
/**
 * @package Laposta Signup Embed
 */
/*
Plugin Name: Laposta Signup Embed
Plugin URI: http://laposta.nl/documentatie/wordpress.524.html
Description: Laposta is programma waarmee je gemakkelijk en snel nieuwsbrieven kunt maken en versturen. Met deze plugin kun je je ingebed aanmeldformulier eenvoudig aan je website toevoegen.
Version: 1.4.1
Author: Laposta - Roel Bousardt
Author URI: https://laposta.nl/contact
License: BSD 2-Clause License
*/

/*
BSD 2-Clause License

Copyright (c) 2021, Laposta
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

use Laposta\SignupEmbed\Container\Container;

define('LAPOSTA_SIGNUP_EMBED_VERSION', '1.4.1');

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

if (class_exists('Laposta\\SignupEmbed\\Plugin')) {
    return;
}

// bootstrap
require_once 'src/Container/Container.php';
$container = new Container();

$plugin = $container->getPlugin();