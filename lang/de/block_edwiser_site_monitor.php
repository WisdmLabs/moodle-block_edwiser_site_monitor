<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_edwiser_site_monitor'.
 *
 * @package    block_edwiser_site_monitor
 * @copyright  2019 WisdmLabs <edwiser@wisdmlabs.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Yogesh Shirsath
 */

defined('MOODLE_INTERNAL') || die();

$string['configtitle'] = 'Edwiser Site Monitor Block Titel';
$string['pluginname'] = 'Edwiser Site Monitor';
$string['privacy:metadata'] = 'Der Site-Monitor-Block zeigt Informationen über den Server an.';
$string['liveusage'] = 'Live-Nutzung';
$string['last24hoursusage'] = 'Nutzung der letzten 24 Stunden';
$string['edwiserplugins'] = 'Edwiser Plugins';
$string['otherplugins'] = 'Andere Plugins';
$string['cpu'] = 'CPU';
$string['memory'] = 'Arbeitsspeicher';
$string['storage'] = 'Speicher';
$string['cpuusage'] = 'CPU-Auslastung';
$string['memoryusage'] = 'Arbeitsspeicherauslastung';
$string['storageusage'] = 'Speicherauslastung';
$string['users'] = 'Benutzer';
$string['activeusers'] = 'Aktiv';
$string['suspendedusers'] = 'Ausgesetzt';
$string['deletedusers'] = 'Gelöscht';
$string['liveusers'] = 'Aktive Benutzer';
$string['crontask'] = 'Edwiser Site Monitor - Sammeln von Statistiken zur 24-Stunden-Nutzung';
$string['crontaskwarning'] = 'Um die Daten zur 24-Stunden-Nutzung zu sehen, muss die Cron-Aufgabe alle 5 Minuten ausgeführt werden. Folgen Sie diesem <a target="_blank" href="{$a}">Link</a>, um die Cron einzurichten.';
$string['today'] = 'Heute';
$string['cannotshowonsidebar'] = 'Diagramm zur Nutzung kann nicht in der Seitenleiste angezeigt werden. Verschieben Sie den Block bitte in den Inhaltsbereich, um das Diagramm zur Nutzung zu sehen.';
$string['lowusage'] = 'Geringe Nutzung';
$string['moderateusage'] = 'Moderate Nutzung';
$string['highusage'] = 'Hohe Nutzung';
$string['yaxistitle'] = 'Nutzung (%)';
$string['xaxistitle'] = 'Zeit';
$string['messageprovider:notifications'] = 'Edwiser Neuigkeiten und Updates';
$string['news'] = 'Edwiser Neuigkeiten und Updates';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Speichert CPU-, Arbeitsspeicher- und Speicherauslastung der Seite.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Zeitpunkt der Aufzeichnung der Nutzung.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'CPU-Auslastung der Seite bei der Aufzeichnung.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Arbeitsspeicherauslastung der Seite bei der Aufzeichnung.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Speicherauslastung der Seite bei der Aufzeichnung.';


// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'Neuen Site-Monitor-Block hinzufügen';
$string['edwiser_site_monitor:myaddinstance'] = 'Neuen Site-Monitor zum Dashboard hinzufügen';
$string['livestatusrefreshrate'] = 'Aktualisierungsrate';
$string['livestatusrefreshrate_help'] = 'Aktualisierungsrate für den Tab Live-Status in Sekunden';
$string['livestatusrefreshrate_invalid'] = 'Bitte geben Sie eine gültige Aktualisierungsrate in Sekunden an';

$string['thresholdheader'] = 'Schwellenwert-Limit';
$string['usageemailsubject'] = '{$a}: Edwiser Site Monitor - Warnung bei Nutzung';
$string['header-type'] = 'Typ';
$string['hader-threshold'] = 'Schwellenwert';
$string['header-expected'] = 'Niedrig/Hoch';
$string['header-current'] = 'Aktuell';
$string['low'] = 'Niedrig';
$string['high'] = 'Hoch';

$string['enablethreshold'] = 'Schwellenwert-Limits aktivieren';
$string['enablethreshold_help'] = 'Dies aktiviert Schwellenwert-Überprüfungen und sendet eine E-Mail, wenn die Nutzung unter den unteren Grenzwert fällt oder den obersten Grenzwert überschreitet.';

$string['cpulowerlimit'] = 'Untere Grenze der CPU';
$string['cpuhigherlimit'] = 'Obere Grenze der CPU';
$string['cpulowerlimit_help'] = 'Untere Grenze der CPU-Auslastung';
$string['cpuhigherlimit_help'] = 'Obere Grenze der CPU-Auslastung';
$string['cpulimit_invalid'] = 'Bitte geben Sie einen gültigen CPU-Grenzwert an';
$string['cpulimit_overlap'] = 'Bitte geben Sie einen gültigen CPU-Grenzwert an. Die obere Grenze kann nicht gleich oder kleiner als die untere Grenze sein';
$string['cpucommandnotallowed'] = 'Befehlszeile <strong>/proc/cpuinfo</strong> --Zugriff verweigert.';

$string['memorylowerlimit'] = 'Untere Grenze des Arbeitsspeichers';
$string['memoryhigherlimit'] = 'Obere Grenze des Arbeitsspeichers';
$string['memorylowerlimit_help'] = 'Untere Grenze der Arbeitsspeicher-Auslastung';
$string['memoryhigherlimit_help'] = 'Obere Grenze der Arbeitsspeicher-Auslastung';
$string['memorylimit_invalid'] = 'Bitte geben Sie einen gültigen Arbeitsspeicher-Grenzwert an';
$string['memorylimit_overlap'] = 'Bitte geben Sie einen gültigen Arbeitsspeicher-Grenzwert an. Die obere Grenze kann nicht gleich oder kleiner als die untere Grenze sein';
$string['memorycommandnotallowed'] = 'Befehlszeile <strong>free</strong> --Zugriff verweigert.';

$string['storagelowerlimit'] = 'Untere Grenze des Speichers';
$string['storagehigherlimit'] = 'Obere Grenze des Speichers';
$string['storagelowerlimit_help'] = 'Untere Grenze der Speicher-Auslastung';
$string['storagehigherlimit_help'] = 'Obere Grenze der Speicher-Auslastung';
$string['storagelimit_invalid'] = 'Bitte geben Sie einen gültigen Speicher-Grenzwert an';
$string['storagelimit_overlap'] = 'Bitte geben Sie einen gültigen Speicher-Grenzwert an. Die obere Grenze kann nicht gleich oder kleiner als die untere Grenze sein';

// Plugin update list.
$string['errors'] = 'Fehler';
$string['invalidzip'] = 'Ungültige ZIP-Datei. <b>{$a}</b>';
$string['errorfetching'] = 'Fehler beim Abrufen der Plugin-ZIP. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Fehler beim Abrufen der Plugin-ZIP: Zielort existiert bereits. <b>{$a}</b>';
$string['unabletounzip'] = 'Entpacken von <b>{$a}</b> nicht möglich.';
$string['unabletoloadplugindetails'] = 'Laden der Plugin-Details nicht möglich <b>{$a}</b>';
$string['requirehigherversion'] = 'Benötigt Moodle-Version: <b>{$a}</b>';
$string['noupdates'] = 'Alles ist auf dem neuesten Stand.';
$string['invalidjsonfile'] = 'Ungültige Edwiser Produktliste.';
$string['recommendation'] = 'Empfohlene Plugins';
$string['comeswith'] = 'Enthält: {$a}';
$string['changelog'] = 'Änderungsprotokoll';
$string['installnew'] = 'Neues Plugin installieren';

// Recommendation.
$string['knowmore'] = 'Mehr erfahren';

// Contact us.
$string['contactus'] = 'Kontaktieren Sie uns';
$string['policy'] = 'Ich stimme der <a href="{$a}" target="_blank">Datenschutzrichtlinie</a> zu';
$string['emailsent'] = 'E-Mail gesendet.';
$string['emailfailed'] = 'E-Mail konnte nicht gesendet werden.';
$string['checksettings'] = 'Bitte überprüfen Sie <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'Vielen Dank für Ihre Kontaktaufnahme.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hallo {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Vielen Dank für Ihre Kontaktaufnahme.<br><br>Unser Support-Team wird sich innerhalb der nächsten 24 Stunden bei Ihnen melden.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Dies ist eine automatisch generierte E-Mail. Für weitere Fragen oder Hilfe können Sie uns unter {$a->email} kontaktieren.</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'Ihre Nachricht wurde erfolgreich gesendet. Vielen Dank.';
$string['failed'] = 'Fehlgeschlagen';
