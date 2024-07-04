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

$string['configtitle'] = 'Titre du bloc de surveillance du site Edwiser';
$string['pluginname'] = 'Surveillance du site Edwiser';
$string['privacy:metadata'] = 'Le bloc de surveillance du site affiche des informations sur le serveur.';
$string['liveusage'] = 'Utilisation en direct';
$string['last24hoursusage'] = 'Utilisation des dernières 24 heures';
$string['edwiserplugins'] = 'Plugins Edwiser';
$string['otherplugins'] = 'Autres plugins';
$string['cpu'] = 'CPU';
$string['memory'] = 'Mémoire';
$string['storage'] = 'Stockage';
$string['cpuusage'] = 'Utilisation du CPU';
$string['memoryusage'] = 'Utilisation de la mémoire';
$string['storageusage'] = 'Utilisation du stockage';
$string['users'] = 'Utilisateurs';
$string['activeusers'] = 'Actifs';
$string['suspendedusers'] = 'Suspendus';
$string['deletedusers'] = 'Supprimés';
$string['liveusers'] = 'Utilisateurs en direct';
$string['crontask'] = 'Edwiser Site Monitor - Collecte des statistiques d\'utilisation des dernières 24 heures';
$string['crontaskwarning'] = 'Pour voir les données d\'utilisation des 24 dernières heures, vous devez exécuter la tâche cron toutes les 5 minutes. Suivez ce <a target="_blank" href="{$a}">lien</a> pour configurer cron.';
$string['today'] = 'Aujourd\'hui';
$string['cannotshowonsidebar'] = 'Impossible d\'afficher le graphique d\'utilisation dans la barre latérale. Veuillez déplacer le bloc vers la région de contenu pour voir le graphique d\'utilisation.';
$string['lowusage'] = 'Faible utilisation';
$string['moderateusage'] = 'Utilisation modérée';
$string['highusage'] = 'Utilisation élevée';
$string['yaxistitle'] = 'Utilisation (%)';
$string['xaxistitle'] = 'Temps';
$string['messageprovider:notifications'] = 'Nouvelles et mises à jour Edwiser';
$string['news'] = 'Nouvelles et mises à jour Edwiser';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Stocke l\'utilisation du CPU, de la mémoire et du stockage du site.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Heure à laquelle l\'utilisation est enregistrée.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Utilisation du CPU du site lorsqu\'elle est enregistrée.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Utilisation de la mémoire du site lorsqu\'elle est enregistrée.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Utilisation du stockage du site lorsqu\'elle est enregistrée.';

// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'Ajouter un nouveau bloc de surveillance du site';
$string['edwiser_site_monitor:myaddinstance'] = 'Ajouter un nouveau moniteur de site au tableau de bord';
$string['livestatusrefreshrate'] = 'Taux de rafraîchissement';
$string['livestatusrefreshrate_help'] = 'Taux de rafraîchissement pour l\'onglet de statut en direct en secondes';
$string['livestatusrefreshrate_invalid'] = 'Veuillez fournir un taux de rafraîchissement valide en secondes';

$string['thresholdheader'] = 'Limite de seuil';
$string['usageemailsubject'] = '{$a}: Edwiser Site Monitor - Avertissement d\'utilisation';
$string['header-type'] = 'Type';
$string['hader-threshold'] = 'Seuil';
$string['header-expected'] = 'Bas/Haut';
$string['header-current'] = 'Actuel';
$string['low'] = 'Bas';
$string['high'] = 'Haut';

$string['enablethreshold'] = 'Activer les limites de seuil';
$string['enablethreshold_help'] = 'Cela activera les vérifications de seuil et enverra un e-mail si l\'utilisation est inférieure à la limite inférieure ou supérieure à la limite maximale.';

$string['cpulowerlimit'] = 'Limite inférieure du CPU';
$string['cpuhigherlimit'] = 'Limite supérieure du CPU';
$string['cpulowerlimit_help'] = 'Limite inférieure de l\'utilisation du CPU';
$string['cpuhigherlimit_help'] = 'Limite supérieure de l\'utilisation du CPU';
$string['cpulimit_invalid'] = 'Veuillez fournir une limite de CPU valide';
$string['cpulimit_overlap'] = 'Veuillez fournir une limite de CPU valide. La limite supérieure ne peut pas être égale ou inférieure à la limite inférieure';
$string['cpucommandnotallowed'] = 'Ligne de commande <strong>/proc/cpuinfo</strong> --Permission refusée.';

$string['memorylowerlimit'] = 'Limite inférieure de la mémoire';
$string['memoryhigherlimit'] = 'Limite supérieure de la mémoire';
$string['memorylowerlimit_help'] = 'Limite inférieure de l\'utilisation de la mémoire';
$string['memoryhigherlimit_help'] = 'Limite supérieure de l\'utilisation de la mémoire';
$string['memorylimit_invalid'] = 'Veuillez fournir une limite de mémoire valide';
$string['memorylimit_overlap'] = 'Veuillez fournir une limite de mémoire valide. La limite supérieure ne peut pas être égale ou inférieure à la limite inférieure';
$string['memorycommandnotallowed'] = 'Ligne de commande <strong>free</strong> --Permission refusée.';

$string['storagelowerlimit'] = 'Limite inférieure du stockage';
$string['storagehigherlimit'] = 'Limite supérieure du stockage';
$string['storagelowerlimit_help'] = 'Limite inférieure de l\'utilisation du stockage';
$string['storagehigherlimit_help'] = 'Limite supérieure de l\'utilisation du stockage';
$string['storagelimit_invalid'] = 'Veuillez fournir une limite de stockage valide';
$string['storagelimit_overlap'] = 'Veuillez fournir une limite de stockage valide. La limite supérieure ne peut pas être égale ou inférieure à la limite inférieure';

// Plugin update list.
$string['errors'] = 'Erreurs';
$string['invalidzip'] = 'Fichier zip invalide. <b>{$a}</b>';
$string['errorfetching'] = 'Erreur lors de la récupération du plugin ZIP. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Erreur lors de la récupération du plugin ZIP : l\'emplacement cible existe déjà. <b>{$a}</b>';
$string['unabletounzip'] = 'Impossible de décompresser <b>{$a}</b>';
$string['unabletoloadplugindetails'] = 'Impossible de charger les détails du plugin <b>{$a}</b>';
$string['requirehigherversion'] = 'Nécessite la version Moodle : <b>{$a}</b>';
$string['noupdates'] = 'Tout est à jour.';
$string['invalidjsonfile'] = 'Liste de produits Edwiser invalide.';
$string['recommendation'] = 'Plugins recommandés';
$string['comeswith'] = 'Fourni avec : {$a}';
$string['changelog'] = 'Journal des modifications';
$string['installnew'] = 'Installer un nouveau plugin';

// Recommendation.
$string['knowmore'] = 'En savoir plus';

// Contact us.
$string['contactus'] = 'Contactez-nous';
$string['policy'] = 'J\'accepte la <a href="{$a}" target="_blank">Politique de confidentialité</a>';
$string['emailsent'] = 'E-mail envoyé.';
$string['emailfailed'] = 'Impossible d\'envoyer l\'e-mail.';
$string['checksettings'] = 'Veuillez vérifier <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'Merci de nous avoir contactés.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Bonjour {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Merci de nous avoir contactés.<br><br>Notre équipe de support vous répondra dans les prochaines 24 heures.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Ceci est un e-mail généré automatiquement. Pour toute question supplémentaire ou aide, vous pouvez nous contacter à l\'adresse {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'Votre message a été envoyé avec succès. Merci.';
$string['failed'] = 'Échec';
