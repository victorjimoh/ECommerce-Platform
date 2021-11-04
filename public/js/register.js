$(function(){
var $registerForm =  $('#form-register');

if ($registerForm){
    $registerForm.validate({
        rules:{
           firstname:{
               required: true
           },
           lastname:{
               required: true
           },
           email:{
               required: true,
               email: true
           },
           password:{
               required: true
           },
           gender:{
               required: true
           },
           country:{
               required: true
           },
           password:{
               required: true
           },
           password_confirmation:{
               required: true
           }
        },
        messages:{
            firstname:{
                required: 'First name is required'
            },
            lastname:{
                required: 'Last name is required'
            },
            email:{
                required: 'Email is required',
                email: 'Please enter a valid email with @ keyword.'
              
            },
            gender:{
                required: 'Gender is required'
            },
            country:{
                required: 'Country is required'
            },
            password:{
                required: 'Password is required'
            },
            password_confirmation:{
                required: 'Password Confirmation is required'
            }
        },
        errorPlacement: function(error, element){
            if(element.is(':radio')){
                error.appendTo(element.parents('.radio-btn'));
            }
            else{
                error.insertAfter(element);
            }
        }

    })
}
});