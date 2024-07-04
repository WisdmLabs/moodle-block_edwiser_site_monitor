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

$string['configtitle'] = 'Título del bloque Monitor del sitio Edwiser';
$string['pluginname'] = 'Monitor del sitio Edwiser';
$string['privacy:metadata'] = 'El bloque de monitor del sitio muestra información sobre el servidor.';
$string['liveusage'] = 'Uso en vivo';
$string['last24hoursusage'] = 'Uso de las últimas 24 horas';
$string['edwiserplugins'] = 'Plugins de Edwiser';
$string['otherplugins'] = 'Otros plugins';
$string['cpu'] = 'CPU';
$string['memory'] = 'Memoria';
$string['storage'] = 'Almacenamiento';
$string['cpuusage'] = 'Uso de CPU';
$string['memoryusage'] = 'Uso de memoria';
$string['storageusage'] = 'Uso de almacenamiento';
$string['users'] = 'Usuarios';
$string['activeusers'] = 'Activos';
$string['suspendedusers'] = 'Suspendidos';
$string['deletedusers'] = 'Eliminados';
$string['liveusers'] = 'Usuarios activos';
$string['crontask'] = 'Edwiser Monitor del sitio - Recopilar estadísticas de uso de 24 horas';
$string['crontaskwarning'] = 'Para ver los datos de uso de 24 horas, es necesario ejecutar la tarea de cron cada 5 minutos. Siga este <a target="_blank" href="{$a}">enlace</a> para configurar cron.';
$string['today'] = 'Hoy';
$string['cannotshowonsidebar'] = 'No se puede mostrar el gráfico de uso en la barra lateral. Mueva el bloque a la región de contenido para ver el gráfico de uso.';
$string['lowusage'] = 'Uso bajo';
$string['moderateusage'] = 'Uso moderado';
$string['highusage'] = 'Uso alto';
$string['yaxistitle'] = 'Uso (%)';
$string['xaxistitle'] = 'Tiempo';
$string['messageprovider:notifications'] = 'Noticias y actualizaciones de Edwiser';
$string['news'] = 'Noticias y actualizaciones de Edwiser';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Almacena el uso de CPU, memoria y almacenamiento del sitio.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Tiempo en que se registra el uso.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Uso de CPU del sitio cuando se registra.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Uso de memoria del sitio cuando se registra.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Uso de almacenamiento del sitio cuando se registra.';

// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'Agregar un nuevo bloque de monitor de sitio';
$string['edwiser_site_monitor:myaddinstance'] = 'Agregar un nuevo monitor de sitio al panel de control';
$string['livestatusrefreshrate'] = 'Tasa de actualización';
$string['livestatusrefreshrate_help'] = 'Tasa de actualización para la pestaña de estado en vivo en segundos';
$string['livestatusrefreshrate_invalid'] = 'Proporcione una tasa de actualización válida en segundos';

$string['thresholdheader'] = 'Límite de umbral';
$string['usageemailsubject'] = '{$a}: Edwiser Monitor del sitio - Advertencia de uso';
$string['header-type'] = 'Tipo';
$string['hader-threshold'] = 'Umbral';
$string['header-expected'] = 'Bajo/Alto';
$string['header-current'] = 'Actual';
$string['low'] = 'Bajo';
$string['high'] = 'Alto';

$string['enablethreshold'] = 'Habilitar límites de umbral';
$string['enablethreshold_help'] = 'Esto habilitará verificaciones de umbral y enviará correos electrónicos si el uso es menor que el límite inferior o mayor que el límite superior';

$string['cpulowerlimit'] = 'Límite inferior de CPU';
$string['cpuhigherlimit'] = 'Límite superior de CPU';
$string['cpulowerlimit_help'] = 'Límite inferior del uso de CPU';
$string['cpuhigherlimit_help'] = 'Límite superior del uso de CPU';
$string['cpulimit_invalid'] = 'Proporcione un límite de CPU válido';
$string['cpulimit_overlap'] = 'Proporcione un límite de CPU válido. El límite superior no puede ser igual o menor que el límite inferior';
$string['cpucommandnotallowed'] = 'Línea de comandos <strong>/proc/cpuinfo</strong> -- Permiso denegado.';

$string['memorylowerlimit'] = 'Límite inferior de memoria';
$string['memoryhigherlimit'] = 'Límite superior de memoria';
$string['memorylowerlimit_help'] = 'Límite inferior del uso de memoria';
$string['memoryhigherlimit_help'] = 'Límite superior del uso de memoria';
$string['memorylimit_invalid'] = 'Proporcione un límite de memoria válido';
$string['memorylimit_overlap'] = 'Proporcione un límite de memoria válido. El límite superior no puede ser igual o menor que el límite inferior';
$string['memorycommandnotallowed'] = 'Línea de comandos <strong>free</strong> -- Permiso denegado.';

$string['storagelowerlimit'] = 'Límite inferior de almacenamiento';
$string['storagehigherlimit'] = 'Límite superior de almacenamiento';
$string['storagelowerlimit_help'] = 'Límite inferior del uso de almacenamiento';
$string['storagehigherlimit_help'] = 'Límite superior del uso de almacenamiento';
$string['storagelimit_invalid'] = 'Proporcione un límite de almacenamiento válido';
$string['storagelimit_overlap'] = 'Proporcione un límite de almacenamiento válido. El límite superior no puede ser igual o menor que el límite inferior';

// Plugin update list.
$string['errors'] = 'Errores';
$string['invalidzip'] = 'Archivo ZIP no válido. <b>{$a}</b>';
$string['errorfetching'] = 'Error al obtener el ZIP del plugin. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Error al obtener el ZIP del plugin: la ubicación de destino ya existe. <b>{$a}</b>';
$string['unabletounzip'] = 'No se puede descomprimir <b>{$a}</b>';
$string['unabletoloadplugindetails'] = 'No se pueden cargar los detalles del plugin <b>{$a}</b>';
$string['requirehigherversion'] = 'Requiere versión de Moodle: <b>{$a}</b>';
$string['noupdates'] = 'Todo está actualizado.';
$string['invalidjsonfile'] = 'Lista de productos de Edwiser no válida.';
$string['recommendation'] = 'Plugins recomendados';
$string['comeswith'] = 'Viene con: {$a}';
$string['changelog'] = 'Registro de cambios';
$string['installnew'] = 'Instalar nuevo plugin';

// Recommendation.
$string['knowmore'] = 'Saber más';

// Contact us.
$string['contactus'] = 'Contáctenos';
$string['policy'] = 'Acepto la <a href="{$a}" target="_blank">Política de privacidad</a>';
$string['emailsent'] = 'Correo electrónico enviado.';
$string['emailfailed'] = 'No se pudo enviar el correo electrónico.';
$string['checksettings'] = 'Por favor, revise <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'Gracias por contactarnos.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hola {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Gracias por contactarnos.<br><br> Nuestro equipo de soporte responderá dentro de las próximas 24 horas.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Este es un correo electrónico generado automáticamente. Para consultas adicionales o ayuda, puede comunicarse con nosotros en {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'Su mensaje se envió correctamente. Gracias.';
$string['failed'] = 'Falló';
