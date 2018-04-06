jQuery(document).ready(function ($) {
    'use strict';

    if($('.optin-form').length){

        $('.optin-form').each(function(){
            var $optin=$(this),$form=$('.optin-content form',$optin);

            $form.submit(function(event) {
                event.preventDefault();
            });

            $('.form_connector_submit',$form).click(function(){
                var name = $('.dt_name',$form).val(),email = $('.dt_email',$form).val(),mailListCode=$(".optin_code",$optin);
                var findName = $(mailListCode).find("input[name*=name], input[name*=NAME], input[name*=Name]").not("input[type=hidden]").val(name);
                var findEmail = $(mailListCode).find("input[name*=email], input[name*=EMAIL], input[type=email], input[name=eMail], input[name=inf_field_Email]").not("input[type=hidden]").val(email);
                $(mailListCode).find("form").submit();
            });
        });



    }
});