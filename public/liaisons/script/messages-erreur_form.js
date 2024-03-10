const objJSONMessagesErreur = {
  "prenom": {
    "regex":"#^[a-zA-ZÀ-ÿ -]+$#",
    "label": "Votre prénom",
    "erreurs": {
      "vide": "Veuillez entrer votre prénom.",
      "motif": "Votre prénom comporte des caractères non pris en charge."
    }
  },
  "nom": {
    "regex": "#^[a-zA-ZÀ-ÿ' -]+$#",
    "label": "Votre nom",
    "erreurs": {
      "vide": "Veuillez entrer votre nom.",
      "motif": "Votre nom comporte des caractères non pris en charge."
    }
  },
  "courriel": {
    "regex": "#^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$#i",
    "label": "Votre courriel",
    "erreurs": {
      "vide": "Veuillez entrer votre courriel.",
      "motif": "Veuillez entrer un courriel valide."
    }
  },
  "destinataire": {
    "regex": "",
    "label": "Destinataire",
    "erreurs": {
      "vide": "Sélectionnez un ou une destinataire."
    }
  },
  "sujet": {
    "regex": "#^[\\p{L}\\d\\s.,\\-_()]{1,100}$#",
    "label": "Sujet du message",
    "erreurs": {
      "vide": "Veuillez entrer le sujet du message.",
      "motif": "Le sujet du message comporte des caractères non pris en charge."
    }
  },
  "message": {
    "regex": "#^[\\p{L}\\d\\s.,\\-_()!?;:'\"/]{1,1000}$#",
    "label": "Votre message",
    "erreurs": {
      "vide": "Veuillez entrer un message.",
      "motif": "Votre message comporte des caractères non pris en charge."
    }
  },
  "humain": {
    "regex": "",
    "erreurs": {
      "vide": "Veuillez cocher la case.",
      "motif": "Votre réponse n'est pas adéquate! Veuillez recommencer."
    }
  },
  "consentement": {
    "regex": "",
	"label": "J'autorise l'utilisation de mon numéro de téléphone avec le responsable «Étudiant d'un jour». ",
    "erreurs": {
      "vide": "Veuillez cocher la case pour consentir au partage de votre numéro de téléphone avec le responsable « Étudiant d'un jour. »"
    }
  },
  "telephone": {
    "regex": "#^(\\(\\d{3}\\) \\d{3}-\\d{4}|\\d{3}-\\d{3}-\\d{4})|(\\+?33[ -]?(\\d{1,2}[ -]?){4}\\d{2})$#",
    "label": "Téléphone",
    "erreurs": {
      "vide": "Veuillez entrer votre numéro de téléphone (format:123 456-7890).",
      "motif": "Veuillez entrer un numéro de téléphone dans un format valide: 123 456-7890."
    }
  },
  "retroactions": {
    "courriel": {
      "completer": "Veuillez compléter le formulaire.",
      "envoyer": "Le courriel a été envoyé. Merci pour votre message!",
      "avorter": "L'envoi du courriel a échoué."
    }
  }
}