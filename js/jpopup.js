<<<<<<< HEAD
function jpopup(result,type){
if (type == 'logout'){
	var context = '<form id="form_process" name="logout" action="includes/process.php" method="post">Are you sure you want to logout of RMS ?<br><input id="form_submit_popup" type="submit" value="Logout" name="logout"></form>';
	var title = 'LOGOUT';
}
if (type == 'search') {
	var context = '<form id="form_process" name="Search" action="search.php" method="post"><table align= "center"><tr><td>Search for:</td><td><input type="text" name="search" value=""></td></tr><tr><td>Search by:</td><td><select name="field"><option value="membershipno">Membership No</option><option value="status">Status</option><option value="company" selected="selected">Company</option><option value="sno">S.No</option><option value="ntnno">N.T.N. No.</option></select></td></tr></table><input id="form_submit_popup" type="submit" value="Search" name="submit"></form>';
	var title = 'SEARCH';
}
if (type == 'add') {
	var context = '<form id="form_process" name="add" action="add.php" method="post"><table align= "center"><tr><td>Teacher:</td><td><input type="text" name="teacher" maxlength="20" value=""></td></tr><tr><td>Subject:</td><td><input type="text" name="subject" maxlength="15" value=""></td></tr><tr><td>Year:</td><td><select name="year"><option value="2012" selected="selected">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option></select></td></tr><tr><td>Semester</td><td><select name="semester"><option value="1s" selected="selected">1st Semester</option><option value="2s">2nd Semester</option><option value="3s" >3rd Semester</option><option value="4s">4th Semester</option><option value="5s">5th Semester</option><option value="6s">6th Semester</option><option value="7s">7th Semester</option><option value="8s">8th Semester</option></select></td></tr><tr><td>Field:</td><td><select name="field"><option value="bscs" selected="selected">BSCS</option><option value="bsse" >BSSE</option></select></td></tr><tr><td>Section:</td><td><select name="section"><option value="a" selected="selected">SEC A</option><option value="b" >SEC B</option><option value="c" >SEC C</option></select></td></tr><tr><td>EP Range</td><td><input type="text" value="" name="ep_from" style="width:55px"> to <input type="text" value="" name="ep_to" style="width:55px;"></td></tr><tr><td>Maximum Marks:</td><td><input type="text" name="max_marks" value=""></td></tr></table><input id="form_submit_popup" type="submit" value="Create" name="create"></form>';
	var title = 'CREATE RESULT FOR:';
}
if (type == 'delete') {
	var context = '<form id="form_process" name="Search" action="includes/process.php" method="post">Are you sure you want to delete this record ?<br><input type="hidden" name="table_name" value="'+ result +'"><br><input id="form_submit_popup" type="submit" value="Delete" name="delete"></form>';
	var title = 'DELETE';
}
if (type == 'notify') {
	var context = result;
	var result = '';
	var title = 'Delete';
}
if (type == 'view_stu') {
	var context = '<form id="form_process" name="view_stu" action="view_stu.php" method="post"><table align= "center"><tr><td>Enrolment #:</td><td><input type="text" name="epnum" value=""></td></tr><tr><td>Year of admission:</td><td><input type="text" name="year" value="" maxlength="4"></td></tr><tr><td>Semester:</td><td><select name="semester"><option value="" selected="selected"></option><option value="1">1st Semester</option><option value="2">2nd Semester</option><option value="3" >3rd Semester</option><option value="4">4th Semester</option><option value="5">5th Semester</option><option value="6">6th Semester</option><option value="7">7th Semester</option><option value="8">8th Semester</option></select></td></tr><tr><td>Section:</td><td><select name="section"><option value="" selected="selected"></option><option value="a">Section A</option><option value="b" >Section B</option><option value="c" >Section C</option></select></td></tr></table><input id="form_submit_popup" type="submit" value="Search" name="view_stu"></form>';
	var title = 'View students of:';
}
if (type == 'news') {
	var context = '<form id="form_process" name="test" action="includes/process.php" method="post"><table align= "center"><tr><td>Title:<input type="text" name="news_title" style="width:99%;"/></td></tr><tr><td>News:<textarea name="news_content" maxlength="250" style="width:99%;"/></td></tr></table><input id="form_submit_popup" type="submit" value="Create" name="create_news"></form>';
	var title = 'Create News';
}

$.uilightbox({
	'title'			: title + '<a id = "close" href="#">X</a>',
	'body'			: context,
	'footer'		: '&nbsp',
	'triggerClose' 	: '#ui-lightbox a'
});


};
=======
function jpopup(result, type) {
    if (type == 'logout') {
        var context = '<form id="form_process" name="logout" action="includes/process.php" method="post">Are you sure you want to logout of RMS ?<br><input id="form_submit_popup" type="submit" value="Logout" name="logout"></form>';
        var title = 'LOGOUT';
    }
    if (type == 'search') {
        var context = '<form id="form_process" name="Search" action="search.php" method="post"><table align= "center"><tr><td>Search for:</td><td><input type="text" name="search" value=""></td></tr><tr><td>Search by:</td><td><select name="field"><option value="membershipno">Membership No</option><option value="status">Status</option><option value="company" selected="selected">Company</option><option value="sno">S.No</option><option value="ntnno">N.T.N. No.</option></select></td></tr></table><input id="form_submit_popup" type="submit" value="Search" name="submit"></form>';
        var title = 'SEARCH';
    }
    if (type == 'add') {
        var context = '<form id="form_process" name="add" action="add.php" method="post"><table align= "center"><tr><td>Teacher:</td><td><input type="text" name="teacher" maxlength="20" value=""></td></tr><tr><td>Subject:</td><td><input type="text" name="subject" maxlength="15" value=""></td></tr><tr><td>Year:</td><td><select name="year"><option value="2012" selected="selected">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option></select></td></tr><tr><td>Semester</td><td><select name="semester"><option value="1s" selected="selected">1st Semester</option><option value="2s">2nd Semester</option><option value="3s" >3rd Semester</option><option value="4s">4th Semester</option><option value="5s">5th Semester</option><option value="6s">6th Semester</option><option value="7s">7th Semester</option><option value="8s">8th Semester</option></select></td></tr><tr><td>Field:</td><td><select name="field"><option value="bscs" selected="selected">BSCS</option><option value="bsse" >BSSE</option></select></td></tr><tr><td>Section:</td><td><select name="section"><option value="a" selected="selected">SEC A</option><option value="b" >SEC B</option><option value="c" >SEC C</option></select></td></tr><tr><td>EP Range</td><td><input type="text" value="" name="ep_from" style="width:55px"> to <input type="text" value="" name="ep_to" style="width:55px;"></td></tr><tr><td>Maximum Marks:</td><td><input type="text" name="max_marks" value=""></td></tr></table><input id="form_submit_popup" type="submit" value="Create" name="create"></form>';
        var title = 'CREATE RESULT FOR:';
    }
    if (type == 'delete') {
        var context = '<form id="form_process" name="Search" action="includes/process.php" method="post">Are you sure you want to delete this record ?<br><input type="hidden" name="table_name" value="' + result + '"><br><input id="form_submit_popup" type="submit" value="Delete" name="delete"></form>';
        var title = 'DELETE';
    }
    if (type == 'notify') {
        var context = result;
        var result = '';
        var title = 'Delete';
    }
    if (type == 'view_stu') {
        var context = '<form id="form_process" name="view_stu" action="view_stu.php" method="post"><table align= "center"><tr><td>Enrolment #:</td><td><input type="text" name="epnum" value=""></td></tr><tr><td>Year of admission:</td><td><input type="text" name="year" value="" maxlength="4"></td></tr><tr><td>Semester:</td><td><select name="semester"><option value="" selected="selected"></option><option value="1">1st Semester</option><option value="2">2nd Semester</option><option value="3" >3rd Semester</option><option value="4">4th Semester</option><option value="5">5th Semester</option><option value="6">6th Semester</option><option value="7">7th Semester</option><option value="8">8th Semester</option></select></td></tr><tr><td>Section:</td><td><select name="section"><option value="" selected="selected"></option><option value="a">Section A</option><option value="b" >Section B</option><option value="c" >Section C</option></select></td></tr></table><input id="form_submit_popup" type="submit" value="Search" name="view_stu"></form>';
        var title = 'View students of:';
    }
    if (type == 'news') {
        var context = '<form id="form_process" name="test" action="includes/process.php" method="post"><table align= "center"><tr><td>Title:<input type="text" name="news_title" style="width:99%;"/></td></tr><tr><td>News:<textarea name="news_content" maxlength="250" style="width:99%;"/></td></tr></table><input id="form_submit_popup" type="submit" value="Create" name="create_news"></form>';
        var title = 'Create News';
    }

    $.uilightbox({
        'title':title + '<a id = "close" href="#">X</a>',
        'body':context,
        'footer':'&nbsp',
        'triggerClose':'#ui-lightbox a'
    });


}
;
>>>>>>> GithubRMS/master
	

	
	
	
	
	
