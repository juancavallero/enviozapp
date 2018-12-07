// JavaScript Document


function removeChecks() {

    var app_fname = document.getElementById("app_fname");
    var app_lname = document.getElementById("app_lname");

    var app_email_address = document.getElementById("app_email_address");
    var datepicker = document.getElementById("datepicker");
    var news_name = document.getElementById("news_name");
    var news_email_address = document.getElementById("news_email_address");

    if (app_fname.value != "") {
        app_fname.style.borderColor = "#C9C9C9";

    }
    if (app_lname.value != "") {
        app_lname.style.borderColor = "#C9C9C9";

    }

    if (app_email_address.value != "") {
        app_email_address.style.borderColor = "#C9C9C9";
    }
    if (checkcontact(app_email_address.value) == true) {
        app_email_address.style.borderColor = "#C9C9C9";
    }
    if (datepicker.value != "") {
        datepicker.style.borderColor = "#C9C9C9";
    }
    if (news_name.value != "") {
        news_name.style.borderColor = "#C9C9C9";
    }
    if (news_email_address.value != "") {
        news_email_address.style.borderColor = "#C9C9C9";
    }


}


function checkcontact(input) {
    var pattern1 = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if (pattern1.test(input)) {
        return true;
    }
    else {
        return false;
    }
}


function validateAppoint() {
    var app_fname = document.getElementById("app_fname");
    var app_lname = document.getElementById("app_lname");
    var app_email_address = document.getElementById("app_email_address");
    var app_date = document.getElementById("datepicker");

    var flag = 0;

    if (app_fname.value == "") {
        app_fname.style.borderColor = "#FE847B";
        flag = 1;
    }
    else if (app_lname.value == "") {
        app_lname.style.borderColor = "#FE847B";
        flag = 1;
    }


    else if (app_email_address.value == "") {
        app_email_address.style.borderColor = "#FE847B";
        flag = 1;
    }
    else if (checkcontact(app_email_address.value) == false) {
        app_email_address.style.borderColor = "#FE847B";
        flag = 1;
    }
    else if (app_date.value == "") {
        app_date.style.borderColor = "#FE847B";
        flag = 1;
    }

    if (flag == 0) {

        $.ajax({
            type: "POST",
            url: "submit.php",
            data: $("#appoint_form").serialize(),
            success: function (msg) {
                //alert(msg);
                if (msg == 'success') {

                    $('#message-app').fadeIn(2000);
                    document.getElementById("message-app").innerHTML = "Thank You! We'll contact you shortly";
                    return true;
                } else {


                    $('#message-app').fadeIn(2000);
                    document.getElementById("message-app").innerHTML = "Thanks for contacting us.";
                    return true;
                }
            }
        });

    }
}


///////////////////////////////////////// Contact us form //////////////////////////////////////////


function checkcontact(input) {
    var pattern1 = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if (pattern1.test(input)) {
        return true;
    }
    else {
        return false;
    }
}

function removeChecks() {

    var fname = $('#name');
    var email_address = $('#email');
    var phone = $('#phone');
    var subject = $('#subject');
    var message = $('#message');

    if (fname.val() != "") {
        fname.css('borderColor', '#F4F4F4');
    }
    if (email_address.val() != "") {
        email_address.css('borderColor', '#F4F4F4');
    }
    if (phone.val() != "") {
        phone.css('borderColor', '#F4F4F4');
    }
    if (subject.val() != "") {
        subject.css('borderColor', '#F4F4F4');
    }
    if (message.val() != "") {
        message.css('borderColor', '#F4F4F4');
    }
    if (checkcontact(email_address.val()) == true) {
        email_address.css('borderColor', '#F4F4F4');
    }

}

function validateContact() {
    var fname = $('#name');
    var email_address = $('#email');
    var phone = $('#phone');
    var subject = $('#subject');
    var message = $('#message');

    var form = $('#contact_form');
    var url = form.attr("action");
    console.log(url);
    var flag = 0;

    if (fname.val() == "") {
        fname.css('borderColor', '#FE847B');
        flag = 1;
    }
    if (email_address.val() == "") {
        email_address.css('borderColor', '#FE847B');
        flag = 1;
    }
    else if (checkcontact(email_address.val()) == false) {
        email_address.css('borderColor', '#FE847B');
        flag = 1;
    }
    if (phone.val() == "") {
        phone.css('borderColor', '#FE847B');
        flag = 1;
    }
    if (message.val() == "") {
        message.css('borderColor', '#FE847B');
        flag = 1;
    }
    if (subject.val() == "") {
        subject.css('borderColor', '#FE847B');
        flag = 1;
    }
    if (flag == 0) {
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function (response) {
                if (response.status == 'success') {

                    $('#message-contact').fadeIn(2000);
                    return true;
                } else {

                    $('#message-contact').fadeIn(2000);
                    document.getElementById("message-contact").innerHTML = response.msg;
                    return true;
                }
            }
        });

    }
}


		