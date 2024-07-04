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

$string['configtitle'] = 'Título do bloco de monitoramento do site Edwiser';
$string['pluginname'] = 'Monitor do Site Edwiser';
$string['privacy:metadata'] = 'O bloco de monitoramento do site exibe informações sobre o servidor.';
$string['liveusage'] = 'Uso ao vivo';
$string['last24hoursusage'] = 'Uso das últimas 24 horas';
$string['edwiserplugins'] = 'Plugins Edwiser';
$string['otherplugins'] = 'Outros Plugins';
$string['cpu'] = 'CPU';
$string['memory'] = 'Memória';
$string['storage'] = 'Armazenamento';
$string['cpuusage'] = 'Uso da CPU';
$string['memoryusage'] = 'Uso de memória';
$string['storageusage'] = 'Uso de armazenamento';
$string['users'] = 'Usuários';
$string['activeusers'] = 'Ativos';
$string['suspendedusers'] = 'Suspensos';
$string['deletedusers'] = 'Excluídos';
$string['liveusers'] = 'Usuários ativos';
$string['crontask'] = 'Edwiser Site Monitor - Coletar estatísticas de uso de 24 horas';
$string['crontaskwarning'] = 'Para ver os dados de uso das últimas 24 horas, você precisa executar a tarefa cron a cada 5 minutos. Siga este <a target="_blank" href="{$a}">link</a> para configurar o cron.';
$string['today'] = 'Hoje';
$string['cannotshowonsidebar'] = 'Não é possível mostrar o gráfico de uso na barra lateral. Por favor, mova o bloco para a região de conteúdo para ver o gráfico de uso.';
$string['lowusage'] = 'Uso baixo';
$string['moderateusage'] = 'Uso moderado';
$string['highusage'] = 'Uso alto';
$string['yaxistitle'] = 'Uso (%)';
$string['xaxistitle'] = 'Tempo';
$string['messageprovider:notifications'] = 'Notícias e atualizações do Edwiser';
$string['news'] = 'Notícias e atualizações do Edwiser';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Armazena o uso de CPU, memória e armazenamento do site.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Hora em que o uso é registrado.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Uso da CPU do site quando registrado.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Uso de memória do site quando registrado.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Uso de armazenamento do site quando registrado.';


// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'Adicionar um novo bloco de monitoramento do site';
$string['edwiser_site_monitor:myaddinstance'] = 'Adicionar um novo monitor de site ao painel';
$string['livestatusrefreshrate'] = 'Taxa de atualização';
$string['livestatusrefreshrate_help'] = 'Taxa de atualização para a aba de status ao vivo em segundos';
$string['livestatusrefreshrate_invalid'] = 'Por favor, forneça uma taxa de atualização válida em segundos';

$string['thresholdheader'] = 'Limite de limite';
$string['usageemailsubject'] = '{$a}: Edwiser Site Monitor - Aviso de uso';
$string['header-type'] = 'Tipo';
$string['hader-threshold'] = 'Limite';
$string['header-expected'] = 'Baixo/Alto';
$string['header-current'] = 'Atual';
$string['low'] = 'Baixo';
$string['high'] = 'Alto';

$string['enablethreshold'] = 'Ativar limites de limite';
$string['enablethreshold_help'] = 'Isso ativará verificações de limite e enviará um e-mail se o uso estiver abaixo do limite inferior ou acima do limite superior';

$string['cpulowerlimit'] = 'Limite inferior da CPU';
$string['cpuhigherlimit'] = 'Limite superior da CPU';
$string['cpulowerlimit_help'] = 'Limite inferior de uso da CPU';
$string['cpuhigherlimit_help'] = 'Limite superior de uso da CPU';
$string['cpulimit_invalid'] = 'Por favor, forneça um limite de CPU válido';
$string['cpulimit_overlap'] = 'Por favor, forneça um limite de CPU válido. O limite superior não pode ser igual ou menor que o limite inferior';
$string['cpucommandnotallowed'] = 'Linha de comando <strong>/proc/cpuinfo</strong> -- Permissão negada.';

$string['memorylowerlimit'] = 'Limite inferior de memória';
$string['memoryhigherlimit'] = 'Limite superior de memória';
$string['memorylowerlimit_help'] = 'Limite inferior de uso de memória';
$string['memoryhigherlimit_help'] = 'Limite superior de uso de memória';
$string['memorylimit_invalid'] = 'Por favor, forneça um limite de memória válido';
$string['memorylimit_overlap'] = 'Por favor, forneça um limite de memória válido. O limite superior não pode ser igual ou menor que o limite inferior';
$string['memorycommandnotallowed'] = 'Linha de comando <strong>free</strong> -- Permissão negada.';

$string['storagelowerlimit'] = 'Limite inferior de armazenamento';
$string['storagehigherlimit'] = 'Limite superior de armazenamento';
$string['storagelowerlimit_help'] = 'Limite inferior de uso de armazenamento';
$string['storagehigherlimit_help'] = 'Limite superior de uso de armazenamento';
$string['storagelimit_invalid'] = 'Por favor, forneça um limite de armazenamento válido';
$string['storagelimit_overlap'] = 'Por favor, forneça um limite de armazenamento válido. O limite superior não pode ser igual ou menor que o limite inferior';

// Plugin update list.
$string['errors'] = 'Erros';
$string['invalidzip'] = 'Arquivo zip inválido. <b>{$a}</b>';
$string['errorfetching'] = 'Erro ao buscar o plugin ZIP. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Erro ao buscar o plugin ZIP: localização de destino já existe. <b>{$a}</b>';
$string['unabletounzip'] = 'Não foi possível descompactar <b>{$a}</b>';
$string['unabletoloadplugindetails'] = 'Não foi possível carregar os detalhes do plugin <b>{$a}</b>';
$string['requirehigherversion'] = 'Requer versão do Moodle: <b>{$a}</b>';
$string['noupdates'] = 'Tudo está atualizado.';
$string['invalidjsonfile'] = 'Lista de produtos Edwiser inválida.';
$string['recommendation'] = 'Plugins recomendados';
$string['comeswith'] = 'Inclui: {$a}';
$string['changelog'] = 'Registro de alterações';
$string['installnew'] = 'Instalar novo plugin';

// Recommendation.
$string['knowmore'] = 'Saiba mais';

// Contact us.
$string['contactus'] = 'Entre em contato';
$string['policy'] = 'Eu concordo com a <a href="{$a}" target="_blank">Política de Privacidade</a>';
$string['emailsent'] = 'E-mail enviado.';
$string['emailfailed'] = 'Não foi possível enviar o e-mail.';
$string['checksettings'] = 'Por favor, verifique <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'Obrigado por entrar em contato conosco.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Olá {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Obrigado por entrar em contato conosco.<br><br>Nossa equipe de suporte entrará em contato nas próximas 24 horas.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Este é um e-mail gerado automaticamente. Para quaisquer dúvidas adicionais ou ajuda, você pode entrar em contato conosco em {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'Sua mensagem foi enviada com sucesso. Obrigado.';
$string['failed'] = 'Falhou';
