<?php defined('SYSPATH') OR die('kein direkter Zugang erlaubt.');
$lang = array
(
    'rrdtool-not-found' => '"rrdtool"-Binary nicht in %s gefunden. <a href="http://docs.pnp4nagios.org/de/faq/1">FAQ online lesen</a>',
    'config-not-found' => 'Config-Datei %s nicht gefunden. <a href="http://docs.pnp4nagios.org/de/faq/2">FAQ online lesen</a>',
    'perfdata-dir-empty' => 'Das perfdata-Verzeichnis "%s" ist leer. Bitte die Nagios-Konfiguration prüfen. <a href="http://docs.pnp4nagios.org/de/faq/3">FAQ online lesen</a>',
    'host-perfdata-dir-empty' => 'Das perfdata-Verzeichnis "%s" ist leer. Bitte die Nagios-Konfiguration prüfen. <a href="http://docs.pnp4nagios.org/de/faq/4">FAQ online lesen</a>',
    'perfdata-dir-for-host' => 'Das perfdata-Verzeichnis "%s" für Host "%s" existiert nicht. <a href="http://docs.pnp4nagios.org/de/faq/5">FAQ online lesen</a>',
    'xml-not-found' => 'XML-Datei "%s" nicht gefunden. <a href="http://docs.pnp4nagios.org/de/faq/6">FAQ online lesen</a>',
    'get-first-service' => 'Konnte ersten Service für Host "%s" nicht finden. <a href="http://docs.pnp4nagios.org/de/faq/7">FAQ online lesen</a>',
    'get-first-host' => 'Keinen Host gefunden. <a href="http://docs.pnp4nagios.org/de/faq/8">FAQ online lesen</a>',
    'xml-structure-mismatch' => 'Version der XML-Struktur ungültig. Fand Version "%d", sollte aber "%d" sein. <a href="http://docs.pnp4nagios.org/de/faq/9">FAQ online lesen</a>',
    'save-rrd-image' => 'Speichern des Graphen gescheitert. php fopen("%s") failed. <a href="http://docs.pnp4nagios.org/de/faq/10">FAQ online lesen</a>',
    'xml-structure-without-version-tag' => 'Versionshinweis fehlt im XML-File. <a href="http://docs.pnp4nagios.org/de/faq/11">FAQ online lesen</a>',
    'template-without-opt' => 'Template %s übergibt Array $opt[] nicht. <a href="http://docs.pnp4nagios.org/de/faq/12">FAQ online lesen</a>',
    'template-without-def' => 'Template %s übergibt Array $def[] nicht. <a href="http://docs.pnp4nagios.org/de/faq/13">FAQ online lesen</a>',
    'no-data-for-page' => 'Keine Daten für die Page "%s", <a href="http://docs.pnp4nagios.org/de/faq/14">FAQ online lesen</a>',
    'page-not-readable' => 'Konfigurationsdatei "%s" ist nicht lesbar oder existiert nicht. <a href="http://docs.pnp4nagios.org/de/faq/15">FAQ online lesen</a>',
    'auth-pages' => 'Sie sind nicht berechtigt, "Pages" anzusehen <a href="http://docs.pnp4nagios.org/de/faq/16">FAQ online lesen</a>',
    'page-config-dir' => 'Keine page-Konfigurationsdatei in "%s" gefunden <a href="http://docs.pnp4nagios.org/de/faq/17">FAQ online lesen</a>',
    'xport-host-service' => 'Xport-Controller benötigt "host"- und "srv"-URL-Parameter. <a href="http://docs.pnp4nagios.org/de/faq/18">FAQ online lesen</a>',
	'mod-rewrite' => 'Apache Rewrite Module ist nicht aktiviert. <a href="http://docs.pnp4nagios.org/de/faq/19">Read FAQ online</a>',
    'tpl-no-services-found' => 'Es wurden keine Services gefunden "%s". <a href="http://docs.pnp4nagios.org/de/faq/20">Read FAQ online</a>',
    'tpl-no-hosts-found' => 'Es wurden keine Hosts gefunden "%s". <a href="http://docs.pnp4nagios.org/de/faq/21">Read FAQ online</a>',
    'no-templates-found' => 'Es wurde kein passendes Template gefunden. <a href="http://docs.pnp4nagios.org/de/faq/22">Read FAQ online</a>',
    'not_authorized' => 'You are not authorized to view this host/service',
    'remote_user_missing' => 'Remote user is missing. Authentication check cancled. <a href="http://docs.pnp4nagios.org/faq/23">Read FAQ online</a>',
    'livestatus_socket_error' => 'Livestatus Socket error: %s (%s) <a href="http://docs.pnp4nagios.org/faq/24">Read FAQ online</a>',
    'not_authorized_for_host_overview' => 'You are not authorized to access this host overview page.',
    'xml-generic_error' => 'XML file "%s" not parsable.<p><strong>XML Errors:</strong>%s</p>',
);
