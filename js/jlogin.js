$(function jpopup() {

    $('#admin-login').click(function () {
        $.uilightbox({
            'title':'ADMIN/FACULTY LOGIN',
            'body':'<form id="form-login" name="login" action="auth/includes/process.php" method="post"><table align= "center"><tr><td>Login as:</td><td><select name="username"><option value="administrator" selected="selected">Administrator</option><option value="faculty">Faculty</option></select></td></tr><tr><td>Password:</td><td><input type="password" value="" name="password"></td></tr></table><input id="form-submit" type="submit" value="Login" name="admin_login"></form>',
            'footer':'<div id="login-error"><?php echo $loginerror;  ?></div><a id="close" href="#">Close</a>',
            'triggerClose':'#close'
        });
    });

    $('#login').click(function () {
        $.uilightbox({
            'title':'LOGIN',
            'body':'<form id="form-login" name="login" action="auth/includes/process.php" method="post"><table align= "center"><tr><td>EP Number:</td><td> <input type="text" value="" name="epnum"></td></tr><tr><td>Password:</td><td><input type="password" value="" name="password"></td></tr></table><input id="form-submit" type="submit" value="Login" name="login"></form>',
            'footer':'<div id="login-error"><?php echo $loginerror;  ?></div><a id="close" href="#">Close</a>',
            'triggerClose':'#close'
        });
    });

    $('#register').click(function () {
        $.uilightbox({
            'title':'REGISTER',
            'body':'<form id="form_process" name="login" action="auth/includes/process.php" method="post"><table align= "center"><tr><td>Enrolment No:</td><td><input type="text" value="" name="epnum"></td></tr><tr><td>Password:</td><td><input type="password" value="" name="password"></td></tr><tr><td>Full Name:</td><td><input type="text" value="" name="full_name"></td></tr><tr><td>Fathers Name:</td><td><input type="text" value="" name="father_name"></td></tr><tr><td>Date of birth:</td><td><input type="text" id="jQueryDatePicker1" name="dob" value="15/09/2012"></td></tr><tr><td>Contact no:</td><td> <input type="text" name="contact_no" value=""></td></tr><tr><td>Age:</td><td><input type="text" name="age"></td></tr><tr><td>Year of Enrolment:</td><td><input type="text" name="doa" value=""></td></tr><tr><td>Field:</td><td><select name="field_name"><option value="bscs" selected="selected">BSCS</option><option value="bsse">BSSE</option></select></td></tr><tr><td>Section:</td><td><select name="section"><option value="a" selected="selected">SEC A</option><option value="b" >SEC B</option><option value="c" >SEC C</option></select></td></tr></table><input id="form_submit_normal" type="submit" value="Register" name="register"></form>',
            'footer':'<a id="close" href="#">Close</a>',
            'triggerClose':'#close'
        });
    });
});
	
	
	
	
	
	
	
