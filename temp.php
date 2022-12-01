<?php

user\lib.php
1513     Повертає учасників для даного курсу.
        * @param int $enrolid Застосований фільтр для ідентифікатора реєстрації користувача.

 243    function user_get_default_fields() {
        return array( 'id', 'username', 'fullname', 'firstname', 'lastname', 'email',
            'address', 'phone1', 'phone2', 'icq', 'skype', 'yahoo', 'aim', 'msn', 'department',
            'institution', 'interests', 'firstaccess', 'lastaccess', 'auth', 'confirmed',
            'idnumber', 'lang', 'theme', 'timezone', 'mailformat', 'description', 'descriptionformat',
            'city', 'url', 'country', 'profileimageurlsmall', 'profileimageurl', 'customfields',
            'groups', 'roles', 'preferences', 'enrolledcourses', 'suspended', 'lastcourseaccess'
        );       



        $USER:
object(stdClass)#22 (60) { 
        ["id"]=> string(2) "10" 
        ["auth"]=> string(6) "manual" 
        ["confirmed"]=> string(1) "1" 
        ["policyagreed"]=> string(1) "0" 
        ["deleted"]=> string(1) "0" 
        ["suspended"]=> string(1) "0" 
        ["mnethostid"]=> string(1) "1" 
        ["username"]=> string(2) "s3" 
        ["idnumber"]=> string(0) "" 
        ["firstname"]=> string(1) "3" 
        ["lastname"]=> string(7) "Student" 
        ["email"]=> string(17) "Student3@gmail.ua"         ["emailstop"]=> string(1) "0"         ["icq"]=> string(0) ""         ["skype"]=> string(0) "" ["yahoo"]=> string(0) "" ["aim"]=> string(0) "" ["msn"]=> string(0) "" ["phone1"]=> string(0) "" ["phone2"]=> string(0) "" 
        ["institution"]=> string(0) "" ["department"]=> string(0) "" ["address"]=> string(0) "" ["city"]=> string(0) "" ["country"]=> string(0) "" ["lang"]=> string(2) "en" ["calendartype"]=> string(9) "gregorian" ["theme"]=> string(0) "" ["timezone"]=> string(2) "99" 
        ["firstaccess"]=> string(10) "1669586534" ["lastaccess"]=> int(1669846374) ["lastlogin"]=> string(10) "1669835303" ["currentlogin"]=> int(1669846134) ["lastip"]=> string(9) "127.0.0.1" ["secret"]=> string(0) "" ["picture"]=> string(1) "0" ["url"]=> string(0) "" ["descriptionformat"]=> string(1) "1" 
        ["mailformat"]=> string(1) "1" ["maildigest"]=> string(1) "0" ["maildisplay"]=> string(1) "2" ["autosubscribe"]=> string(1) "1" ["trackforums"]=> string(1) "0" ["timecreated"]=> string(10) "1669203372" ["timemodified"]=> string(10) "1669203392" ["trustbitmask"]=> string(1) "0" ["imagealt"]=> string(0) "" ["lastnamephonetic"]=> string(0) "" ["firstnamephonetic"]=> string(0) "" ["middlename"]=> string(0) "" ["alternatename"]=> string(0) "" 
["lastcourseaccess"]=> array(1) { [4]=> string(10) "1669835023" } 
        ["currentcourseaccess"]=> array(0) { } ["groupmember"]=> array(0) { } ["profile"]=> array(0) { } ["sesskey"]=> string(10) "HoroLr4CPU" ["preference"]=> array(8) { ["auth_forcepasswordchange"]=> string(1) "0" 
                        ["core_message_migrate_data"]=> string(1) "1" ["drawer-open-nav"]=> string(4) "true" ["email_bounce_count"]=> string(1) "1" 
                        ["email_send_count"]=> string(1) "1" ["tool_usertours_tour_completion_time_1"]=> string(10) "1669586614" ["tool_usertours_tour_completion_time_2"]=> string(10) "1669617034" ["_lastloaded"]=> int(1669846631) } 
                        ["access"]=> array(3) { 
                                ["ra"]=> array(3) { 
                                        ["/1"]=> array(1) { [7]=> int(7) } 
                                        ["/1/2"]=> array(1) { [8]=> int(8) } 
                                        ["/1/3/36"]=> array(1) { [5]=> int(5) } } ["time"]=> int(1669846135) ["rsw"]=> array(0) { } } ["enrol"]=> array(2) { ["enrolled"]=> array(1) { [4]=> int(2147483647) } ["tempguest"]=> array(0) { } } ["ajax_updatable_user_prefs"]=> array(1) { ["drawer-open-nav"]=> string(5) "alpha" } }


ВИГЛЯД ГОЛОВНОЇ СТОРІНКИ:

course\renderer.php
2291    Outputs contents for frontpage as configured in $CFG->frontpage or $CFG->frontpageloggedin
        (Вміст виводів для фронт-сторінки, налаштований у $ cfg-> FrontPage або $ cfg-> frontPageLoggedin)

        string(1) "6"   Доступні курси      Student 3



        string(1) "2"    Категорії курсів    вийшов


        string(1) "6" Доступні курси           User Admin





C:\OSPanel\domains\moodle82.loc\course\renderer.php  (renderer - визуализатор)
2284 : отбор кому что показать   / * Outputs contents for frontpage as configured in $CFG->frontpage or $CFG->frontpageloggedin 
(Outputs contents for frontpage as configured in $CFG->frontpage or $CFG->frontpageloggedin  
=>Виводить вміст для головної сторінки, як налаштовано в $CFG->frontpage або $CFG->frontpageloggedin 
http://moodle82.loc/admin/search.php

там же 2004: Повертає HTML для друку списку доступних курсів для головної сторінки

2045 Повертає HTML для друку дерева з категоріями курсів і курсів для першої сторінки

2073 Повертає HTML для друку дерева категорій курсів (з кількістю курсів) для головної сторінки

2374 Клас, що зберігає параметри відображення та функції, щоб допомогти відобразити категорію курсу та/або списки курсів

загрузка:
- C:\OSPanel\domains\moodle82.loc\index.php
        30      require_once     C:\OSPanel\domains\moodle82.loc\config.php 
                27        require_once(__DIR__ . '/lib/setup.php'); 
        73      redirect($CFG->wwwroot .'/my/');   //     переход на C:\OSPanel\domains\moodle82.loc\my\index.php
- C:\OSPanel\domains\moodle82.loc\my\index.php
        38      require_once     C:\OSPanel\domains\moodle82.loc\config.php 
        39      require_once($CFG->dirroot . '/my/lib.php');
C:\OSPanel\domains\moodle82.loc\my\lib.php
- C:\OSPanel\domains\moodle82.loc\index.php
        164     echo $OUTPUT->header();                 видача на екран /header  
        //C:\OSPanel\domains\moodle82.loc\lib\outputrenderers.php
        //1265     public function header() {
        166     echo $OUTPUT->custom_block_region('content');
        168     echo $OUTPUT->footer();



 100       echo $OUTPUT->header();

 C:\OSPanel\domains\moodle82.loc\lib\pagelib.php
 99     class moodle_page {;


библиотека USER
        C:\OSPanel\domains\moodle82.loc\user\lib.php
607 function user_get_user_details_courses($user) 


        echo("<br>:::::::::::::::::::::::::::::::::::^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^:<br>");
        var_dump($OUTPUT->header());
        echo("<br>:::::::::::::::::::::::::::::::::::^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^:<br>");
        die();

        $string['mycourses'] = 'My courses';


- C:\OSPanel\domains\moodle82.loc\index.php
73      redirect($CFG->wwwroot .'/my/');  //переход на C:\OSPanel\domains\moodle82.loc\my\index.php
- C:\OSPanel\domains\moodle82.loc\my\index.php
164     echo $OUTPUT->header();                 видача на екран /header




C:\OSPanel\domains\moodle82.loc\course\renderer.php    сторінки



        авторизирова1н 
C:\OSPanel\domains\moodle82.loc\index.php
77       var_dump($CFG->defaulthomepage);   -  string(1) "1"
        HOMEPAGE_MY -   -  string(1) "1"


        розділ АДМІНІСТРУВАННЯ САЙТУ: обробка 
 кнопка  
 "http://moodle82.loc/admin/settings.php?section=frontpagesettings"  method="post" id="adminsettings">      
 C:\OSPanel\domains\moodle82.loc\admin\settings.php
 
 var_dump($_POST);
 
array(18) { ["section"]=> string(17) "frontpagesettings" 
                                        ["action"]=> string(13) "save-settings"         ["sesskey"]=> string(10) "i18K2cBoUU"         ["return"]=> string(0) ""         ["s__fullname"]=> string(12) "Moodle 3.8.2" ["s__shortname"]=> string(12) "moodle82.loc" ["s__summary"]=> string(23) " пробіли moodle82.loc пробіли " 
   ["s__frontpagemanagers"]=> array(6) { [0]=> string(1) "0" [1]=> string(1) "6"    [2]=> string(1) "5"    [3]=> string(1) "4"    [4]=> string(1) "2"    [5]=> string(1) "7" } 
// ["s__frontpagemanagers"]=> array(6) { [0]=> string(1) "6" [1]=> string(4) "none" [2]=> string(4) "none" [3]=> string(4) "none" [4]=> string(4) "none" [5]=> string(4) "none" } 
["s__frontpageteachers"]=> array(6) { [0]=> string(1) "6" [1]=> string(4) "none" [2]=> string(4) "none" [3]=> string(4) "none" [4]=> string(4) "none" [5]=> string(4) "none" } 
["s__frontpagestudents"]=> array(6) { [0]=> string(1) "6" [1]=> string(4) "none" [2]=> string(4) "none" [3]=> string(4) "none" [4]=> string(4) "none" [5]=> string(4) "none" } 
["s__frontpage"]=>         array(5) { [0]=> string(1) "6" [1]=> string(4) "none" [2]=> string(4) "none" [3]=> string(4) "none" [4]=> string(4) "none" } 
["s__frontpageloggedin"]=> array(6) { [0]=> string(1) "6" [1]=> string(4) "none" [2]=> string(4) "none" [3]=> string(4) "none" [4]=> string(4) "none" [5]=> string(4) "none" }
                                        ["s__maxcategorydepth"]=> string(1) "2" ["s__frontpagecourselimit"]=> string(3) "200" ["s__numsections"]=> string(1) "1" ["s__newsitems"]=> string(1) "3" ["s__commentsperpage"]=> string(2) "15" ["s__defaultfrontpageroleid"]=> string(1) "8" }






















розділ АДМІНІСТРУВАННЯ САЙТУ:
        // if ($name  == "frontpagemanagers"  OR $name  == "frontpagestudents") {
        //     echo("<br>:::::::::::::::::::::::::::::::::::^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^:<br>");
        //     var_dump($name);
        //     echo("<br>::::<br>");
        //     var_dump($visiblename);
        //     echo("<br>::::<br>");
        //     var_dump($description);
        //     echo("<br>:::::::::::::::::::::::::::::::::::^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^:<br>");
        // }
        // die();
        // ["frontpagemanagers"]=> string(1) "6"
        //  ["frontpageteachers"]=> string(1) "6" 
        //  ["frontpagestudents"]=> string(1) "6" 




   
        

        Добавлено:

ВИГЛЯД ГОЛОВНОЇ СТОРІНКИ:
        course\renderer.php
        public function frontpage() {
        було         // global $CFG, $SITE; 
        стало
        global $CFG, $SITE, $USER;

        було 

        // if (isloggedin() and !isguestuser() and isset($CFG->frontpageloggedin)) {
        //     $frontpagelayout = $CFG->frontpageloggedin;
        // } else {
        //     $frontpagelayout = $CFG->frontpage;
        // }
        
        стало
        if (isloggedin() and !isguestuser() and isset($CFG->frontpageloggedin)) {
                if (isset($USER->access["ra"]["/1/2"][1])) {                                    //  manager:  ["/1/2"]=> array(2) { .... [1]=> int(1) .....}
                    $frontpagelayout = $CFG->frontpagemanagers; 
                } elseif ($USER->access["ra"]["/1/2"][3] or $USER->access["ra"]["/1/2"][4]) {   // ["/1/2"]=> array(2) { ........  teacher: [3]=> int(3)........... Assistant [4]=> int(4) ....)
                    $frontpagelayout = $CFG->frontpageteachers; 
                } elseif ( isset($USER->lastcourseaccess)) {                                    // students: user has no manager or teacher roles anywhere and is assigned to at least one course
                    $frontpagelayout = $CFG->frontpagestudents; 
                } else {
                    $frontpagelayout = $CFG->frontpageloggedin;                                 //logged in users 
                }
            } else {
                $frontpagelayout = $CFG->frontpage;                                             //guests 
            }



        словники
// lang\en\admin.php словник англ мови
        256     $string['configfrontpagemanagers'] = "The items selected above will appear on the manager's home page.";
        257     $string['configfrontpageteachers'] = "The items selected above will appear on the teacher's home page.";
        258     $string['configfrontpagestudents'] = "The items selected above will appear on the student's home page.";
        604     $string['frontpagemanagers'] = 'Front page elements for managers';
        605     $string['frontpageteachers'] = 'Front page elements for teachers';
        606     $string['frontpagestudents'] = 'Front page elements for students';

//C:\OSPanel\domains\moodledata\lang\uk\admin.php   словник укр мови
        271     $string['configfrontpagemanagers'] = 'Вибрані елементи будуть виводитися на головній сторінці сайту для менеджерів.';
        272     $string['configfrontpageteachers'] = 'Вибрані елементи будуть виводитися на головній сторінці сайту для викладачів.';
        273     $string['configfrontpagestudents'] = 'Вибрані елементи будуть виводитися на головній сторінці сайту для студентів.';
        617     $string['frontpagemanagers'] = 'Головна сторінка після входу на сайт менеджера';
        618     $string['frontpageteachers'] = 'Головна сторінка після входу на сайт викладача';
        619     $string['frontpagestudents'] = 'Головна сторінка після входу на сайт студента';

//        admin\settings\frontpage.php добавляємо нові елементи   
///form action="http://moodle82.loc/admin/settings.php?section=frontpagesettings" method="post" id="adminsettings">
 Добавлено:
27      $temp->add(new admin_setting_courselist_frontpage(1)); // NEW •	Front page items for managers
28      $temp->add(new admin_setting_courselist_frontpage(2)); // NEW •	Front page items for teachers
29      $temp->add(new admin_setting_courselist_frontpage(3)); // NEW •	Front page items for students
// (function add() див. 4243 lib\navigationlib.php /див. вище )

//lib\adminlib.php
//4340    class admin_setting_courselist_frontpage extends admin_setting {  //підтягує їм англ/укр назви (через lib\moodlelib.php/get_string())
        4353;   switch ($loggedin) {
                case 1:
                        $name        = 'frontpagemanagers';
                        $visiblename = get_string('frontpagemanagers','admin');
                        $description = get_string('configfrontpagemanagers','admin');
                        break;
                case 2:
                        $name        = 'frontpageteachers';
                        $visiblename = get_string('frontpageteachers','admin');
                        $description = get_string('configfrontpageteachers','admin');
                        break;
                case 3:
                        $name        = 'frontpagestudents';
                        $visiblename = get_string('frontpagestudents','admin');
                        $description = get_string('configfrontpagestudents','admin');
                        break;
                case 4:
                        $name        = 'frontpage';
                        $visiblename = get_string('frontpage','admin');
                        $description = get_string('configfrontpage','admin');
                        break;
                case 5:
                        $name        = 'frontpageloggedin';
                        $visiblename = get_string('frontpageloggedin','admin');
                        $description = get_string('configfrontpageloggedin','admin');
                        break;
                }
        
 //       C:\OSPanel\domains\moodle82.loc\lib\moodlelib.php
 //7252       далі функціЯ get_string підтягує значення з словників для інш мов




