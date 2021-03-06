<?php

/**
 * Certificate Builder configuration file
 *
 * @author Kurt Otto <kurt@ottopia.com.au>
 * @version 2.0
 */

unset($CFG);
global $CFG;
$CFG = new stdClass();

// Temporary data folder. This must be writable by the web server, but
// not accesible to visitors. You may want to clean this directory
// occasionally as scratch files are not removed if a PDF render fails.
$CFG->temp_data         = '/Library/WebServer/temp';

// The path to the wkhtmltopdf binary on your server.
// Go here to get the right one for your server: http://code.google.com/p/wkhtmltopdf/
$CFG->wkhtmltopdf_bin   = '/usr/local/bin/wkhtmltopdf';

// The root URL to the CertificateBuilder directory.
$CFG->base_url          = 'http://localhost/CertificateBuilder';

