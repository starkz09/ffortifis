$(document).ready(function () {    

    jQuery.validator.addMethod("ckeckPhone", function (value, element) {
        var found = false;
        value = $.trim(value);
        var regx = /^\+?([0-9]{1,3})\)?[-. ]?([0-9]{1,4})[-. ]?([0-9]{2,8})[-. ]?([0-9]{2,8})?$/;
        if (value.match(regx) && (value.match(/\d/g).length >= 7 && value.match(/\d/g).length <= 15)) {
            return true; // no error
        } else {
            return false;
        }
    }, "Please enter valid Phone Number.");

    $.validator.addMethod('work_email', function (value, element) {
        var public_domains = [
            /* Default domains included */
            "aol.com", "att.net", "comcast.net", "facebook.com", "gmail.com", "gmx.com", "googlemail.com",
            "google.com", "hotmail.com", "hotmail.co.uk", "mac.com", "me.com", "mail.com", "msn.com",
            "live.com", "sbcglobal.net", "verizon.net", "yahoo.com", "yahoo.co.uk",

            /* Other global domains */
            "email.com", "fastmail.fm", "games.com" /* AOL */, "gmx.net", "hush.com", "hushmail.com", "icloud.com",
            "iname.com", "inbox.com", "lavabit.com", "love.com" /* AOL */, "outlook.com", "pobox.com", "protonmail.com",
            "rocketmail.com" /* Yahoo */, "safe-mail.net", "wow.com" /* AOL */, "ygm.com" /* AOL */,
            "ymail.com" /* Yahoo */, "zoho.com", "yandex.com",

            /* United States ISP domains */
            "bellsouth.net", "charter.net", "cox.net", "earthlink.net", "juno.com",

            /* British ISP domains */
            "btinternet.com", "virginmedia.com", "blueyonder.co.uk", "freeserve.co.uk", "live.co.uk",
            "ntlworld.com", "o2.co.uk", "orange.net", "sky.com", "talktalk.co.uk", "tiscali.co.uk",
            "virgin.net", "wanadoo.co.uk", "bt.com",

            /* Domains used in Asia */
            "sina.com", "qq.com", "naver.com", "hanmail.net", "daum.net", "nate.com", "yahoo.co.jp", "yahoo.co.kr", "yahoo.co.id", "yahoo.co.in", "yahoo.com.sg", "yahoo.com.ph",

            /* French ISP domains */
            "hotmail.fr", "live.fr", "laposte.net", "yahoo.fr", "wanadoo.fr", "orange.fr", "gmx.fr", "sfr.fr", "neuf.fr", "free.fr",

            /* German ISP domains */
            "gmx.de", "hotmail.de", "live.de", "online.de", "t-online.de" /* T-Mobile */, "web.de", "yahoo.de",

            /* Italian ISP domains */
            "libero.it", "virgilio.it", "hotmail.it", "aol.it", "tiscali.it", "alice.it", "live.it", "yahoo.it", "email.it", "tin.it", "poste.it", "teletu.it",

            /* Russian ISP domains */
            "mail.ru", "rambler.ru", "yandex.ru", "ya.ru", "list.ru",

            /* Belgian ISP domains */
            "hotmail.be", "live.be", "skynet.be", "voo.be", "tvcablenet.be", "telenet.be",

            /* Argentinian ISP domains */
            "hotmail.com.ar", "live.com.ar", "yahoo.com.ar", "fibertel.com.ar", "speedy.com.ar", "arnet.com.ar",

            /* Domains used in Mexico */
            "yahoo.com.mx", "live.com.mx", "hotmail.es", "hotmail.com.mx", "prodigy.net.mx",

            /* Domains used in Brazil */
            "yahoo.com.br", "hotmail.com.br", "outlook.com.br", "uol.com.br", "bol.com.br", "terra.com.br", "ig.com.br", "itelefonica.com.br", "r7.com", "zipmail.com.br", "globo.com", "globomail.com", "oi.com.br"
        ];

        var email = value.split('@');
        var domain = email[1];

        return (public_domains.indexOf(domain) === -1) ? true : false;
    }, 'Please enter your work email address.');

    jQuery.validator.addMethod("alpha", function (value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Please enter alphabetical characters only.");    

    // validate pricing for resources form
    if ($("#resource-form").length) {
        var validator = $("#resource-form").validate({
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
                title: {
                    required: true
                },
                company: {
                    required: true
                },                
                email: {
                    required: true,
                    email: true,
                    work_email: true
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
                title: {
                    required: 'Title is required.'
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
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);
            },
            submitHandler: function (form) {
                var formData = $("#resource-form").serializeArray();
                var href = $('#form_href').attr('href');
                var btn_submit = $('#btn-submit');

                $.ajax({
                    type: "POST",
                    url: href,
                    data: formData,
                    dataType: "json",
                    success: function (response) {                        
                        if (response.hasOwnProperty('fieldname') && response.fieldname.length) {
                            $.each(response.fieldname, function (i, item) {
                                $("#resource-form").find("." + item.key + "-error").html(item.msg).show();
                            });
                        } else if (response.status) {                            
                            alert(response.msg);                            
                            $('input[type=text], textarea, input[type=email]').val('');
                            $('select').prop('selectedIndex', 0);
                            $('input[type=checkbox], input[type=radio]').prop('checked', false);
                            window.location.href="https://www.gartner.com/teamsiteanalytics/servePDF?g=/imagesrv/media-products/pdf/comodo/comodo-1-5F8CBG1.pdf";
                        } else {
                            alert(response.msg);
                        }
                    },
                    error: function (response) {
                        alert('ajax error' + JSON.stringify(response));
                    },
                    beforeSend: function () {                        
                        btn_submit.attr("disabled", "disabled");
                    },
                    complete: function () {                        
                        btn_submit.removeAttr("disabled");
                    }
                });
                return false;
            }
        });
    }   
    
});
