$(document).ready(function() {
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            societe: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'Vous devez saisir le nom de la svp'
                    }
                }
            },
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
                    notEmpty: {
                        message: 'Vous devez choisir un service svp'
                    }
                }
            },
            RGPD:   {
                validators: {
                    notEmpty: {
                        message: 'Vous devez accepter les termes et les conditions svp'
                    }
                }
            },
            
        }

    });
 // Validate the form manually
 $('#validateBtn').click(function() {
    $('#defaultForm').bootstrapValidator('validate');
});
$('#resetBtn').click(function() {
    $('#defaultForm').data('bootstrapValidator').resetForm(true);
});



});



