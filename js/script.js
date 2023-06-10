$(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        name : {
          required: true,
        },
        forname: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        subject: {
          required: true,
        },
        message: {
          required: true,
        }
      },
      messages : {
        name: {
            required: "Veuillez saisir votre nom",
        },
        forname: {
          required: "Veuillez saisir votre prénom"
        },
        email: {
          required: "Veuillez saisir une adresse email valide",
        },
        subject: {
          required: "Veuillez saisir un objet",
        },
        message: {
          required: "Veuillez préciser votre demande"
        }
      }
    });
  });