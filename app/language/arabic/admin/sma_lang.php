<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * Module: General Language File for common lang keys
 * Language: English
 *
 * Last edited:
 * 30th April 2015
 *
 * Package:
 * Stock Manage Advance v3.0
 *
 * You can translate this file to your language.
 * For instruction on new language setup, please visit the documentations.
 * You also can share your language files by emailing to saleem@wmeat.store
 * Thank you
 */

/* --------------------- CUSTOM FIELDS ------------------------ */
/*
* Below are custome field labels
* Please only change the part after = and make sure you change the the words in between '';
* $lang['bcf1']                         = 'حقل مخصص الفواتير 1';
* Don't change this                     = 'You can change this part';
* For support email contact@wmeat.store Thank you!
*/

$lang['bcf1'] = 'حقل مخصص للفواتير 1';
$lang['bcf2'] = 'حقل مخصص الفواتير 2';
$lang['bcf3'] = 'حقل مخصص الفواتير 3';
$lang['bcf4'] = 'حقل مخصص الفواتير 4';
$lang['bcf5'] = 'حقل مخصص الفواتير 5';
$lang['bcf6'] = 'حقل مخصص الفواتير 6';
$lang['pcf1'] = 'حقل مخصص للمنتج 1';
$lang['pcf2'] = 'حقل مخصص للمنتج 2';
$lang['pcf3'] = 'حقل مخصص للمنتج 3';
$lang['pcf4'] = 'حقل مخصص للمنتج 4';
$lang['pcf5'] = 'حقل مخصص للمنتج 5';
$lang['pcf6'] = 'حقل مخصص للمنتج 6';
$lang['ccf1'] = 'حقل مخصص العملاء 1';
$lang['ccf2'] = 'حقل مخصص العملاء 2';
$lang['ccf3'] = 'حقل مخصص العملاء 3';
$lang['ccf4'] = 'حقل مخصص العملاء 4';
$lang['ccf5'] = 'حقل مخصص العملاء 5';
$lang['ccf6'] = 'حقل مخصص العملاء 6';
$lang['scf1'] = 'حقل مخصص المورد 1';
$lang['scf2'] = 'حقل مخصص المورد 2';
$lang['scf3'] = 'حقل مخصص المورد 3';
$lang['scf4'] = 'حقل مخصص المورد 4';
$lang['scf5'] = 'حقل مخصص المورد 5';
$lang['scf6'] = 'حقل مخصص المورد 6';

/* ----------------- DATATABLES LANGUAGE ---------------------- */
/*
* Below are datatables language entries
* Please only change the part after = and make sure you change the the words in between '';
* 'sEmptyTable'                    => 'No data available in table',
* Don't change this                 => 'You can change this part but not the word between and ending with _ like _START_;
* For support email support@wmeat.store Thank you!
*/

$lang['datatables_lang'] = [
    'sEmptyTable'     => 'لا توجد بيانات في الجدول',
    'sInfo'           => 'عرض _START_ إلى _END_ من _TOTAL_ مقالات',
    'sInfoEmpty'      => 'عرض 0 إلى 0 من 0 مقالات',
    'sInfoFiltered'   => '(تمت تصفيتها من _MAX_ مجموع الإدخالات)',
    'sInfoPostFix'    => '',
    'sInfoThousands'  => ',',
    'sLengthMenu'     => 'اظهار _MENU_ ',
    'sLoadingRecords' => 'تحميل...',
    'sProcessing'     => 'تحويل...',
    'sSearch'         => 'بحث',
    'sZeroRecords'    => 'لا توجد سجلات مطابقة',
    'oAria'           => [
        'sSortAscending'  => ': تفعيل لفرز العمود تصاعدي',
        'sSortDescending' => ': تفعيل لفرز العمود الهابطة',
    ],
    'oPaginate' => [
        'sFirst'    => '<< أولى',
        'sLast'     => 'آخر >>',
        'sNext'     => 'التالي >',
        'sPrevious' => '< سابق',
    ],
];

/* ----------------- Select2 LANGUAGE ---------------------- */
/*
* Below are select2 lib language entries
* Please only change the part after = and make sure you change the the words in between '';
* 's2_errorLoading'                => 'The results could not be loaded',
* Don't change this                 => 'You can change this part but not the word between {} like {t};
* For support email support@wmeat.store Thank you!
*/

$lang['select2_lang'] = [
    'formatMatches_s'         => '، دخول الصحافة لتحديده.',
    'formatMatches_p'         => 'هي النتائج المتاحة، واستخدام أعلى وأسفل مفاتيح الأسهم للتنقل.',
    'formatNoMatches'         => 'لا توجد مباريات',
    'formatInputTooShort'     => 'يرجى كتابة {n} أو أكثر من الأحرف',
    'formatInputTooLong_s'    => 'يرجى حذف {n} حرف ',
    'formatInputTooLong_p'    => 'يرجى حذف {n} حرف ',
    'formatSelectionTooBig_s' => 'يمكنك فقط تحديد {n} البند ',
    'formatSelectionTooBig_p' => 'يمكنك فقط اختيار {n} البنود',
    'formatLoadMore'          => 'تحميل المزيد من النتائج ...',
    'formatAjaxError'         => 'فشل طلب اياكس',
    'formatSearching'         => 'البحث ... ',
];

/* ----------------- SMA GENERAL LANGUAGE KEYS -------------------- */

$lang['home']                                      = 'البداية';
$lang['dashboard']                                 = 'لوحة الاسنعلام';
$lang['username']                                  = 'اسم المستخدم';
$lang['password']                                  = 'كلمة المرور';
$lang['first_name']                                = 'الاسم الأول';
$lang['last_name']                                 = 'لقب';
$lang['confirm_password']                          = 'تأكيد كلمة المرور';
$lang['email']                                     = 'البريد الإلكتروني';
$lang['phone']                                     = 'هاتف';
$lang['company']                                   = 'شركة';
$lang['product_code']                              = 'كود المنتج';
$lang['product_name']                              = 'اسم المنتج';
$lang['cname']                                     = 'اسم العميل';
$lang['barcode_symbology']                         = 'رموز الباركود';
$lang['product_unit']                              = 'وحدة المنتج';
$lang['product_price']                             = 'سعر المنتج';
$lang['contact_person']                            = 'شخص الاتصال';
$lang['email_address']                             = 'عنوان البريد الإلكتروني';
$lang['address']                                   = 'عنوان';
$lang['city']                                      = 'مدينة';
$lang['today']                                     = 'اليوم';
$lang['welcome']                                   = 'مرحبا بك';
$lang['profile']                                   = 'الملف الشخصي';
$lang['change_password']                           = 'تغيير كلمة المرور';
$lang['logout']                                    = 'الخروج';
$lang['notifications']                             = 'إشعارات';
$lang['calendar']                                  = 'تقويم';
$lang['messages']                                  = 'رسائل';
$lang['styles']                                    = 'الأنماط';
$lang['language']                                  = 'اللغة';
$lang['alerts']                                    = 'التنبيهات';
$lang['list_products']                             = 'قائمة المنتجات';
$lang['add_product']                               = 'إضافة المنتج';
$lang['print_barcode_label']                       = 'طباعة الباركود - الملصقات';
$lang['print_barcodes']                            = 'طباعة الباركود';
$lang['print_labels']                              = 'تسميات الطباعة';
$lang['import_products']                           = 'استيراد المنتجات';
$lang['update_price']                              = 'تحديث الأسعار';
$lang['damage_products']                           = 'المنتجات التالفة';
$lang['sales']                                     = 'مبيعات';
$lang['list_sales']                                = 'قائمة المبيعات';
$lang['add_sale']                                  = 'إضافة عمليه بيع';
$lang['deliveries']                                = 'التسليم';
$lang['gift_cards']                                = 'بطاقات هدية';
$lang['quotes']                                    = 'عروض الاسعار';
$lang['list_quotes']                               = 'قائمة عروض الاسعار';
$lang['add_quote']                                 = 'إضافة عرض سعر';
$lang['purchases']                                 = 'مشتريات';
$lang['list_purchases']                            = 'قائمة مشتريات';
$lang['add_purchase']                              = 'إضافة عمليه شراء';
$lang['add_purchase_by_csv']                       = 'إضافة شراء بواسطة ملف CSV';
$lang['transfers']                                 = 'تحويل المخزون';
$lang['list_transfers']                            = 'قائمة تحويل المخزون';
$lang['add_transfer']                              = 'إضافة تحويل مخزون';
$lang['add_transfer_by_csv']                       = 'إضافة نقل بواسطة ملف CSV';
$lang['people']                                    = 'المستخدمين';
$lang['list_users']                                = 'قائمة المستخدمين';
$lang['new_user']                                  = 'إضافة مستخدم';
$lang['list_billers']                              = 'قائمة موظفي الكاشير';
$lang['add_biller']                                = 'إضافة موظف كاشير';
$lang['list_customers']                            = 'قائمة العملاء';
$lang['add_customer']                              = 'إضافة العملاء';
$lang['list_suppliers']                            = 'قائمة الموردون';
$lang['add_supplier']                              = 'إضافة مورد';
$lang['settings']                                  = 'إعدادات';
$lang['system_settings']                           = 'إعدادات النظام';
$lang['change_logo']                               = 'تغيير اللوجو';
$lang['currencies']                                = 'العملات';
$lang['attributes']                                = 'متغيرات المنتج';
$lang['customer_groups']                           = 'مجموعات العملاء';
$lang['categories']                                = 'الفئات الاساسية';
$lang['subcategories']                             = 'الفئات الفرعية';
$lang['tax_rates']                                 = 'أسعار الضريبة';
$lang['warehouses']                                = 'المستودعات';
$lang['email_templates']                           = 'قوالب البريد الإلكتروني';
$lang['group_permissions']                         = 'ضوابط وصلاحيات المجموعة';
$lang['backup_database']                           = 'قاعدة بيانات النسخ الاحتياطي';
$lang['reports']                                   = 'تقارير';
$lang['overview_chart']                            = 'نظرة عامة على الرسم البياني';
$lang['warehouse_stock']                           = 'الرسم البياني للمخزون بالمستودع';
$lang['product_quantity_alerts']                   = 'قائمة منبه نقص الكميات';
$lang['product_expiry_alerts']                     = 'تنبيه انتهاء صلاحيات المنتج';
$lang['products_report']                           = 'تقرير عن المنتجات';
$lang['daily_sales']                               = 'المبيعات اليومية';
$lang['monthly_sales']                             = 'المبيعات الشهرية';
$lang['sales_report']                              = 'تقرير المبيعات';
$lang['payments_report']                           = 'تقرير عن المدفوعات';
$lang['profit_and_loss']                           = 'الأرباح و / أو الخسارة';
$lang['purchases_report']                          = 'تقرير عن المشتريات';
$lang['customers_report']                          = 'تقرير العملاء';
$lang['suppliers_report']                          = 'تقرير الموردين';
$lang['staff_report']                              = 'تقرير الموظفين';
$lang['your_ip']                                   = 'عنوان بروتوكول الإنترنت الخاص بك';
$lang['last_login_at']                             = 'آخر تسجيل دخول في';
$lang['notification_post_at']                      = 'إعلام منشور في';
$lang['quick_links']                               = 'روابط سريعة';
$lang['date']                                      = 'تاريخ';
$lang['reference_no']                              = 'الرقم المرجعي';
$lang['products']                                  = 'المنتجات';
$lang['customers']                                 = 'الزبائن';
$lang['suppliers']                                 = 'الموردين';
$lang['users']                                     = 'المستخدمين';
$lang['latest_five']                               = 'أحدث خمسة';
$lang['total']                                     = 'مجموع';
$lang['payment_status']                            = 'حالة الدفع';
$lang['paid']                                      = 'مدفوع';
$lang['customer']                                  = 'عميل';
$lang['status']                                    = 'وضع';
$lang['amount']                                    = 'مبلغ';
$lang['supplier']                                  = 'مورد';
$lang['from']                                      = 'من';
$lang['to']                                        = 'إلى';
$lang['name']                                      = 'اسم';
$lang['create_user']                               = 'إضافة مستخدم';
$lang['gender']                                    = 'جنس';
$lang['biller']                                    = 'كاشير';
$lang['select']                                    = 'اختر';
$lang['warehouse']                                 = 'مستودع';
$lang['active']                                    = 'نشط';
$lang['inactive']                                  = 'غير فعال';
$lang['all']                                       = 'الكل';
$lang['list_results']                              = 'الرجاء استخدام الجدول أدناه للتنقل أو تصفية النتائج. يمكنك تنزيل الجدول .';
$lang['actions']                                   = 'الإجراءات';
$lang['pos']                                       = 'نقاط البيع';
$lang['access_denied']                             = 'وصول مرفوض! لم يكن لديك حق الوصول إلى الصفحة المطلوبة. إذا كنت تعتقد أنه عن طريق الخطأ، الرجاء الاتصال بمسؤول.';
$lang['add']                                       = 'إضافة';
$lang['edit']                                      = 'تحرير';
$lang['delete']                                    = 'حذف';
$lang['view']                                      = 'عرض';
$lang['update']                                    = 'تحديث';
$lang['save']                                      = 'حفظ';
$lang['login']                                     = 'دخول';
$lang['submit']                                    = ' تنفيذ';
$lang['no']                                        = 'لا';
$lang['yes']                                       = 'نعم';
$lang['disable']                                   = 'تعطيل';
$lang['enable']                                    = 'تمكين';
$lang['enter_info']                                = 'يرجى ملء المعلومات أدناه. تسميات الحقول التي تحمل علامة * هي حقول الإدخال.';
$lang['update_info']                               = 'يرجى تحديث المعلومات الواردة أدناه. تسميات الحقول التي تحمل علامة * هي حقول الإدخال.';
$lang['no_suggestions']                            = 'غير قادر على الحصول على بيانات للحصول على اقتراحات، يرجى مراجعة الإدخال';
$lang['i_m_sure']                                  = 'نعم أنا واثق';
$lang['r_u_sure']                                  = 'هل أنت متأكد؟';
$lang['export_to_excel']                           = 'تصدير إلى ملف Excel';
$lang['export_to_pdf']                             = 'تصدير إلى ملف PDF';
$lang['image']                                     = 'صورة';
$lang['sale']                                      = 'بيع';
$lang['quote']                                     = 'عرض اسعار';
$lang['purchase']                                  = 'شراء';
$lang['transfer']                                  = 'نقل';
$lang['payment']                                   = 'دفع';
$lang['payments']                                  = 'المدفوعات';
$lang['orders']                                    = 'أوامر';
$lang['pdf']                                       = 'PDF';
$lang['vat_no']                                    = 'قيمة الضريبة المضافة';
$lang['country']                                   = 'بلد';
$lang['add_user']                                  = 'إضافة مستخدم';
$lang['type']                                      = 'نوع';
$lang['person']                                    = 'شخص';
$lang['state']                                     = 'دولة';
$lang['postal_code']                               = 'الرمز البريدي';
$lang['id']                                        = 'الهوية';
$lang['close']                                     = 'غلق';
$lang['male']                                      = 'ذكر';
$lang['female']                                    = 'أنثى';
$lang['notify_user']                               = 'اخطارات المستخدمين';
$lang['notify_user_by_email']                      = 'إبلاغ المستخدمين عن طريق البريد الإلكتروني';
$lang['billers']                                   = 'موظفي الكاشير';
$lang['all_warehouses']                            = 'جميع المستودعات';
$lang['category']                                  = 'الفئات الرئيسية';
$lang['product_cost']                              = 'تكلفة المنتج';
$lang['quantity']                                  = 'كمية';
$lang['loading_data_from_server']                  = 'تحميل البيانات من الخادم';
$lang['excel']                                     = 'EXCEL';
$lang['print']                                     = 'طباعة';
$lang['ajax_error']                                = 'Ajax Error.';
$lang['product_tax']                               = 'الضريبة المنتج';
$lang['order_tax']                                 = 'النظام الضريبي';
$lang['upload_file']                               = 'تحميل الملف';
$lang['download_sample_file']                      = 'تحميل الملف عينة';
$lang['csv1']                                      = 'وينبغي أن تظل السطر الأول في ملف CSV تحميلها كما هو. يرجى عدم تغيير ترتيب الأعمدة.';
$lang['csv2']                                      = 'ترتيب الأعمدة الصحيح';
$lang['csv3']                                      = 'وأمبير. يجب اتباع هذا. إذا كنت تستخدم أي لغة أخرى ثم الإنجليزية، يرجى التأكد من ملف CSV هو UTF-8 ترميز وليس حفظها مع علامة ترتيب بايت (BOM)';
$lang['import']                                    = 'استيراد';
$lang['note']                                      = 'مذكرة';
$lang['grand_total']                               = 'المجموع العام';
$lang['download_pdf']                              = 'تحميل بصيغة PDF';
$lang['no_zero_required']                          = 'مطلوب حقل٪ الصورة';
$lang['no_product_found']                          = 'لم يتم العثور على المنتج';
$lang['pending']                                   = 'عملية معلقة';
$lang['sent']                                      = 'تمت';
$lang['completed']                                 = 'عملية مكتملة';
$lang['shipping']                                  = 'الشحن';
$lang['add_product_to_order']                      = 'الرجاء إضافة المنتجات إلى قائمة النظام';
$lang['order_items']                               = 'لعناصر النظام';
$lang['net_unit_cost']                             = 'صافي تكلفة الوحدة';
$lang['net_unit_price']                            = 'صافي سعر الوحدة';
$lang['expiry_date']                               = 'تاريخ انتهاء الصلاحية';
$lang['subtotal']                                  = 'اجمالي الصنف';
$lang['reset']                                     = 'إعادة تعيين';
$lang['items']                                     = 'الاصناف';
$lang['au_pr_name_tip']                            = 'يرجى البدء بكتابة كود / اسم اقتراحات أو الباركود فقط مسح';
$lang['no_match_found']                            = 'لا نتائج مطابقة وجدت! قد يكون المنتج من المخزون في مستودع المحدد.';
$lang['csv_file']                                  = 'ملف CSV';
$lang['document']                                  = 'إرفاق المستندات';
$lang['product']                                   = 'منتج';
$lang['user']                                      = 'المستخدم';
$lang['created_by']                                = 'تم الانشاء بواسطة ملف';
$lang['loading_data']                              = 'تحميل البيانات من السيرفر';
$lang['tel']                                       = 'الهاتف';
$lang['ref']                                       = 'إشارة';
$lang['description']                               = 'وصف';
$lang['code']                                      = 'كود';
$lang['tax']                                       = 'ضريبة';
$lang['unit_price']                                = 'سعر الوحدة';
$lang['discount']                                  = 'خصم';
$lang['order_discount']                            = 'نسبة الخصم';
$lang['total_amount']                              = 'المبلغ الكلي لل';
$lang['download_excel']                            = 'تحميل كما إكسل';
$lang['subject']                                   = 'موضوع';
$lang['cc']                                        = 'CC';
$lang['bcc']                                       = 'BCC';
$lang['message']                                   = 'رسالة';
$lang['show_bcc']                                  = 'إظهار / إخفاء BCC';
$lang['price']                                     = 'السعر';
$lang['add_product_manually']                      = 'اضافة المنتج يدويا';
$lang['currency']                                  = 'عملة';
$lang['product_discount']                          = 'خصم المنتج';
$lang['email_sent']                                = 'إرسال البريد الإلكتروني بنجاح';
$lang['add_event']                                 = 'إضافة حدث';
$lang['add_modify_event']                          = 'إضافة / تعديل الحدث';
$lang['adding']                                    = 'مضيفا ...';
$lang['delete']                                    = 'حذف';
$lang['deleting']                                  = 'حذف ...';
$lang['calendar_line']                             = 'يرجى النقر على التاريخ لإضافة / تعديل الحدث.';
$lang['discount_label']                            = 'خصم بالنسبة أو بالرقم';
$lang['product_expiry']                            = 'انتهاء المنتج';
$lang['unit']                                      = 'وحدة';
$lang['cost']                                      = 'تكلفة';
$lang['tax_method']                                = 'نوع وطريقة الضريبة';
$lang['inclusive']                                 = 'شاملة';
$lang['exclusive']                                 = 'استثنائية';
$lang['expiry']                                    = 'أنتهاء الصلاحية';
$lang['customer_group']                            = 'مجموعة العملاء';
$lang['is_required']                               = 'هذا الحقل مطلوب';
$lang['form_action']                               = 'عمل نموذج';
$lang['return_sales']                              = 'مرتجع المبيعات';
$lang['list_return_sales']                         = 'قائمة مرتجعات المبيعات';
$lang['no_data_available']                         = 'لا تتوافر بيانات';
$lang['disabled_in_demo']                          = 'تم تعطيل هذه الميزة';
$lang['payment_reference_no']                      = 'الدفع بمرجع رقم';
$lang['gift_card_no']                              = 'رقم بطاقة الهدية';
$lang['paying_by']                                 = 'الدفع بواسطة';
$lang['cash']                                      = 'نقدا';
$lang['gift_card']                                 = 'بطاقة هدية';
$lang['CC']                                        = 'بطاقة إئتمان';
$lang['cheque']                                    = 'شيك';
$lang['cc_no']                                     = 'رقم بطاقة الائتمان';
$lang['cc_holder']                                 = 'أسم حامل البطاقة';
$lang['card_type']                                 = 'نوع البطاقة';
$lang['Visa']                                      = 'تأشيرة';
$lang['MasterCard']                                = 'ماستر كارد';
$lang['Amex']                                      = 'أمريكان إكسبريس';
$lang['Discover']                                  = 'ديسكفر';
$lang['month']                                     = 'شهر';
$lang['year']                                      = 'عام';
$lang['cvv2']                                      = 'CVV2';
$lang['cheque_no']                                 = 'رقم الشيك';
$lang['Visa']                                      = 'فيزا كارت';
$lang['MasterCard']                                = 'ماستر كارد';
$lang['Amex']                                      = 'أمريكان إكسبريس';
$lang['Discover']                                  = 'بطاقة ديسكفر';
$lang['send_email']                                = 'إرسال البريد الإلكتروني';
$lang['order_by']                                  = 'تم الطلب بواسطة ملف';
$lang['updated_by']                                = 'تحديث قام به';
$lang['update_at']                                 = 'تم التحديث في';
$lang['error_404']                                 = 'خطأ 404';
$lang['default_customer_group']                    = 'مجموعة العملاء الافتراضية';
$lang['pos_settings']                              = 'إعدادات نقاط البيع';
$lang['pos_sales']                                 = 'مبيعات نقاط البيع';
$lang['seller']                                    = 'بائع';
$lang['ip:']                                       = 'رقم الانترنت بروتوكول:';
$lang['sp_tax']                                    = 'ضرائب المنتج المباع';
$lang['pp_tax']                                    = 'ضرائب شراء المنتج';
$lang['overview_chart_heading']                    = 'نظرة عامة على قيم المخزون - الضرائب - كما بالامكان تحيل التقرير بصيغة -PDF -JPG .';
$lang['stock_value']                               = 'قيمة المخزون';
$lang['stock_value_by_price']                      = 'قيمة المخزون بسعر البيع';
$lang['stock_value_by_cost']                       = 'قيمة المخزون بسعر التكلفة';
$lang['sold']                                      = 'مباعة';
$lang['purchased']                                 = 'شراء';
$lang['chart_lable_toggle']                        = 'يمكنك تغيير الرسم البياني عن طريق النقر وسيلة إيضاح التخطيط. انقر فوق أي أسطورة فوق لإظهار / إخفاء ذلك في الرسم البياني.';
$lang['register_report']                           = 'سجل تقرير';
$lang['sEmptyTable']                               = 'لا توجد بيانات في الجدول';
$lang['upcoming_events']                           = 'الأحداث القادمة';
$lang['clear_ls']                                  = 'مسح جميع البيانات المحفوظة محليا';
$lang['clear']                                     = 'مسح';
$lang['edit_order_discount']                       = 'تحرير ترتيب الخصم';
$lang['product_variant']                           = 'المنتج البديل';
$lang['product_variants']                          = 'بدائل المنتج';
$lang['prduct_not_found']                          = 'الصنف غير موجود';
$lang['list_open_registers']                       = 'قائمة السجلات المفتوحة';
$lang['delivery']                                  = 'التسليم';
$lang['serial_no']                                 = 'رقم السيريال';
$lang['logo']                                      = 'شعار الشركة';
$lang['attachment']                                = 'ملحقات';
$lang['balance']                                   = 'الرصيد';
$lang['nothing_found']                             = 'لا توجد سجلات مطابقة';
$lang['db_restored']                               = 'قاعدة بيانات استعادة بنجاح.';
$lang['backups']                                   = 'النسخ الاحتياطي';
$lang['best_seller']                               = 'أفضل مبيعات';
$lang['chart']                                     = 'رسم بياني';
$lang['received']                                  = 'تم الاستلام';
$lang['returned']                                  = 'مرتجع';
$lang['award_points']                              = 'النقاط المستحقة';
$lang['expenses']                                  = 'المصروفات';
$lang['add_expense']                               = 'إضافة المصروفات';
$lang['other']                                     = 'آخر';
$lang['none']                                      = 'لا شيء';
$lang['calculator']                                = 'آلة حاسبة';
$lang['updates']                                   = 'التحديثات';
$lang['update_available']                          = 'يتوفر تحديث جديد، يرجى تحديث الآن.';
$lang['please_select_customer_warehouse']          = 'الرجاء تحديد : العملاء - المستودعات';
$lang['variants']                                  = 'المتغيرات';
$lang['add_sale_by_csv']                           = 'إضافة بيع بواسطة ملف CSV';
$lang['categories_report']                         = 'تقرير عن الفئات';
$lang['adjust_quantity']                           = 'ضبط الكمية';
$lang['quantity_adjustments']                      = 'التعديلات الكمية';
$lang['partial']                                   = 'دفع جزئي';
$lang['unexpected_value']                          = 'قيمة غير متوقعة';
$lang['select_above']                              = 'الرجاء تحديد فوق لأول مرة';
$lang['no_user_selected']                          = 'أي مستخدم المحدد، الرجاء اختيار مستخدم واحد على الأقل';
$lang['due']                                       = 'بسبب';
$lang['ordered']                                   = 'أمر';
$lang['today_profit']                              = 'ارباح اليوم';
$lang['profit']                                    = 'ربح';
$lang['unit_and_net_tip']                          = 'محسوبة على حدة (مع الضرائب) وشبكة (بدون ضريبة) أي معنى <strong> وحدة (صافي) </strong> من جميع المبيعات';
$lang['expiry_alerts']                             = 'تنبيه بصلاحية المنتج';
$lang['quantity_alerts']                           = 'تنبيه بالكميات المنخفضة';
$lang['please_select_these_before_adding_product'] = 'يرجى تحديد هذه قبل إضافة أي منتج';
$lang['list_gift_cards']                           = 'قائمة كروت الهدايا';
$lang['list_expenses']                             = 'قائمة المصروفات';
$lang['list_return_purchases']                     = 'قائمة مرتجعات المشتريات';
$lang['expense_categories']                        = 'فئات المصروفات';
$lang['daily_purchases']                           = 'المشتريات اليومية';
$lang['monthly_purchases']                         = 'المشتريات الشهرية';
$lang['expenses_report']                           = 'تقرير المصروفات';
$lang['authorize']                                 = 'Authorize.net';
$lang['expense_categories']                        = 'تصنيفات المصروفات';
$lang['edit_event']                                = 'Edit Event';
$lang['title']                                     = 'Title';
$lang['event_error']                               = 'Title & Start is required';
$lang['start']                                     = 'Start';
$lang['end']                                       = 'End';
$lang['event_added']                               = 'Event successfully added';
$lang['event_updated']                             = 'Event successfully updated';
$lang['event_deleted']                             = 'Event successfully deleted';
$lang['event_color']                               = 'Event Color';
$lang['toggle_alignment']                          = 'Toggle Alignment';
$lang['images_location_tip']                       = 'The images should be uploaded in <strong>assets/uploads/</strong> folder and thumbnails with same name as csv to <strong>assets/uploads/thumbs/</strong>';
$lang['this_sale']                                 = 'This Sale';
$lang['return_ref']                                = 'رقم مرجع المرتجع';
$lang['return_total']                              = 'اجمالي المرتجع';
$lang['reference']                                 = 'Reference';
$lang['no_subcategory']                            = 'No subcategory';
$lang['returned_items']                            = 'مرتجع بالصنف';
$lang['return_payments']                           = 'مرتجع بالمبلغ';
$lang['units']                                     = 'الوحدات';
$lang['price_group']                               = 'مجموعة التسعيرة';
$lang['price_groups']                              = 'مجموعات التسعيرة';
$lang['no_record_selected']                        = 'No record selected, please select at least one row';
$lang['brand']                                     = 'الماركة';
$lang['brands']                                    = 'الماركات';
$lang['file_x_exist']                              = 'System unable to find the file, it might be deleted or moved.';
$lang['status_updated']                            = 'The status has been successfully updated';
$lang['x_col_required']                            = 'First %d columns are required and other all are optional.';
$lang['brands_report']                             = 'تقرير الماركات';
$lang['add_adjustment']                            = 'اضافة عملية تعديل كميات';
$lang['best_sellers']                              = 'الافضل مبيعا';
$lang['adjustments_report']                        = 'تقرير تعديلات الكميات';
$lang['stock_counts']                              = 'جرد المستودعات';
$lang['count_stock']                               = 'اضافة جرد مستودع';
$lang['download']                                  = 'Download';
$lang['list_printers']                             = 'عرض الطابعات';
$lang['add_printer']                               = 'اضافة طابعة';
$lang['shop']                                      = 'Shop';
$lang['cart']                                      = 'Cart';
$lang['api_keys']                                  = 'API Keys';
$lang['slug']                                      = 'Slug';
$lang['symbol']                                    = 'Symbol';
$lang['packaging']                                 = 'Packing List';
$lang['rack']                                      = 'Rack';
$lang['staff_sales']                               = 'Staff Sales';
$lang['all_sales']                                 = 'All Sales';
$lang['call_back_heading']                         = 'If you want to use social auth, your callback url should be as below';
$lang['replace_xxxxxx_with_provider']              = 'Please replace XXXXXX with provider i.e, Google, Facebook, Twitter etc';
$lang['documentation_at']                          = 'More info at';
$lang['enable_config_file']                        = 'You can enable/disable providers in the following config file';
$lang['sales_x_delivered']                         = 'Sales not delivered';
$lang['order_item']                                = 'Order Item';
$lang['update_status']                             = 'Update Status';
$lang['purchase_code']                             = 'Purchase Code';
$lang['envato_username']                           = 'Envato Username';
$lang['update_successful']                         = 'Item successfully updated';
$lang['using_latest_update']                       = 'You are using the latest version.';
$lang['version']                                   = 'Version';
$lang['install']                                   = 'Install';
$lang['changelog']                                 = 'Change Log';
$lang['update_done']                               = 'Update has been successfully installed';
$lang['update_heading']                            = 'This page will help you check and install the updates easily with single click. <strong>If there are more than 1 updates available, please update them one by one starting from the top (lowest version)</strong>.';

$lang['please_select_these_before_adding_product'] = 'Please select these before adding any product';

$lang['tax_summary']      = 'Tax Summary';
$lang['qty']              = 'Qty/Weight';
$lang['tax_excl']         = 'Tax Excl Amt';
$lang['tax_amt']          = 'Tax Amt';
$lang['total_tax_amount'] = 'Total Tax Amount';
$lang['gst']              = 'GST';
$lang['hsn_code']         = 'HSN Code';
$lang['cgst']             = 'CGST';
$lang['sgst']             = 'SGST';
$lang['igst']             = 'IGST';
$lang['returns']          = 'المرتجعات';
$lang['list_returns']     = 'قائمة المرتجعات';
$lang['add_return']       = 'اضافة مرتجع';
$lang['tax_report']       = 'تقرير الضرائب';
$lang['gst_no']           = 'GST Number';
$lang['no.']              = 'No.';
$lang['promos']           = 'العروض الترويجية';

/* ---------------------- Front End Settings ---------------------- */
$lang['shop']                       = 'Shop';
$lang['shop_sales']                 = 'Shop Sales';
$lang['front_end']                  = 'Front End';
$lang['site_offline']               = 'Site Offline';
$lang['visit_us_later']             = 'Please visit us again in few days.';
$lang['shop_settings']              = 'Shop Settings';
$lang['slider_settings']            = 'Slider Settings';
$lang['silder_updated']             = 'Slider settings updated';
$lang['list_pages']                 = 'List Pages';
$lang['add_page']                   = 'Add Page';
$lang['payment_added']              = 'Payment has been successfully added.';
$lang['payment_failed']             = 'Payment has been failed, please try again later or contact administrator.';
$lang['payment_processing']         = 'Payment is being processed, once completed, it will be reflected on your order.';
$lang['theme_color']                = 'Theme Color';
$lang['thank_you']                  = 'Thank you!';
$lang['info']                       = 'INFO!';
$lang['error']                      = 'ERROR!';
$lang['csrf_error']                 = 'CSRF ERROR!';
$lang['csrf_error_msg']             = 'Session has been expired and the action you have requested is blocked. Please try again!';
$lang['error_404_message']          = '<h4>404 Not Found!</h4><p>The page you are looking for can not be found.</p>';
$lang['auto_slugify']               = 'Auto Generate & Update Product Slugs';
$lang['slugs_updated']              = 'Slug has been updated for all products';
$lang['settings_updated']           = 'Settings successfully updated';
$lang['manual_payments']            = 'Manual Payments';
$lang['sitemap']                    = 'Sitemap';
$lang['visit']                      = 'Visit';
$lang['bank_details']               = 'Bank Details';
$lang['bank_details_tip']           = '(if you want to accept direct bank-in/transfer payments)';
$lang['sms_settings']               = 'SMS Settings';
$lang['sms_log']                    = 'SMS Log';
$lang['send_sms']                   = 'Send SMS';
$lang['search_phone_by_customer']   = 'Search phone by customer';
$lang['sms_request_sent']           = 'SMS request has been sent to the SMS gateways for processing.';
$lang['sms_request_failed']         = 'SMS request has been failed, please check the sms log.';
$lang['sms_log_heading']            = 'Please review the SMS log below, you can select the date to display the log of that day.';
$lang['send_sms_heading']           = 'Please add mobile numbers by selecting the customers.';
$lang['log_x_exists']               = 'There is no log available for the selected date.';
$lang['auto_send']                  = 'Automatically Send SMS';
$lang['gateway']                    = 'Gateway';
$lang['api_id']                     = 'API ID';
$lang['mobile']                     = 'Mobile';
$lang['url']                        = 'URL';
$lang['send_to_name']               = 'Send to Name';
$lang['msg_name']                   = 'Message Name';
$lang['param1']                     = 'Param 1';
$lang['param2']                     = 'Param 2';
$lang['param3']                     = 'Param 3';
$lang['param4']                     = 'Param 4';
$lang['param5']                     = 'Param 5';
$lang['eapi_url']                   = 'EAPI_URL';
$lang['sender_id']                  = 'SENDER ID';
$lang['account_sid']                = 'Account SID';
$lang['auth_token']                 = 'Auth Token';
$lang['access_token']               = 'Access Token';
$lang['api_key']                    = 'API KEY';
$lang['api_secret']                 = 'API Secret';
$lang['sid']                        = 'SID';
$lang['gwid']                       = 'GWID';
$lang['domain']                     = 'Domain';
$lang['uid']                        = 'UID';
$lang['pin']                        = 'PIN';
$lang['userid']                     = 'User ID';
$lang['api_code']                   = 'API Code';
$lang['hide0']                      = 'Hide Brands/Categories with 0 product';
$lang['products_description']       = 'Products page description';
$lang['private_shop']               = 'Private shop (for members only)';
$lang['hide_price']                 = 'Disable cart & price';
$lang['login_to_your_account']      = 'Please login to your account.';
$lang['forgot_password_successful'] = 'Email has been sent with reset password instructions';
