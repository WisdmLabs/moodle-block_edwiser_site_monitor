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

$string['configtitle'] = 'عنوان كتلة مراقب موقع Edwiser';
$string['pluginname'] = 'مراقب موقع Edwiser';
$string['privacy:metadata'] = 'تعرض كتلة مراقب الموقع معلومات حول الخادم.';
$string['liveusage'] = 'استخدام حي';
$string['last24hoursusage'] = 'استخدام آخر 24 ساعة';
$string['edwiserplugins'] = 'إضافات Edwiser';
$string['otherplugins'] = 'إضافات أخرى';
$string['cpu'] = 'وحدة المعالجة المركزية (CPU)';
$string['memory'] = 'الذاكرة';
$string['storage'] = 'التخزين';
$string['cpuusage'] = 'استخدام وحدة المعالجة المركزية';
$string['memoryusage'] = 'استخدام الذاكرة';
$string['storageusage'] = 'استخدام التخزين';
$string['users'] = 'المستخدمين';
$string['activeusers'] = 'نشط';
$string['suspendedusers'] = 'موقوف';
$string['deletedusers'] = 'محذوف';
$string['liveusers'] = 'المستخدمين النشطين';
$string['crontask'] = 'مراقب موقع Edwiser - جمع إحصاءات استخدام 24 ساعة';
$string['crontaskwarning'] = 'لعرض بيانات استخدام 24 ساعة يجب عليك تشغيل مهمة cron كل 5 دقائق. اتبع هذا <a target="_blank" href="{$a}">الرابط</a> لإعداد cron.';
$string['today'] = 'اليوم';
$string['cannotshowonsidebar'] = 'لا يمكن عرض مخطط الاستخدام في الشريط الجانبي. يرجى نقل الكتلة إلى منطقة المحتوى لعرض مخطط الاستخدام.';
$string['lowusage'] = 'استخدام منخفض';
$string['moderateusage'] = 'استخدام معتدل';
$string['highusage'] = 'استخدام عالي';
$string['yaxistitle'] = 'الاستخدام (%)';
$string['xaxistitle'] = 'الوقت';
$string['messageprovider:notifications'] = 'أخبار وتحديثات Edwiser';
$string['news'] = 'أخبار وتحديثات Edwiser';

// Privacy strings.
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'تخزن استخدام وحدة المعالجة المركزية والذاكرة والتخزين للموقع.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'الوقت الذي يتم فيه تسجيل الاستخدام.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'استخدام وحدة المعالجة المركزية للموقع عند تسجيله.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'استخدام الذاكرة للموقع عند تسجيله.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'استخدام التخزين للموقع عند تسجيله.';


// Config page strings.
$string['edwiser_site_monitor:addinstance'] = 'إضافة كتلة جديدة لمراقب الموقع';
$string['edwiser_site_monitor:myaddinstance'] = 'إضافة مراقب موقع جديد إلى لوحة التحكم';
$string['livestatusrefreshrate'] = 'معدل التحديث';
$string['livestatusrefreshrate_help'] = 'معدل تحديث لعلامة التبويب حالة حية بالثواني';
$string['livestatusrefreshrate_invalid'] = 'يرجى تقديم معدل تحديث صالح بالثواني';

$string['thresholdheader'] = 'حد الحد الأدنى';
$string['usageemailsubject'] = '{$a}: مراقب الموقع Edwiser - تحذير الاستخدام';
$string['header-type'] = 'النوع';
$string['hader-threshold'] = 'الحد';
$string['header-expected'] = 'منخفض/عالي';
$string['header-current'] = 'الحالي';
$string['low'] = 'منخفض';
$string['high'] = 'عالي';

$string['enablethreshold'] = 'تمكين حدود الحد';
$string['enablethreshold_help'] = 'سيتمكن هذا من فحص الحدود وإرسال بريد إلكتروني إذا كان الاستخدام أقل من الحد الأدنى أو أعلى من الحد الأعلى';

$string['cpulowerlimit'] = 'الحد الأدنى لوحدة المعالجة المركزية (CPU)';
$string['cpuhigherlimit'] = 'الحد الأعلى لوحدة المعالجة المركزية (CPU)';
$string['cpulowerlimit_help'] = 'الحد الأدنى لاستخدام وحدة المعالجة المركزية';
$string['cpuhigherlimit_help'] = 'الحد الأعلى لاستخدام وحدة المعالجة المركزية';
$string['cpulimit_invalid'] = 'يرجى تقديم حد أدنى صالح لوحدة المعالجة المركزية';
$string['cpulimit_overlap'] = 'يرجى تقديم حد أدنى صالح لوحدة المعالجة المركزية. لا يمكن أن يكون الحد الأعلى مساويًا أو أقل من الحد الأدنى';

$string['memorylowerlimit'] = 'الحد الأدنى للذاكرة';
$string['memoryhigherlimit'] = 'الحد الأعلى للذاكرة';
$string['memorylowerlimit_help'] = 'الحد الأدنى لاستخدام الذاكرة';
$string['memoryhigherlimit_help'] = 'الحد الأعلى لاستخدام الذاكرة';
$string['memorylimit_invalid'] = 'يرجى تقديم حد أدنى صالح للذاكرة';
$string['memorylimit_overlap'] = 'يرجى تقديم حد أدنى صالح للذاكرة. لا يمكن أن يكون الحد الأعلى مساويًا أو أقل من الحد الأدنى';

$string['storagelowerlimit'] = 'الحد الأدنى للتخزين';
$string['storagehigherlimit'] = 'الحد الأعلى للتخزين';
$string['storagelowerlimit_help'] = 'الحد الأدنى لاستخدام التخزين';
$string['storagehigherlimit_help'] = 'الحد الأعلى لاستخدام التخزين';
$string['storagelimit_invalid'] = 'يرجى تقديم حد أدنى صالح للتخزين';
$string['storagelimit_overlap'] = 'يرجى تقديم حد أدنى صالح للتخزين. لا يمكن أن يكون الحد الأعلى مساويًا أو أقل من الحد الأدنى';

// Plugin update list.
$string['errors'] = 'أخطاء';
$string['invalidzip'] = 'ملف ZIP غير صالح. <b>{$a}</b>';
$string['errorfetching'] = 'خطأ في جلب ملف ZIP للإضافة. <b>{$a}</b>';
$string['errorfetchingexist'] = 'خطأ في جلب ملف ZIP للإضافة: الموقع المستهدف موجود بالفعل. <b>{$a}</b>';
$string['unabletounzip'] = 'غير قادر على فك ضغط <b>{$a}</b>';
$string['unabletoloadplugindetails'] = 'غير قادر على تحميل تفاصيل الإضافة <b>{$a}</b>';
$string['requirehigherversion'] = 'يتطلب إصدار Moodle: <b>{$a}</b>';
$string['noupdates'] = 'كل شيء محدّث بالفعل.';
$string['invalidjsonfile'] = 'قائمة منتجات Edwiser غير صالحة.';
$string['recommendation'] = 'الإضافات الموصى بها';
$string['comeswith'] = 'يأتي مع: {$a}';
$string['changelog'] = 'سجل التغييرات';
$string['installnew'] = 'تثبيت إضافة جديدة';

// Recommendation.
$string['knowmore'] = 'المزيد من المعلومات';

// Contact us.
$string['contactus'] = 'اتصل بنا';
$string['policy'] = 'أوافق على <a href="{$a}" target="_blank">سياسة الخصوصية</a>';
$string['emailsent'] = 'تم إرسال البريد الإلكتروني.';
$string['emailfailed'] = 'فشل إرسال البريد الإلكتروني.';
$string['checksettings'] = 'يرجى التحقق من <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['thankssubject'] = 'شكرًا لتواصلك معنا.';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">مرحبًا {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>شكرًا لتواصلك معنا.<br><br> سيقوم فريق الدعم لدينا بالرد عليك في غضون الـ 24 ساعة القادمة.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">هذا هو بريد إلكتروني تم إنشاؤه تلقائيًا. لأي استفسارات إضافية أو مساعدة، يمكنك التواصل معنا على {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['emailsuccess'] = 'تم إرسال رسالتك بنجاح. شكرًا لك.';
$string['failed'] = 'فشل';
