<?php 

class block_dashboard extends block_base{
    public function init(){
        $this->title = get_string('dashboard', 'block_dashboard');
    }
    public function get_content(){
        $this->content = new stdClass();
        $this->content->text = "
            <div class='text-center'>
            <img src='../blocks/dashboard/classes/img/Calendar.png' class='dashboard-img' onclick='window.location.href=`../calendar/view.php?view=month`'>
            <img src='../blocks/dashboard/classes/img/My Files.png' class='dashboard-img' onclick='window.location.href=`../user/files.php`'>
            <img src='../blocks/dashboard/classes/img/My Evidence.png' class='dashboard-img' onclick='window.location.href=`../admin/tool/lp/user_evidence_list.php`'>
            <img src='../blocks/dashboard/classes/img/My Badges.png' class='dashboard-img' onclick='window.location.href=`../badges/mybadges.php`'>
            <img src='../blocks/dashboard/classes/img/My Certs.png' class='dashboard-img' onclick='window.location.href=``'>
            <img src='../blocks/dashboard/classes/img/All Courses.png' class='dashboard-img' onclick='window.location.href=`../course/index.php`'>
            <img src='../blocks/dashboard/classes/img/All Users.png' class='dashboard-img' onclick='window.location.href=`../admin/user.php`'>
            <img src='../blocks/dashboard/classes/img/Admin Reports.png' class='dashboard-img' onclick='window.location.href=`../admin/category.php?category=reports`'>
            <img src='../blocks/dashboard/classes/img/Events.png' class='dashboard-img' onclick='window.location.href=`../calendar/view.php`'>
            <img src='../blocks/dashboard/classes/img/Site News.png' class='dashboard-img' onclick='window.location.href=``'>
            <img src='../blocks/dashboard/classes/img/My Learning.png' class='dashboard-img' onclick='window.location.href=`../admin/tool/lp/plans.php`'>
            <img src='../blocks/dashboard/classes/img/Help.png' class='dashboard-img' onclick='window.location.href=`../local/manuals/manual.php`'>
            </div>
            <style>
                .dashboard-img{
                    width: 120px;
                    height: 120px;
                    cursor: pointer;
                }
            </style>
        ";
    }
}