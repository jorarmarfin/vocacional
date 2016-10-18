jQuery(document).ready(function() {
        var form1 = $('#FormPersonalData');
        var error1 = $('.alert-danger', form1);
        form1.validate({
            rules: {
                dni:{required:true,number: true},
                paterno:{required:true},
                materno:{required:true},
                nombres:{required:true},
                telefono:{required:true},
                email:{required:true,email: true},
                idgenero:{required:true},
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                    error1.show();
                    App.scrollTo(error1, -200);
                },
            errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },
            highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
                },
            unhighlight: function (element) { // revert the change done by hightlight

                },
            submitHandler: function (form) {
                    error1.hide();
                    form[0].submit(); // submit the form
                }
        });
    });