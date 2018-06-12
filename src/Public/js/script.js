$(document).ready(function() {
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 10), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'Vous devez saisir un nom svp'
                    }
                }
            },
            prenom: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'Vous devez saisir un prénom svp'
                    }
                }
           
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez saisir une adresse email svp'
                    },
                    emailAddress: {
                        message: 'L\'adresse email que vous avez saisi n\'est pas valide'
                    }
                }
            },
            telephone: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez saisir un numéro de téléphone svp'
                    }
                }
            },
           services: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez choisir un service svp'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez acceptr les conditions générales'
                    }
                }
            }
        }
    });







var email = document.getElementById("email");

email.addEventListener("keyup", function (event) {
  if(email.validity.typeMismatch) {
    email.setCustomValidity("Saisissez un email valide svp!.");
  } else {
    email.setCustomValidity("");
  }
});





});



