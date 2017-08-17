/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* register script */

(function ($, W, D)
{
    $(D).ready(function ()
    {

        //form validation rules
        $("#register-form").validate({
            rules:
                    {
                        strNumber:
                                {
                                    required: true,
                                    number: true,
                                    minlength: 1
                                }
                    },
            messages:
                    {
                        strNumber:
                                {
                                    required: "Please enter the degits ex:12134.",
                                    number: "Please enter only digits 0-9 ",
                                    minlength: 'Please enter minmum 1 digit'
                                }
                    },
            submitHandler : function (form, event)
            {   event.preventDefault();
                $.ajax({
                type: "POST",
                url: 'demo.php',
                data: {'strNumber':$('#strNumber').val()},
                dataType: 'json',
                success: function(data){
                    if(data.status){
                        $('.output').html('Total Dashes for the given Number is: '+data.result);
                    }else{
                        $('.output').html(data.msg);
                    }
                    //console.log(data);
                }
                });
            }
        });

    });

})(jQuery, window, document);


