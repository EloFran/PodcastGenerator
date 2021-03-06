<?php
############################################################
# PODCAST GENERATOR
#
# Created by Alberto Betella and Emil Engler
# http://www.podcastgenerator.net
# 
# This is Free Software released under the GNU/GPL License.
############################################################
// This file is intended to be only used in the admin directory
if (!file_exists('../config.php')) {
    header('Location: ../setup/');
    die();
}
include 'misc/configsystem.php';
include 'misc/globs.php';
include 'misc/functions.php';
include 'episodes.php';
include 'feed_generator.php';
include 'buttons.php';
include 'freebox.php';
// Until Podcast Generator 3.0 passwords were stored in MD5, which is inseucre since 2005
// This file is wizard to convert old password to a more secure algorithim
$config = getConfig('../config.php');
// Backwards compatability
include 'backwards.php';
// Load translations
include 'translation.php';
// Do backwards comp
backwards_3_0_to_3_1($config['absoluteurl']);