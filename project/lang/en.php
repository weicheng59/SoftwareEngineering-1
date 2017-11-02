<?php


class Lang extends DefaultLang
{
	var $js = array
	(
<<<<<<< HEAD
		'confirmDelete' => "Are you sure you want to delete the task?",
=======
		'confirmDelete' => "Are you sure you want to delete the story?",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'confirmLeave' => "There can be unsaved data. Do you really want to leave?",
		'actionNoteSave' => "save",
		'actionNoteCancel' => "cancel",
		'error' => "Some error occurred (click for details)",
		'denied' => "Access denied",
<<<<<<< HEAD
		'invalidpass' => "Wrong password",
		'tagfilter' => "Tag:",
		'addList' => "Create new list",
		'renameList' => "Rename list",
		'deleteList' => "This will delete current list with all tasks in it.\\nAre you sure?",
		'clearCompleted' => "This will delete all completed tasks in the list.\\nAre you sure?",
=======
		'tagfilter' => "Tag:",
		'addList' => "Create new sprint",
		'renameList' => "Rename sprint",
		'deleteList' => "This will delete current sprint with all story in it.\\nAre you sure?",
		'clearCompleted' => "This will delete all completed story in the sprint.\\nAre you sure?",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'settingsSaved' => "Settings saved. Reloading...",
	);

	var $inc = array
	(
<<<<<<< HEAD
		'htab_newtask' => "New task",
=======
		'htab_newtask' => "New story",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'htab_search' => "Search",
		'btn_add' => "Add",
		'btn_search' => "Search",
		'advanced_add' => "Advanced",
		'searching' => "Searching for",
		'tasks' => "Tasks",
		'taskdate_inline_created' => "created at %s",
		'taskdate_inline_completed' => "Completed at %s",
<<<<<<< HEAD
		'taskdate_inline_duedate' => "Due %s",
		'taskdate_created' => "Created",
		'taskdate_completed' => "Completed",
		'go_back' => "&lt;&lt; Back",
		'edit_task' => "Edit stroy",//changed
		'add_task' => "New story",//changed
		'priority' => "Priority",
		'task' => "story",//changed
		'note' => "description",//changed
		'tags' => "Tags",
		'save' => "Save",
		'cancel' => "Cancel",
		'password' => "Password",
		'btn_login' => "Login",
		'a_login' => "Login",
		'a_logout' => "Logout",
=======
		'taskdate_created' => "Created",
		'taskdate_completed' => "Completed",
		'go_back' => "&lt;&lt; Back",
		'edit_task' => "Edit stroy",
		'add_task' => "New story",
		'priority' => "Priority",
		'task' => "Story",
		'note' => "Description",
		'tags' => "Tags",
		'save' => "Save",
		'cancel' => "Cancel",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'public_tasks' => "Public Tasks",
		'tagcloud' => "Tags",
		'tagfilter_cancel' => "cancel filter",
		'sortByHand' => "Sort by hand",
<<<<<<< HEAD
		'sortByPriority' => "Sort by priority",
		'sortByDueDate' => "Sort by due date",
		'sortByDateCreated' => "Sort by date created",
		'sortByDateModified' => "Sort by date modified",
		'due' => "Due",
		'daysago' => "%d days ago",
		'indays' => "in %d days",
=======
		// 'sortByPriority' => "Sort by priority",
		'sortByDateCreated' => "Sort by date created",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'months_short' => array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"),
		'months_long' => array("January","February","March","April","May","June","July","August","September","October","November","December"),
		'days_min' => array("Su","Mo","Tu","We","Th","Fr","Sa"),
		'days_long' => array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"),
<<<<<<< HEAD
		'today' => "today",
		'yesterday' => "yesterday",
		'tomorrow' => "tomorrow",
		'f_past' => "Overdue",
		'f_today' => "Today and tomorrow",
		'f_soon' => "Soon",
		'action_edit' => "Edit",
		'action_note' => "Edit Note",
		'action_delete' => "Delete",
		'action_priority' => "Priority",
		'action_move' => "Move to",
		'notes' => "Description:",//chaned
=======
		// 'today' => "today",
		// 'yesterday' => "yesterday",
		// 'tomorrow' => "tomorrow",
		'action_edit' => "Edit",
		'action_note' => "Edit description",
		'action_delete' => "Delete",
		'action_priority' => "Priority",
		'action_move' => "Move to",
		'notes' => "Description:",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'notes_show' => "Show",
		'notes_hide' => "Hide",
		'list_new' => "New list",
		'list_rename' => "Rename list",
		'list_delete' => "Delete list",
<<<<<<< HEAD
		'list_publish' => "Publish list",
		'list_showcompleted' => "Show completed tasks",
		'list_clearcompleted' => "Clear completed tasks",
=======
		'list_showcompleted' => "Show completed story",
		'list_clearcompleted' => "Clear completed story",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'list_select' => "Select list",
		'list_export' => "Export",
		'list_export_csv' => "CSV",
		'list_export_ical' => "iCalendar",
<<<<<<< HEAD
		'list_rssfeed' => "RSS Feed",
=======
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238
		'alltags' => "All tags:",
		'alltags_show' => "Show all",
		'alltags_hide' => "Hide all",
		'a_settings' => "Settings",
<<<<<<< HEAD
		'rss_feed' => "RSS Feed",
		'feed_title' => "%s",
		'feed_completed_tasks' => "Completed tasks",
		'feed_modified_tasks' => "Modified tasks",
		'feed_new_tasks' => "New tasks",
		'alltasks' => "All tasks",
=======
		'alltasks' => "All story",
>>>>>>> 51bc1d2faf61486cad9a1277d0c38b98374cc238

		/* Settings */
		'set_header' => "Settings",
		'set_title' => "Title",
		'set_title_descr' => "(specify if you want to change default title)",
		'set_language' => "Language",
		'set_protection' => "Password protection",
		'set_enabled' => "Enabled",
		'set_disabled' => "Disabled",
		'set_newpass' => "New password",
		'set_newpass_descr' => "(leave blank if won't change current password)",
		'set_smartsyntax' => "Smart syntax",
		'set_smartsyntax_descr' => "(/priority/ task /tags/)",
		'set_timezone' => "Time zone",
		'set_autotag' => "Autotagging",
		'set_autotag_descr' => "(automatically adds tag of current tag filter to newly created task)",
		'set_sessions' => "Session handling mechanism",
		'set_sessions_php' => "PHP",
		'set_sessions_files' => "Files",
		'set_firstdayofweek' => "First day of week",
		'set_custom' => "Custom",
		'set_date' => "Date format",
		'set_date2' => "Short Date format",
		'set_shortdate' => "Short Date (current year)",
		'set_clock' => "Clock format",
		'set_12hour' => "12-hour",
		'set_24hour' => "24-hour",
		'set_submit' => "Submit changes",
		'set_cancel' => "Cancel",
		'set_showdate' => "Show task date in list",
	);
}
