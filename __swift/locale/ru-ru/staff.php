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

$__LANG = array (
	'titleduplicatesgroup' => 'Team name already in use',
	'msgduplicatesgroup' => 'A team with this name already exists. Please choose another one.',
	'depnotassigned' => '(Not Assigned)',
	'tabskills' => 'Skills',
	'noskillstodisplay' => 'There are no live chat skills in the helpdesk. You can create new skills and assign them to staff in Live Chat &gt; Insert Skill.',
	'titleextinvalid' => 'Invalid extension',
	'msgextinvalid' => 'That looks like an invalid extention. Please make sure that the extention is numeric (0-9) and contains no spaces or special characters).',
	'livechatoptions' => 'Live Chat Settings',
	'lcgreeting' => 'Automatic greeting',
	'desc_lcgreeting' => 'This greeting will be automatically sent from this staff user when accepting a live chat. For example: <em>Hi, how can I help you today?</em>',
	'titleinvalidfileext' => 'Unsupported image type',
	'msginvalidfileext' => 'Supported image file types are: gif, jpeg, jpg, png.',
	'personalizeoptions' => 'Personalize',
	'generaloptions' => 'General Settings',
	'staffprofileimage' => 'Profile picture',
	'desc_staffprofileimage' => 'Your customers much prefer seeing faces. A user\'s profile picture will appear next to their ticket replies and in live chat windows.',
	'tabprofile' => 'Profile',
	'stafffirstname' => 'First name',
	'desc_stafffirstname' => '',
	'stafflastname' => 'Last name',
	'desc_stafflastname' => '',
	'staffdesignation' => 'Title or position',
	'desc_staffdesignation' => 'A staff user\'s position will be displayed on their ticket replies and in live chats. For example, <em>CEO</em>, <em>Customer Evangelist</em>, <em>All Round Good Guy</em>.',
	'titleemailqueuematch' => 'Email address already in use',
	'msgemailqueuematch' => 'The email address %s is already being used by the helpdesk as an email queue address, and cannot be used as a staff user\'s email address at the same time (it may cause email loops, because your staff user would be replying from the same email address as the helpdesk is fetching email from).',
	'titlemobilenumberinvalid' => 'Invalid cell phone number',
	'msgmobilenumberinvalid' => 'The phone number entered doesn\'t seem to be valid. Please enter only the digits, without the + prefix or number separators.',
	'copyfrom' => 'Copy Permissions From',
	'titleinsertstaff' => 'New staff user created - welcome to %s!',
	'msginsertstaff' => 'A new staff user account has been created for %s: <strong>Name:</strong> %s <strong>Username:</strong> %s <strong>Email address:</strong> %s <strong>Team:</strong> %s <strong>Is enabled:</strong> %s <strong>Mobile number:</strong> %s <strong>Use team\'s department permissions:</strong> %s',
	'titleupdatestaff' => 'Staff user %s updated',
	'msgupdatestaff' => 'Staff user %s has been updated: <strong>Name:</strong> %s <strong>Username:</strong> %s <strong>Email address:</strong> %s <strong>Team:</strong> %s <strong>Is enabled:</strong> %s <strong>Cell phone number:</strong> %s <strong>Use team\'s department permissions:</strong> %s',
	'titlepwnomatch' => 'Passwords do not match',
	'msgpwnomatch' => 'The passwords specified do not match each other (we ask you to enter the same new password twice to make sure there are no typos).',
	'titlenodep' => 'No departments assigned to this staff user',
	'msgnodep' => 'Please select at least one department for this staff user under the Departments tab.',
	'titleemailexists' => 'Email address already in use',
	'msgemailexists' => 'The email address %s is already in use by %s.',
	'titleusernameexists' => 'Username is already taken',
	'msgusernameexists' => 'The username %s is already in use by %s. Please choose another username.',
	'titlegrouperror' => 'The last man standing has special rights',
	'msggrouperror' => 'It is not possible to move this staff user to a non-admin team, because this account is the only one left with admin privileges.',
	'titlestaffdelsame' => 'Unable to self-destruct ',
	'msgstaffdelsame' => 'I can\'t let you delete yourself while logged into the helpdesk... I like you too much, %s. You\'ll have to ask someone else to log in to the helpdesk and pull the trigger for you.',
	'titledelstaffmul' => 'Staff user accounts deleted (%d)',
	'msgdelstaffmul' => 'The following staff user accounts were deleted:<br />%s',
	'titledelstaff' => 'Staff user %s deleted (%s)',
	'msgdelstaff' => 'The staff user %s (%s) was deleted.',
	'titleinsertstaffgroup' => 'New team (%s) created',
	'msginsertstaffgroup' => 'A new team (%s) was created successfully: <strong>Name:</strong> %s <strong>Is admin:</strong> %s <strong>Assigned departments:</strong> %s',
	'titleupdatestaffgroup' => 'Team (%s) updated',
	'msgupdatestaffgroup' => 'Team (%s) was updated successfully: <strong>Name:</strong> %s <strong>Is admin:</strong> %s <strong>Assigned departments:</strong> %s',
	'titlestaffgroupdelsame' => 'Unable to delete your own team',
	'msgstaffgroupdelsame' => 'The team could not be deleted because you currently belong to it. You will need to assign yourself to a different team before you can delete team %s. Couldn\'t this be solved over a cup of coffee?',
	'titledelstaffteammul' => 'Teams deleted (%d)',
	'msgdelstaffteammul' => 'The following teams were deleted:<br />%s',
	'titledelstaffteam' => 'Team (%s) deleted',
	'msgdelstaffteam' => 'The team %s (%s) was deleted.',
	'loginshare' => 'LoginShare',
	'tabsettings' => 'Settings',
	'tabfilter' => 'Filter',
	'send' => 'Send',
	'isenabled' => 'Account is enabled',
	'desc_isenabled' => 'If a staff user account is not enabled, they will not be able to log in to any control panel or interact with the helpdesk.',
	'assigneddepartments' => 'Assigned Departments',
	'titlenoenable' => 'You can\'t disable yourself',
	'msgnoenable' => 'I couldn\'t let you disable yourself while you are logged in, %s. Someone else will need to login and disable your account for you.',
	'titledisablestaff' => 'Staff disabled (%d)',
	'msgdisablestaff' => 'The following staff user accounts were disabled and will no longer be able to log in to the helpdesk:<br />%s',
	'titleenablestaff' => 'Staff enabled (%d)',
	'msgenablestaff' => 'The following staff user accounts were enabled and will now be able to log in to the helpdesk again:<br />%s',
	'attachments' => 'Attachments',
	'tabimport' => 'Import',
	'import' => 'Import',
	'tabpermissionsstaff' => 'Permissions: Staff',
	'tabpermissionsadmin' => 'Permissions: Admin',
	'iprestriction' => 'Restrict to IP addresses',
	'desc_iprestriction' => 'A staff user account can be restricted to certain IP addresses. Separate multiple values using a comma. For example: <br/><br/><strong>12.345.6.78</strong> A single IP address.<br /><strong>202.1.192.0-202.1.192.255</strong> A range of IP addresses.<br /><strong>200.36.161.0/24</strong> A range of IP addresses using a <a href="https://en.wikipedia.org/wiki/Subnetwork" target="_blank">net mask</a>.',
	'tzusedefault' => '-- Use System Default --',
	'stafftimezone' => 'Time zone',
	'desc_stafftimezone' => 'If a time zone is not selected for a staff user, the helpdesk default will be used.',
	'staffenabledst' => 'Daylight savings time detection',
	'desc_staffenabledst' => 'When enabled, Kayako will detect daylight savings time and automatically make adjustments.',
	'staff' => 'Staff',
	'desc_staff' => '',
	'managestaff' => 'Manage Staff',

	// Staff List
	'stafflist' => 'Staff List',
	'fullname' => 'Name',
	'staffgroup' => 'Team',
	'wineditstaff' => 'Edit Staff',
	'tabedit' => 'Edit',
	'tabinsert' => 'Insert',
	'tabdepartments' => 'Assigned Departments',
	'taboptions' => 'Options',
	'permissions' => 'Permissions',
	'wineditteam' => 'Edit Team',

	// Staff Group
	'staffgroups' => 'Teams',
	'managegroups' => 'Manage Teams',
	'isadmin' => 'Is administrator',

	// Insert Staff
	'insertstaff' => 'Insert Staff',
	'staffusername' => 'Username',
	'desc_staffusername' => 'The username will be used with the staff\'s password to log in to the control panels.',
	'staffpassword' => 'Password',
	'desc_staffpassword' => 'Make it a good one.',
	'staffpasswordconfirm' => 'Re-enter password',
	'desc_staffpasswordconfirm' => 'To make sure there are no typos, please re-renter the password.',
	'staffemail' => 'Email address',
	'desc_staffemail' => 'All email notifications for this user will be sent to this address.',
	'staffgroup' => 'Team',
	'desc_staffgroup' => 'This staff user will inherit the permissions of the team selected.',
	'staffmobilenumber' => 'Cell phone number',
	'desc_staffmobilenumber' => 'Enter only digits, without +prefix and number separators. For example, <em>18889529256</em>.',
	'staffsignature' => 'Signature',
	'desc_staffsignature' => 'The signature will be attached to all outgoing correspondence sent by this staff user (ticket replies and emails).',
	'staffassigneddep' => 'Assigned Departments',
	'usegroupdep' => 'Use team department assignments',
	'desc_usegroupdep' => 'The team\'s existing departments will be inherited by this user if enabled. If disabled, you can select specific department assignments for this user below.',
	'assigneddep' => 'Assigned Departments',
	'passworddontmatch' => 'The passwords entered do not match',

	// Edit Staff
	'updatestaff' => 'Update Staff',
	'editstaff' => 'Edit Staff',
	'desc_staffpasswordedit' => 'To change this user\'s password, enter a new password here. Leave blank to leave the existing password in place.',

	// Insert Staff Group
	'insertstaffgroup' => 'Insert Team',
	'grouptitle' => 'Team name',
	'desc_grouptitle' => 'For example, <em>Sales</em> or <em>Support - Hannover Office</em>.',
	'groupisadmin' => 'Administrator team',
	'desc_groupisadmin' => 'If this team is an administrator team, members will be able to access the admin control panel and potentially make system-wide changes.',
	'groupassigneddep' => 'Assigned Departments',

	// License
	'titlestafflicense' => 'Maximum number of staff user accounts reached',
	'msgstafflicense' => 'Kayako could not add another staff user account because you have reached the maximum number of staff users allowed by your license or subscription. Please <a href="http://www.kayako.com/company/contact/">contact Kayako to upgrade or for further assistance</a>.',
	'msgenablestafflicense' => 'Kayako could not enable any more staff user accounts because you have reached the maximum number of active staff users allowed by your license or subscription. Please <a href="http://www.kayako.com/company/contact/">contact Kayako to upgrade or for further assistance</a>.',

	// Potentialy unused phrases in staff.php
	'tabplugins' => 'Plugins',
	'ls_app' => 'LoginShare Plugins',
	'wineditls' => 'Edit LoginShare Settings: %s',
	'lsnotitle' => 'No Settings Available',
	'lsnomsg' => 'There are no settings available for the LoginShare plugin <b>"%s"</b>.',
	'tabmassmail' => 'Mass Mail',
	'filterbyteams' => 'Filter by Teams',
	'filterbystaff' => 'Filter by Staff Users',
	'titleupdatedsettings' => 'Updated "%s" Settings',
	'msgupdatedsettings' => 'Successfully updated all settings for category "%s" under "%s"',
	'titleselectonerecord' => 'No Staff/Team Selected',
	'msgselectonerecord' => 'You need to select atleast one Staff User/Team to dispatch a Mass Mail.',
	'titlemassmailsent' => 'Dispatched Mail to "%d" Staff',
	'msgmassmailsent' => 'Successfully dispatched Mass Mail to the following Staff Users:',
	'loginsharefile' => 'LoginShare XML File',
	'desc_loginsharefile' => 'Upload the LoginShare XML File',
	'ignoreversion' => 'Ignore Version',
	'desc_ignoreversion' => 'If selected, the import file version will be ignored. It is recommended that you do not enable this option as it can result in problems in the Client Support Center.',
	'titlenoelevatedls' => 'Unable to Import Staff LoginShare XML',
	'msgnoelevatedls' => 'Kayako is unabled to import the Staff LoginShare XML file as it is required that you login with a staff user that has elevated rights. You can add your user to elevated right list in config/config.php file of the package.',
	'titlelsversioncheckfail' => 'Version Check Failed',
	'msglsversioncheckfail' => 'Kayako is unable to import the Staff LoginShare Plugin as the plugin was created for an older version of Kayako',
	'titlelsinvaliduniqueid' => 'Duplicate Unique ID Error',
	'msglsinvaliduniqueid' => 'Kayako is unable to import the Staff LoginShare Plugin due to a conflict in Unique ID. This usually means that the plugin has already been imported into the database.',
	'titlelsinvalidxml' => 'Invalid XML File',
	'msglsinvalidxml' => 'Kayako is unable to import the Staff LoginShare Plugin as the XML file corrupt or contains invalid data.',
	'titlelsimported' => 'Imported Staff LoginShare Plugin',
	'msglsimported' => 'Kayako has successfully imported the "%s" Staff LoginShare Plugin.',
	'titlelsdeleted' => 'Deleted Staff LoginShare Plugin',
	'msglsdeleted' => 'Successfully deleted the "%s" Staff LoginShare Plugin from the database.',
	'invalidloginshareplugin' => 'Invalid LoginShare Plugin, Please make sure the LoginShare plugin exists in the database.',
	'titleupdatedls' => 'Updated Staff LoginShare Settings',
	'msgupdatedls' => 'Successfully updated the settings for "%s" Staff LoginShare Plugin',
	'staffdeletefailedsame' => 'You cannot delete your own staff user account. Please log in using different staff user credentials in order to delete "%s"',
	'staffdeleteconfirm' => 'Staff user "%s" deleted successfully',
	'sgroupdeletefailedsame' => 'You cannot delete the team to which your staff user account belongs. Please log in using different staff user credentials in order to delete "%s"',
	'sgroupdeleteconfirm' => 'Team "%s" deleted successfully',
	'sgroupactionconfirm' => 'IMPORTANT: Deleting a team results in the deletion of all the staff user accounts under that team! Are you sure you wish to delete?',
	'staffdetails' => 'Staff Details',
	'stafffullname' => 'Full Name',
	'desc_stafffullname' => 'The full name of the staff user (e.g. <i>Joe Bloggs</i>).',
	'optionalfields' => 'Optional Fields',
	'desc_assigneddep' => 'Specify individual department permissions if the team access option (above) is not enabled.',
	'usernameexists' => 'This staff username already exists',
	'selectdepartment' => 'You must assign the staff user to at least one department',
	'redirect_staffinsert' => 'Staff inserted successfully',
	'staffinsertconfirm' => 'Staff "%s" inserted successfully',
	'invalidstaff' => 'ERROR: Invalid staff ID',
	'staffgroupdetails' => 'Team Details',
	'generalfields' => 'General Fields',
	'desc_groupassigneddep' => 'Select the department(s) to which the staff users under this team will be assigned.',
	'redirect_staffgroupinsert' => 'Team inserted successfully',
	'staffgroupinsertconfirm' => 'Team "%s" inserted successfully',
	'staffupdateconfirm' => 'Staff Member "%s" updated successfully',
	'grouperror' => 'You cannot change the team to a non-administrator team as it is the only one remaining with administrator privileges',
	'editstaffgroup' => 'Edit Team',
	'invalidstaffgroup' => 'Invalid team',
	'staffgroupupdateconfirm' => 'Group "%s" updated successfully',
	'groupadminerror' => 'You cannot disable administrator privileges for this team as it is the only one remaining with administrator privileges',
	'massmail' => 'Mass Mail',
	'subject' => 'Subject',
	'desc_subject' => '',
	'mailcontents' => 'Mail Contents',
	'mailstaffgroup' => 'Team',
	'desc_mailstaffgroup' => '',
	'selectonegroup' => 'ERROR: Please select at least one team',
	'sentmailconfirm' => 'Dispatched email to %s staff members',
	'mmcontents' => 'Mail Contents',
);

?>