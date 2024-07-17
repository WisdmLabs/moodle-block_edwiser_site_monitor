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

$string['configtitle'] = 'Tytuł bloku monitorowania witryny Edwiser';
$string['pluginname'] = 'Monitor witryny Edwiser';
$string['privacy:metadata'] = 'Blok monitora witryny pokazuje informacje o serwerze.';
$string['liveusage'] = 'Użycie na żywo';
$string['last24hoursusage'] = 'Użycie z ostatnich 24 godzin';
$string['edwiserplugins'] = 'Wtyczki Edwiser';
$string['otherplugins'] = 'Inne wtyczki';
$string['cpu'] = 'CPU';
$string['memory'] = 'Pamięć';
$string['storage'] = 'Przechowywanie';
$string['cpuusage'] = 'Użycie CPU';
$string['memoryusage'] = 'Użycie pamięci';
$string['storageusage'] = 'Użycie przechowywania';
$string['users'] = 'Użytkownicy';
$string['activeusers'] = 'Aktywni';
$string['suspendedusers'] = 'Zawieszeni';
$string['deletedusers'] = 'Usunięci';
$string['liveusers'] = 'Aktywni użytkownicy';
$string['crontask'] = 'Monitor witryny Edwiser - Zbieranie statystyk użycia z ostatnich 24 godzin';
$string['crontaskwarning'] = 'Aby zobaczyć dane z ostatnich 24 godzin, uruchom zadanie cron co 5 minut. Kliknij ten <a target="_blank" href="{$a}">link</a>, aby skonfigurować cron.';
$string['today'] = 'Dziś';
$string['cannotshowonsidebar'] = 'Nie można wyświetlić wykresu użycia na pasku bocznym. Przenieś blok do obszaru zawartości, aby zobaczyć wykres użycia.';
$string['lowusage'] = 'Niskie użycie';
$string['moderateusage'] = 'Średnie użycie';
$string['highusage'] = 'Wysokie użycie';
$string['yaxistitle'] = 'Użycie (%)';
$string['xaxistitle'] = 'Czas';
$string['messageprovider:notifications'] = 'Aktualności i aktualizacje Edwiser';
$string['news'] = 'Aktualności i aktualizacje Edwiser';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Przechowuje użycie CPU, pamięci i przechowywania witryny.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Czas, kiedy użycie jest rejestrowane.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Użycie CPU witryny w momencie rejestracji.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Użycie pamięci witryny w momencie rejestracji.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Użycie przechowywania witryny w momencie rejestracji.';

// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'Dodaj nowy blok monitorowania witryny';
$string['edwiser_site_monitor:myaddinstance'] = 'Dodaj nowy monitor witryny do Pulpitu';
$string['livestatusrefreshrate'] = 'Częstotliwość odświeżania';
$string['livestatusrefreshrate_help'] = 'Częstotliwość odświeżania dla zakładki z danymi na żywo w sekundach';
$string['livestatusrefreshrate_invalid'] = 'Podaj prawidłową częstotliwość odświeżania w sekundach';

$string['thresholdheader'] = 'Limit progowy';
$string['usageemailsubject'] = '{$a}: Monitor witryny Edwiser - Ostrzeżenie o użyciu';
$string['header-type'] = 'Typ';
$string['hader-threshold'] = 'Prog';
$string['header-expected'] = 'Niski/Wysoki';
$string['header-current'] = 'Obecny';
$string['low'] = 'Niski';
$string['high'] = 'Wysoki';

$string['enablethreshold'] = 'Włącz limity progowe';
$string['enablethreshold_help'] = 'To pozwoli na sprawdzanie limitów progowych i wysyłanie e-maili, jeśli użycie jest niższe od dolnego limitu lub wyższe od górnego limitu';

$string['cpulowerlimit'] = 'Dolny limit CPU';
$string['cpuhigherlimit'] = 'Górny limit CPU';
$string['cpulowerlimit_help'] = 'Dolny limit użycia CPU';
$string['cpuhigherlimit_help'] = 'Górny limit użycia CPU';
$string['cpulimit_invalid'] = 'Podaj prawidłowy limit CPU';
$string['cpulimit_overlap'] = 'Podaj prawidłowy limit CPU. Górny limit nie może być równy ani mniejszy od dolnego limitu';
$string['cpucommandnotallowed'] = 'Polecenie wiersza poleceń <strong>/proc/cpuinfo</strong> -- Odmowa dostępu.';

$string['memorylowerlimit'] = 'Dolny limit pamięci';
$string['memoryhigherlimit'] = 'Górny limit pamięci';
$string['memorylowerlimit_help'] = 'Dolny limit użycia pamięci';
$string['memoryhigherlimit_help'] = 'Górny limit użycia pamięci';
$string['memorylimit_invalid'] = 'Podaj prawidłowy limit pamięci';
$string['memorylimit_overlap'] = 'Podaj prawidłowy limit pamięci. Górny limit nie może być równy ani mniejszy od dolnego limitu';
$string['memorycommandnotallowed'] = 'Polecenie wiersza poleceń <strong>free</strong> -- Odmowa dostępu.';

$string['storagelowerlimit'] = 'Dolny limit przechowywania';
$string['storagehigherlimit'] = 'Górny limit przechowywania';
$string['storagelowerlimit_help'] = 'Dolny limit użycia przechowywania';
$string['storagehigherlimit_help'] = 'Górny limit użycia przechowywania';
$string['storagelimit_invalid'] = 'Podaj prawidłowy limit przechowywania';
$string['storagelimit_overlap'] = 'Podaj prawidłowy limit przechowywania. Górny limit nie może być równy ani mniejszy od dolnego limitu';

// Plugin update list.
$string['errors'] = 'Błędy';
$string['invalidzip'] = 'Nieprawidłowy plik ZIP. <b>{$a}</b>';
$string['errorfetching'] = 'Błąd podczas pobierania pliku ZIP wtyczki. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Błąd podczas pobierania pliku ZIP wtyczki: docelowe miejsce istnieje. <b>{$a}</b>';
$string['unabletounzip'] = 'Nie można wypakować <b>{$a}</b>';
$string['unabletoloadplugindetails'] = 'Nie można załadować szczegółów wtyczki <b>{$a}</b>';
$string['requirehigherversion'] = 'Wymaga wersji Moodle: <b>{$a}</b>';
$string['noupdates'] = 'Wszystko jest aktualne.';
$string['invalidjsonfile'] = 'Nieprawidłowa lista produktów Edwiser.';
$string['recommendation'] = 'Polecane wtyczki';
$string['comeswith'] = 'Zawiera: {$a}';
$string['changelog'] = 'Dziennik zmian';
$string['installnew'] = 'Zainstaluj nową wtyczkę';

// Recommendation.
$string['knowmore'] = 'Dowiedz się więcej';

// Contact us.
$string['contactus'] = 'Skontaktuj się z nami';
$string['policy'] = 'Zgadzam się na <a href="{$a}" target="_blank">Politykę prywatności</a>';
$string['emailsent'] = 'E-mail wysłany.';
$string['emailfailed'] = 'Nie udało się wysłać e-maila.';
$string['checksettings'] = 'Proszę sprawdź <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'Dziękujemy za kontakt.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Cześć {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Dziękujemy za kontakt.<br><br> Nasz zespół wsparcia odpowie w ciągu najbliższych 24 godzin.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">To jest automatycznie generowany e-mail. W razie dodatkowych pytań lub pomocy, możesz skontaktować się z nami pod adresem {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'Twoja wiadomość została wysłana pomyślnie. Dziękujemy.';
$string['failed'] = 'Niepowodzenie';
$string['submit'] = 'Prześlij';