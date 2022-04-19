name_require = "Please enter your name";
fn_require = "Please enter your first name";
ln_require = "Please enter your last name";
email_require = "Please enter a valid email address";
company_require = "Please enter company name";
phone_require = "Please enter a phone";
message_require = "Please enter message";
select_country = "Please select country";

$(document).ready(function(){    
    
    var request_demo_form = $("#request-a-demo");
    if (request_demo_form.length) {
        request_demo_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },
                company: {
                    required: true
                },
                no_of_emp: {
                    required: true
                },
                title: {
                    required: true
                },
                country: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                    //work_email: true
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                }                        
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                company: {
                    required: 'Company Name is required.'
                },
                no_of_emp: {
                    required: 'Company Size is required.'
                },
                title: {
                    required: 'Title is required.'
                },
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone Number is required.',
                    ckeckPhone: 'Please enter valid Phone Number.'
                },
                country: {
                    required: 'Country is required.',
                }                        
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(request_demo_form);
                return false;                
            }
        });
    } 

    var containment_form = $("#containment_form");
    if (containment_form.length) {
        containment_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                },
                company: {
                    required: true                            
                },
                interest: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone number is required.'                            
                },
                company: {
                    required: 'Company Name is required.'
                },
                interest: {
                    required: 'Please select your interest.'
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(containment_form);
                return false;                
            }
        });
    }

    var report_vulnerabilites_form = $("#report_vulnerabilites_form");
    if (report_vulnerabilites_form.length) {
        report_vulnerabilites_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },
                email: {
                    required: true,
                    email: true
                },                
                describe: {
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                describe: {
                    required: 'Description is required.'                            
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(report_vulnerabilites_form);
                return false;                
            }
        });
    }

    var emergency_response_form = $("#emergency_response_form");
    if (emergency_response_form.length) {
        emergency_response_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },                                        
                email: {
                    required: true,
                    email: true                            
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                },
                company: {
                    required: true
                },
                no_of_emp: {
                    required: true
                },
                country: {
                    required: true                            
                }
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                company: {
                    required: 'Company Name is required.'
                },                
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone Number is required.',
                    ckeckPhone: 'Please enter valid Phone Number.'
                },
                no_of_emp: {
                    required: "Company size is required."
                },
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(emergency_response_form);
                return false;                
            }
        });
    } 
    
    var mssp_partnership_form = $("#mssp_partnership_form");
    if (mssp_partnership_form.length) {
        mssp_partnership_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },                                        
                email: {
                    required: true,
                    email: true                            
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                },
                company: {
                    required: true
                },
                no_of_emp: {
                    required: true
                },
                country: {
                    required: true                            
                }
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                company: {
                    required: 'Company Name is required.'
                },                
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone Number is required.',
                    ckeckPhone: 'Please enter valid Phone Number.'
                },
                no_of_emp: {
                    required: "Company size is required."
                },
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(mssp_partnership_form);
                return false;                
            }
        });
    }

    var start_evaluation_form = $("#start_evaluation_form");
    if (start_evaluation_form.length) {
        start_evaluation_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },
                last_name: {
                    required: true,
                    alpha: true
                },                                        
                email: {
                    required: true,
                    email: true                            
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                },
                company: {
                    required: true
                },
                platform: {
                    required: true
                },
                country: {
                    required: true                            
                }
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },
                last_name: {
                    required: 'Last Name is required.'
                },
                company: {
                    required: 'Company Name is required.'
                },                
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone Number is required.',
                    ckeckPhone: 'Please enter valid Phone Number.'
                },
                platform: {
                    required: "Company size is required."
                },
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(start_evaluation_form);
                return false;                
            }
        });
    }

    var stay_in_loop_form = $("#stay_in_loop_form");
    if (stay_in_loop_form.length) {
        stay_in_loop_form.validate({
            ignore: [],
            rules: {
                first_name: {
                    required: true,
                    alpha: true
                },                                                        
                email: {
                    required: true,
                    email: true                            
                }                
            },
            messages: {
                first_name: {
                    required: 'First Name is required.'
                },               
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                submitAjax(stay_in_loop_form);
                return false;                
            }
        });
    }
    
    var cybersecurity_webinar_form = $("#cybersecurity_webinar");
    if(cybersecurity_webinar_form.length) {
        cybersecurity_webinar_form.validate({
            rules: {
                first_name: {
                    required: true,
                    alphaspace: true
                },
                last_name: {
                    required: true,
                    alphaspace: true
                },
                company: {
                    required: true                    
                },
                email: {
                    required: true,
                    customEmail: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 7
                },
                country: {
                    required: true                    
                }                
            },
            submitHandler: function () {
                submitAjax(cybersecurity_webinar_form);
                return false;
            }
        });
    }

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    var current_date = yyyy + '/' + mm + '/' + dd;
    var tz = jstz.determine();
    $("#timezone").attr('value', tz.name());

});

var freeforensicanalysis_form = $("#freeforensicanalysis_form");
    if (freeforensicanalysis_form.length) {
        freeforensicanalysis_form.validate({
            ignore: [],
            rules: {                
                email: {
                    required: true,
                    email: true,
                    nofreeemail: true
                },
                phone: {
                    required: true,
                    ckeckPhone: true
                }                        
            },
            messages: {                
                email: {
                    required: 'Email address is required.',
                    email: 'Please enter valid email address.'
                },
                phone: {
                    required: 'Phone Number is required.',
                    ckeckPhone: 'Please enter valid Phone Number.'
                }                                        
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function () {
                var btn_submit = freeforensicanalysis_form.find("#btn_submit");
                var url = freeforensicanalysis_form.attr('action');
                var param = freeforensicanalysis_form.serializeArray();
                param.push({name: 'from_page', value: 'freeforensicanalysis'});
                                    
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: param,
                    cache: false,
                    dataType: "json",
                    success: function (response) {                        
                        if (response) {                            
                            if (response.get_phone) {                                
                                window.top.location.href = "/download-fa-tool/" + window.location.search;
                            } else if (response.hasOwnProperty('fieldname') && response.fieldname.length) {
                                $.each(response.fieldname, function (i, item) {
                                    $("#" + item.key + "-error").html(item.mssg).show();
                                });
                            } else if (response.errors) {
                                alert(response.errors);
                            }
                        }
                    },
                    error: function (response) {
                        alert('ajax error' + JSON.stringify(response));
                    },
                    beforeSend: function () {
                        $("#loading_overlay").show();
                        btn_submit.attr("disabled", "disabled");
                    },
                    complete: function () {                    
                        $("#loading_overlay").hide();
                        btn_submit.removeAttr("disabled");
                    }
                });                
                return false;                
            }
        });
    } 


function submitAjax(formId) {
    var url = "/Vtiger/class-form-action.php";
    var param = formId.serializeArray();
    var btn_submit = formId.find("#btn_submit");
    frmId = formId.attr('name');
    param.push({name: 'methodName', value: frmId});
    $.ajax({
        url: url,
        type: 'POST',
        data: param,
        cache: false,
        dataType: "json",
        success: function (response) {
            if (response.mssg && response.success) {
                $('input[type=text], textarea, input[type=email]').val('');
                $('select').prop('selectedIndex',0);
                $('input[type=checkbox], input[type=radio]').prop('checked', false);

                if(frmId === "schedule_popup_form") {
                    setCookie('popup','closed', 7);
                    $('#schedule_popup_form').hide();
                    $('#form-title').html("Thank You!");
                    $('#lead-thank-you').show();
                }
                else if(frmId === "cybersecurity_webinar") {
                    window.location = formId.find("#thank_href").attr('href');
                }
                else {
                    alert(response.mssg.replace(/\\n/g,"\n"));
                }                
            } else if (response.hasOwnProperty('fieldname') && response.fieldname.length) {
                $.each(response.fieldname, function (i, item) {
                    $("#" + item.key + "-error").html(item.mssg).show();
                });
            } else {
                alert(response.mssg);
            }
        },
        beforeSend: function () {
            btn_submit.attr("disabled", "disabled");
            btn_submit.css('opacity', 1);
        },
        complete: function () {
            btn_submit.removeAttr("disabled");
        },
        error: function (response) {
            console.log('ajax error' + JSON.stringify(response));
        }
    });
}