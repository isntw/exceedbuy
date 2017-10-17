$(document).ready(function () {

    $('form[name="contact_form"]').submit(function (e) {
        e.preventDefault();


        $.ajax({
            method: "POST",
            url: "/post",
            data: $('form[name="contact_form"]').serializeArray(),
            success: function (response) {

                $.each(['name', 'phone', 'email', 'text'], function (index, inputName) {
                    $('#' + inputName).html("");
                });
                
                //Display success message
                alert('Message was succefully sended.');
            },
            error: function (xhr, ajaxOptions, thrownError) {

                $.each(['name', 'phone', 'email', 'text'], function (index, inputName) {
                    $('#' + inputName).html("");
                });

                $.each(xhr.responseJSON.errors, function (inputName, errors) {
                    $('#' + inputName).html(errors[0]);
                });
            }
        });
    });

    var validator = $("#registration-form").bootstrapValidator({
        fields: {
            exampleInputEmail1: "Name is required",
            validators: {
                notEmpty: {
                    message: "Please insert a name",
                }
            }
        }
    });
});