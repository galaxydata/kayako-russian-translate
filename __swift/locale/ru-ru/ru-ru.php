<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Varun Shoor
 *
 * @package		SWIFT
 * @copyright	Copyright (c) 2001-2012, Kayako
 * @license		http://www.kayako.com/license
 * @link		http://www.kayako.com
 *
 * ###############################################
 */

	// Initial pass done
	// Usage script run

$_SWIFT = SWIFT::GetInstance();

$__LANG = array (
	'charset' => 'UTF-8',
	'html_encoding' => '8bit',
	'text_encoding' => '8bit',
	'html_charset' => 'UTF-8',
	'text_charset' => 'UTF-8',
	'base_charset' => '',
	'yes' => 'Да',
	'no' => 'Нет',
	'menusupportcenter' => 'Раздел клиентов',
	'menustaffcp' => 'Панель сотрудников',
	'menuadmincp' => 'Панель администратора',
	'app_notreg' => 'The %s app is not registered',
	'event_notreg' => 'The %s event is not registered',
	'unable_to_execute' => 'Unable to execute %s',
	'action_notreg' => 'The %s action is not registered',
	'username' => 'Username',
	'password' => 'Password',
	'rememberme' => 'Remember Me',
	'defaulttitle' => '%s - Powered by Kayako',
	'login' => 'Login',
	'global' => 'Global',
	'first' => 'First',
	'last' => 'Last',
	'pagination' => 'Страница %s из %s',
	'submit' => 'Submit',
	'reset' => 'Reset',
	'poweredby' => 'Helpdesk Software Powered by Kayako',
	'copyright' => 'Copyright &copy; 2001-%s Kayako',
	'notifycsrfhash' => 'Kayako had a problem validating this request',
	'titlecsrfhash' => 'Kayako had a problem validating this request',
	'msgcsrfhash' => 'Kayako validates requests to protect against cross-site request forgeries and could not validate this request. Please try again.',
	'invaliduser' => 'Username or password is incorrect',
	'invaliduseripres' => 'Unauthorized IP address (attempt: %d of %d)',
	'invaliduserdisabled' => 'This account is disabled (attempt: %d of %d)',
	'invalid_sessionid' => 'Your session expired, please login',
	'staff_not_admin' => 'User does not have admin privileges',
	'sort_desc' => 'Sort Descending',
	'sort_asc' => 'Sort Ascending',
	'options' => 'Options',
	'delete' => 'Удалить',
	'settings' => 'Settings',
	'search' => 'Поиск',
	'searchbutton' => 'Поиск',
	'actionconfirm' => 'Are you sure you wish to continue?',
	'loggedout' => 'Logged out successfully',
	'view' => 'View',
	'dashboard' => 'Домой',
	'help' => 'Помощь',
	'size' => 'Size',
	'home' => 'Домой',
	'logout' => 'Выход',
	'staffcp' => 'Staff CP',
	'admincp' => 'Admin CP',
	'winapp' => 'Kayako Desktop',
	'staffapi' => 'Staff API',
	'bytes' => 'Bytes',
	'kb' => 'KB',
	'mb' => 'MB',
	'gb' => 'GB',
	'noitemstodisplay' => 'No items to display',
	'manage' => 'Manage',
	'title' => 'Title',
	'disable' => 'Отключить',
	'enable' => 'Включить',
	'edit' => 'Редактировать',
	'back' => 'Назад',
	'forward' => 'Forward',
	'insert' => 'Добавить',
	'edit' => 'Редактировать',
	'update' => 'Обновить',
	'public' => 'Public',
	'private' => 'Private',
	'requiredfieldempty' => 'One of the required fields is empty',
	'clifatalerror' => 'FATAL ERROR',
	'clienterchoice' => 'Please enter your choice: ',
	'clinotvalidchoice' => '"%s" is not a valid choice; please try again.: ',
	'description' => 'Description',
	'success' => 'Success',
	'failure' => 'Failure',
	'status' => 'Status',
	'date' => 'Date',
	'seconds' => 'Seconds',
	'order' => 'Order',
	'email' => 'Email',
	'subject' => 'Subject',
	'contents' => 'Contents',
	'sunday' => 'Воскресенье',
	'monday' => 'Понедельник',
	'tuesday' => 'Вторник',
	'wednesday' => 'Среда',
	'thursday' => 'Четверг',
	'friday' => 'Пятница',
	'saturday' => 'Суббота',
	'am' => 'AM',
	'pm' => 'PM',
	'pfieldreveal' => '[Reveal]',
	'pfieldhide' => '[Hide]',
	'loadingwindow' => 'Loading...',
	'customfields' => 'Custom Fields',
	'nopermission' => 'Unfortunately, you do not have the permission to carry out this request.',
	'nopermissiontext' => 'Unfortunately, you do not have the permission to carry out this request.',
	'generationdate' => 'XML generated: %s',
	'approve' => 'Approve',
	'paginall' => 'All',
	'fullname' => 'Full Name',
	'onlineusers' => 'В онлайне',
	'vardate1' => '%dд %dч %dм',
	'vardate2' => '%dч %dм %dс',
	'vardate3' => '%dм %dс',
	'vardate4' => '%dс',
	'reports' => 'Reports',
	'demomode' => 'This action cannot be carried out in demo mode',
	'titledemomode' => 'Unable to proceed',
	'msgdemomode' => 'This action cannot be carried out in demo mode',
	'filter' => 'Filter',
	'editor' => 'Editor',
	'images' => 'Images',
	'tabedit' => 'Edit',
	'notifyfieldempty' => 'One of the required fields is empty',
	'titlefieldempty' => 'Missing fields',
	'msgfieldempty' => 'One of the required field is empty or contains invalid data; please check your input.',
	'save' => 'Save',
	'viewall' => 'View All',
	'cancel' => 'Cancel',
	'save' => 'Save',
	'tabgeneral' => 'General',
	'language' => 'Language',
	'loginshare' => 'LoginShare',
	'licenselimit_unabletocreate' => 'A new staff user could not be created because your license limit has been reached',
	'help' => 'Помощь',
	'name' => 'Name',
	'value' => 'Value',
	'engagevisitor' => 'Engage Visitor',
	'inlinechat' => 'Inline Chat',
	'url' => 'URL',
	'hexcode' => 'Hex Code',
	'vactionvariables' => 'Action: Variables',
	'vactionvexp' => 'Action: Visitor Experience',
	'vactionsalerts' => 'Action: Staff Notifications',
	'vactionsetdepartment' => 'Action: Set Department',
	'vactionsetskill' => 'Action: Set skill',
	'vactionsetgroup' => 'Action: Set visitor group',
	'vactionsetcolor' => 'Action: Set color',
	'vactionbanvisitor' => 'Action: Ban visitor',
	'customengagevisitor' => 'Custom Engage Visitor',
	'managerules' => 'Manage Rules',
	'open' => 'Open',
	'close' => 'Close',
	'titleupdatedswiftsettings' => '%s settings updated',
	'msgupdatedswiftsettings' => 'The %s settings were updated successfully.',
	'geoipprocessrunning' => 'GeoIP database building is already in progress',
	'continueprocessquestion' => 'A task is still being executed. If you leave this page, it will cancel. Do you wish to continue?',
	'titleupdsettings' => '%s settings updated',
	'type' => 'Type',
	'banip' => 'IP (255.255.255.255)',
	'banclassc' => 'Class C (255.255.255.*)',
	'banclassb' => 'Class B (255.255.*.*)',
	'banclassa' => 'Class A (255.*.*.*)',
	'if' => 'If',
	'loginlogerror' => 'Login locked for %d minutes (attempt: %d of %d)',
	'loginlogwarning' => 'Invalid username or password (attempt: %d of %d)',
	'na' => '- NA -',
	'redirectloading' => 'Loading...',
	'noinfoinview' => 'There is nothing to display here',
	'nochange' => '-- No Change --',
	'activestaff' => '-- Active Staff --',
	'notificationuser' => 'User',
	'notificationuserorganization' => 'User Organization',
	'notificationstaff' => 'Staff (Owner)',
	'notificationteam' => 'Staff Team',
	'notificationdepartment' => 'Department',
	'notificationsubject' => 'Subject: ',
	'lastupdate' => 'Last Update',
	'interface_admin' => 'Admin CP',
	'interface_staff' => 'Staff CP',
	'interface_intranet' => 'Intranet',
	'interface_api' => 'API',
	'interface_winapp' => 'Kayako Desktop/Staff API',
	'interface_syncworks' => 'SyncWorks',
	'interface_instaalert' => 'InstaAlert',
	'interface_pda' => 'PDA',
	'interface_rss' => 'RSS',
	'error_database' => 'Database',
	'error_php' => 'PHP',
	'error_exception' => 'Exception',
	'error_mail' => 'Eail',
	'error_general' => 'General',
	'error_loginshare' => 'LoginShare',
	'loading' => 'Loading...',
	'pwtooshort' => 'Too short',
	'pwveryweak' => 'Very weak',
	'pwweak' => 'Weak',
	'pwmedium' => 'Medium',
	'pwstrong' => 'Strong',
	'pwverystrong' => 'Very strong',
	'pwunsafeword' => 'Potentially unsafe password',
	'staffpasswordpolicy' => '<strong>Password requirements:</strong> Minimum length: %d characters, Minimum digits: %d, Minimum symbols: %d, Minimum uppercase letters: %d',
	'titlepwpolicy' => 'Password does not meet requirements',
	'passwordexpired' => 'Password has expired',
	'newpassword' => 'New Password',
	'passwordagain' => 'Password (repeat)',
	'passworddontmatch' => 'Passwords do not match',
	'defaulttimezone' => '-- Default Time Zone --',
	'tagcloud' => 'Tag Cloud',
	'searchmodeactive' => 'Результаты фильтруются - нажмите для отмены',
	'notifysearchfailed' => '"0" Results found',
	'titlesearchfailed' => '"0" Results Found',
	'msgsearchfailed' => 'Kayako was unable to locate any records matching the specified criteria.',
	'quickfilter' => 'Быстрый переход',
	'fuenterurl' => 'Enter URL:',
	'fuorupload' => 'or Upload:',
	'errorsmtpconnect' => 'Unable to connect to SMTP server',
	'starttypingtags' => 'Start typing to insert tags...',
	'titleinvalidfileext' => 'Unsupported image type',
	'msginvalidfileext' => 'Supported image file types are: gif, jpeg, jpg, png.',
	'notset' => '-- Not Set --',
	'ratings' => 'Ratings',
	'system' => 'System',
	'schatid' => 'Chat ID',
	'supportcenterfield' => 'Support Center:',
	'smessagesurvey' => 'Messages/Surveys',
	'nosubject' => '(no subject)',
	'nolocale' => '(nolocale)',

	// Easy Dates
	'edoneyear' => 'один год',
	'edxyear' => '%d лет',
	'edonemonth' => 'один месяц',
	'edxmonth' => '%d месяцев',
	'edoneday' => 'один день',
	'edxday' => '%d дней',
	'edonehour' => 'один час',
	'edxhour' => '%d часов',
	'edoneminute' => 'одна минута',
	'edxminute' => '%d минут',
	'edjustnow' => 'Только что',
	'edxseconds' => '%d секунд',
	'ago' => 'назад',

	// Operators
	'opcontains' => 'Содержит',
	'opnotcontains' => 'Не содержит',
	'opequal' => 'Равно',
	'opnotequal' => 'Не равно',
	'opgreater' => 'Более чем',
	'opless' => 'Менее чем',
	'opregexp' => 'Регулярное выражение',
	'opchanged' => 'Changed',
	'opnotchanged' => 'Not changed',
	'opchangedfrom' => 'Changed from',
	'opchangedto' => 'Changed to',
	'opnotchangedfrom' => 'Not changed from',
	'opnotchangedto' => 'Not changed to',
	'matchand' => 'И',
	'matchor' => 'ИЛИ',
	'strue' => 'Истина',
	'sfalse' => 'Ложь',
	'notifynoperm' => 'Unfortunately, you do not have the permission to carry out this request.',
	'titlenoperm' => 'Insufficient permissions',
	'msgnoperm' => 'Unfortunately, you do not have the permission to carry out this request.',
	'cyesterday' => 'Вчера',
	'ctoday' => 'Сегодня',
	'ccurrentwtd' => 'Current week to date',
	'ccurrentmtd' => 'Current month to date',
	'ccurrentytd' => 'Current year to date',
	'cl7days' => 'За 7 дней',
	'cl30days' => 'За 30 дней',
	'cl90days' => 'За 90 дней',
	'cl180days' => 'За 180 дней',
	'cl365days' => 'За 365 дней',
	'ctomorrow' => 'Tomorrow',
	'cnextwfd' => 'Current week from date',
	'cnextmfd' => 'Current month from date',
	'cnextyfd' => 'Current year from date',
	'cn7days' => 'Next 7 days',
	'cn30days' => 'Next 30 days',
	'cn90days' => 'Next 90 days',
	'cn180days' => 'Next 180 days',
	'cn365days' => 'Next 365 days',
	'new' => 'Добавить',
	'phoneext' => 'Phone: %s',
	'snewtickets' => 'New tickets',
	'sadvancedsearch' => 'Расширенный поиск',
	'squicksearch' => 'Quick search:',
	'sticketidlookup' => 'Ticket ID lookup:',
	'screatorreplier' => 'Creator/Replier:',
	'smanage' => 'Manage',
	'clear' => 'Clear',
	'never' => 'Never',
	'seuser' => 'Пользователи',
	'seuserorg' => 'Организации',
	'manage' => 'Manage',
	'import' => 'Import',
	'export' => 'Export',
	'comments' => 'Комментариев',
	'commentdata' => 'Комментарии:',
	'postnewcomment' => 'Оставить комментарий',
	'replytocomment' => 'Ответить на комментарий',
	'buttonsubmit' => 'Отправить',
	'reply' => 'Ответить',

	// Flags
	'purpleflag' => 'Purple Flag',
	'redflag' => 'Red Flag',
	'orangeflag' => 'Orange Flag',
	'yellowflag' => 'Yellow Flag',
	'blueflag' => 'Blue Flag',
	'greenflag' => 'Green Flag',

	// ======= CALENDAR LOCALE =======
	'calendar' => 'Календарь',
	'cal_january' => 'Январь',
	'cal_february' => 'Февраль',
	'cal_march' => 'Март',
	'cal_april' => 'Апрель',
	'cal_may' => 'Май',
	'cal_june' => 'Июнь',
	'cal_july' => 'Июль',
	'cal_august' => 'Август',
	'cal_september' => 'Сентябрь',
	'cal_october' => 'Октябрь',
	'cal_november' => 'Ноябрь',
	'cal_december' => 'Декабрь',

	/**
	* ###############################################
	* APP LIST
	* ###############################################
	*/
	'app_base' => 'Base',
	'app_tickets' => 'Обращения',
	'app_knowledgebase' => 'База знаний',
	'app_parser' => 'Email Parser',
	'app_livechat' => 'Live Support',
	'app_troubleshooter' => 'Troubleshooter',
	'app_news' => 'News',
	'app_core' => 'Core',
	'app_backend' => 'Backend',
	'app_reports' => 'Reports',

	// Potentialy unused phrases in en-us.php
	'defaultloginapi' => 'Kayako Login Routine',
	'redirect_login' => 'Processing Login...',
	'redirect_dashboard' => 'Redirecting to Home...',
	'no_wait' => 'Please click here if your browser does not automatically redirect you',
	'select_un_all' => 'Select/Unselect All Items',
	'quicksearch' => 'Quick Search',
	'mass_action' => 'Mass Action',
	'massfieldaction' => 'Action: ',
	'advanced_search' => 'Advanced Search',
	'searchfieldquery' => 'Query: ',
	'searchfieldfield' => 'Field: ',
	'settingsfieldresultsperpage' => 'Results Per Page: ',
	'clidefault' => '%s v%s\nCopyright (c) 2001-%s Kayako\n',
	'firstselect' => '- Select -',
	'exportasxml' => 'XML',
	'exportascsv' => 'CSV',
	'exportassql' => 'SQL',
	'exportaspdf' => 'PDF',
	'clientarea' => 'Support Center',
	'pdainterface' => 'PDA Interface',
	'kayakomobile' => 'Kayako Mobile',
	'thousandsseperator' => ',',
	'clierror' => '[ERROR]: ',
	'cliwarning' => '[WARNING]: ',
	'cliok' => '[OK]: ',
	'cliinfo' => '[INFO]: ',
	'sections' => 'Sections',
	'twodesc' => '%s (%s)',
	'hourrenderus' => '%s:%s %s',
	'hourrendereu' => '%s:%s',
	'jump' => 'Jump',
	'newprvmsgconfirm' => 'You have a new private message\nClick OK to open the private message list in a new window.',
	'commentdelconfirm' => 'Comment deleted successfully',
	'commentstatusconfirm' => 'Comment status change completed successfully',
	'commentupdconfirm' => 'Comment by "%s" updated successfully',
	'unapprove' => 'Unapprove',
	'approvedcomments' => 'Approved Comments',
	'unapprovedcomments' => 'Unapproved Comments',
	'editcomment' => 'Edit Comment',
	'quickjump' => 'Quick Jump',
	'choiceadd' => 'Add >',
	'choicerem' => '< Remove',
	'choicemup' => 'Move Up',
	'choicemdn' => 'Move Down',
	'ticketsubjectformat' => '[%s#%s]: %s',
	'forwardticketsubjectformat' => '[%s~%s]: %s',
	'loggedinas' => 'Logged In: ',
	'tcustomize' => 'Customize...',
	'notifydemomode' => 'Permission denied. Product is in demo mode.',
	'uploadfile' => 'Upload File: ',
	'uploadedimages' => 'Uploaded Images',
	'tabinsert' => 'Insert',
	'allpages' => 'All Pages',
	'maddimage' => 'Image',
	'maddlinktoimage' => 'Link to Image',
	'maddthumbnail' => 'Thumbnail',
	'maddthumbnailwithlink' => 'Thumbnail with Link',
	'checkuncheckall' => 'Check/Uncheck All',
	'defaultloginshare' => 'Kayako LoginShare',
	'invalidusernoapiaccess' => 'Invalid Staff. This staff does not have API access, please configure under Settings > General.',
	'msgupdsettings' => 'Successfully updated all settings for "%s"',
	'msgpwpolicy' => 'The password specified does not match the requirements of the Password Policy.',
	'passwordpolicymismatch' => 'The password specified does not match the requirements of the Password Policy.',
	'short_all_tickets' => 'All',
	'iprestrictdenial' => 'Access Denied (%s): IP not allowed (%s), please add the IP in the allowed list under /config/config.php',
	'cal_clear' => 'Clear',
	'cal_close' => 'Close',
	'cal_prev' => '&laquo; Prev',
	'cal_next' => 'Next &raquo;',
	'cal_today' => 'Today',
	'cal_sunday' => 'Su',
	'cal_monday' => 'Mo',
	'cal_tuesday' => 'Tu',
	'cal_wednesday' => 'We',
	'cal_thursday' => 'Th',
	'cal_friday' => 'Fr',
	'cal_saturday' => 'Sa',
	'app_bugs' => 'Bugs',
);


/*
 * ###############################################
 * BEGIN INTERFACE RELATED CODE
 * ###############################################
 */



if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_ADMIN)
{
	/**
	* Admin Area Navigation Bar
	*/

	$_adminBarContainer = array (

		14 => array ('Settings', 'bar_settings.gif', APP_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', APP_BASE),
		27 => array ('Tag Generator', 'bar_tag.gif', APP_LIVECHAT, '/Base/TagGenerator/Index'),
		0 => array ('Templates', 'bar_templates.gif', APP_BASE),
		1 => array ('Languages', 'bar_languages.gif', APP_CORE),
		2 => array ('Custom Fields', 'bar_customfields.gif', APP_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', APP_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Live Support', 'bar_livesupport.gif', APP_LIVECHAT),
		4 => array ('Email Parser', 'bar_mailparser.gif', APP_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', APP_TICKETS),
		29 => array ('Workflow', 'bar_workflow.gif', APP_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Ratings', 'bar_ratings.gif', APP_TICKETS, '/Base/Rating/Manage'),
		6 => array ('SLA', 'bar_sla.gif', APP_TICKETS),
		7 => array ('Escalations', 'bar_escalations.gif', APP_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesian', 'bar_bayesian.gif', APP_TICKETS),
		21 => array ('Knowledgebase', 'bar_knowledgebase.gif', APP_KNOWLEDGEBASE),
		23 => array ('News', 'bar_news.gif', APP_NEWS),
		24 => array ('Troubleshooter', 'bar_troubleshooter.gif', APP_TROUBLESHOOTER),
		31 => array ('Widgets', 'bar_widgets.gif', APP_BASE, '/Base/Widget/Manage'),
		32 => array ('Apps', 'bar_apps.gif', APP_BASE, '/Base/App/Manage'),
		9 => array ('Logs', 'bar_logs.gif', APP_BASE),
		10 => array ('Scheduled Tasks', 'bar_cron.gif', APP_BASE),
		11 => array ('Database', 'bar_database.gif', APP_BASE),
		33 => array ('Import', 'bar_import.gif', APP_BASE),
		12 => array ('Diagnostics', 'bar_diagnostics.gif', APP_BASE),
		34 => array ('Maintenance', 'bar_maintenance.gif', APP_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Groups', '/Base/TemplateGroup/Manage'),
				1 => array ('Templates', '/Base/Template/Manage'),
				2 => array ('Search', '/Base/TemplateSearch/Index'),
				3 => array ('Import/Export', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restore', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnostics', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Header Logos', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Languages', '/Base/Language/Manage'),
				1 => array ('Phrases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Search', '/Base/LanguagePhrase/Search'),
				3 => array ('Import/Export', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restore', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnostics', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Groups', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Fields', '/Base/CustomField/Manage'),
			),

		4 => array (
				0 => array ('Settings', '/Parser/SettingsManager/Index'),
				1 => array ('Email Queues', '/Parser/EmailQueue/Manage'),
				2 => array ('Rules', '/Parser/Rule/Manage'),
				3 => array ('Breaklines', '/Parser/Breakline/Manage'),
				4 => array ('Bans', '/Parser/Ban/Manage'),
				5 => array ('Catch-all Rules', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Blocker Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Index'),
				1 => array ('Types', '/Tickets/Type/Manage'),
				2 => array ('Statuses', '/Tickets/Status/Manage'),
				3 => array ('Priorities', '/Tickets/Priority/Manage'),
				4 => array ('File Types', '/Tickets/FileType/Manage'),
				5 => array ('Links', '/Tickets/Link/Manage'),
				8 => array ('Auto Close', '/Tickets/AutoClose/Manage'),
				7 => array ('Maintenance', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/SLA'),
				1 => array ('Plans', '/Tickets/SLA/Manage'),
				2 => array ('Schedules', '/Tickets/Schedule/Manage'),
				3 => array ('Holidays', '/Tickets/Holiday/Manage'),
				4 => array ('Import/Export', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categories', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnostics', '/Tickets/BayesianDiagnostics/Index'),
		),

		9 => array (
				0 => array ('Error Log', '/Base/ErrorLog/Manage'),
				1 => array ('Task Log', '/Base/ScheduledTasks/TaskLog'),
				3 => array ('Activity Log', '/Base/ActivityLog/Manage'),
				4 => array ('Login Log', '/Base/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Manage', '/Base/ScheduledTasks/Manage'),
				1 => array ('Task Log', '/Base/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Table Information', '/Base/Database/TableInfo'),
			),

		12 => array (
				0 => array ('Active Sessions', '/Base/Diagnostics/ActiveSessions'),
				1 => array ('Cache Info', '/Base/Diagnostics/CacheInformation'),
				2 => array ('Rebuild Cache', '/Base/Diagnostics/RebuildCache'),
				3 => array ('PHP Info', '/Base/Diagnostics/PHPInfo'),
				4 => array ('Report Issue', '/Base/Diagnostics/ReportBug'),
				5 => array ('License Info', '/Base/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Settings', '/LiveChat/SettingsManager/Index'),
				1 => array ('Visitor Rules', '/LiveChat/Rule/Manage'),
				2 => array ('Visitor Groups', '/LiveChat/Group/Manage'),
				3 => array ('Staff Skills', '/LiveChat/Skill/Manage'),
				4 => array ('Visitor Bans', '/LiveChat/Ban/Manage'),
				5 => array ('Message Routing', '/LiveChat/MessageRouting/Index'),
				6 => array ('Staff Status', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Settings', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Settings', '/KnowledgeBase/SettingsManager/Index'),
				1 => array ('Maintenance', '/KnowledgeBase/Maintenance/Index'),
			),

		22 => array (
				0 => array ('Settings', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Settings', '/News/SettingsManager/Index'),
				1 => array ('Import/Export', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Settings', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Maintenance', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Settings', '/Base/Settings/RESTAPI'),
				1 => array ('API Information', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Manage', '/Base/Import/Manage'),
				1 => array ('Import Log', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purge Attachments', '/Base/PurgeAttachments/Index'),
				1 => array ('Move Attachments', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve' || SWIFT_PRODUCT == 'Case') {
		$_adminBarItemContainer[9][2] = array('Parser Log', '/Parser/ParserLog/Manage');
	}

	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Engage')
	{
		unset($_adminBarContainer[27]);
	}

	SWIFT::Set('adminbaritems', $_adminBarItemContainer);


	/**
	* Admin Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100, APP_NAME),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_adminMenuContainer = array (

		1 => array ('Домой', 80, APP_CORE),
		2 => array ('Сотрудники', 100, APP_BASE),
		3 => array ('Отделы', 120, APP_BASE),
		4 => array ('Пользователи', 100, APP_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the separator items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Домой', '/Base/Home/Index'),
				1 => array ('Настройки', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Управление сотрудниками', '/Base/Staff/Manage'),
				1 => array ('Управление командами', '/Base/StaffGroup/Manage'),
				2 => array ('Добавить сотрудника', '/Base/Staff/Insert'),
				3 => array ('Добавить команду', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Настройки', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Управление отделами', '/Base/Department/Manage'),
				1 => array ('Добавить отдел', '/Base/Department/Insert'),
				2 => array ('Текущий доступ', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Управление группами пользователей', '/Base/UserGroup/Manage'),
				1 => array ('Добавить группу пользователей', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Настройки', '/Base/Settings/User'),
				),
	);

	SWIFT::Set('adminlinks', $_adminLinkContainer);
} else if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_STAFF) {
	/**
	* Staff Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_staffMenuContainer = array (
		1 => array ('Домой', 80, APP_CORE),
		2 => array ('Обращения', 100, APP_TICKETS, 't_entab'),
		3 => array ('Чат', 120, APP_LIVECHAT, 'ls_entab'),
		4 => array ('База знаний', 140, APP_KNOWLEDGEBASE, 'kb_entab'),
		6 => array ('Помощник', 140, APP_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('Новости', 90, APP_NEWS, 'nw_entab'),
		8 => array ('Пользователи', 90, APP_CORE, 'cu_entab'),
		9 => array ('Отчеты', 90, APP_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the separator items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Домой', '/Base/Home/Index'),
				1 => array ('Мои данные', '/Base/Preferences/ViewPreferences'),
				2 => array ('Уведомления', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Комментарии', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Управление обращениями', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Поиск', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('Новое обращение', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'New Ticket\', \'Loading..\', 500, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Макрос', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Отображения', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Фильтры', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('История чата', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Messages/Surveys', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Call Logs', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Canned Responses', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Search', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('Просмотр базы знаний', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Управление базой знаний', '/Knowledgebase/Article/Manage'),
				2 => array ('Категории', '/Knowledgebase/Category/Manage'),
				3 => array ('Новая статья', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('View Downloads', '/Downloads/Downloads/Manage'),
				1 => array ('Manage Downloads', '/Downloads/Downloads/Manage'),
				2 => array ('Categories', '/Downloads/Category/Insert'),
				3 => array ('New File', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('Просмотр помощника', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Управление помощников', '/Troubleshooter/Step/Manage'),
				2 => array ('Категории', '/Troubleshooter/Category/Manage'),
				3 => array ('Новый шаг помощника', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insert Step\', \'Loading..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('Просмотр новостей', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Управление новостями', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Категории', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Подписчики', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Добавить новость', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insert News\', \'Loading..\', 600, 420, true);'),
				),

		8 => array (
				0 => array ('Управление пользователями', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Управление компаниями', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Поиск', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Добавить пользователя', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Добавить компанию', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Управление отчетами', '/Reports/Report/Manage'),
				1 => array ('Категории', '/Reports/Category/Manage'),
				2 => array ('Новый отчет', ':UICreateWindow(\'/Reports/Report/InsertDialog/\', \'newreport\', \'New Report\', \'Loading..\', 400, 280, true);'),
				),
	);

	$_staffLinkContainer[2][1][15] = true;
	$_staffLinkContainer[2][5][15] = true;
	$_staffLinkContainer[8][2][15] = true;
	$_staffLinkContainer[3][4][15] = true;

	SWIFT::Set('stafflinks', $_staffLinkContainer);
}


?>