/**
 * @file Fichier de validation client pour les formulaires de connexion et d'envoi
 * @author Félix-Antoine Lavoie <felixalavoie@gmail.com>, Pascal Larose <palarose@cegep-ste-foy.qc.ca>
 * @version 1.0
 */

/**
 * Appelé à : load de la page
 * a) Charge le JSON de messages interactifs
 * b) À la réception de la réponse, instancie initEcouteurs()
 * @param page = "connexion" ou "envoi", passé à initEcouteurs()
 */

var validateur = {
    objMessages : "test",

    init :
    function() {
        let link = "json/messages.json";
        let _this = validateur;

        fetch(link)
            .then(function (response) {
                return response.json();
            })
            .then(function (response) {
                _this.objMessages = response;
                validateur.initEcouteurs();
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    /**
     * Appelé par init()
     * a) Charge le JSON de messages interactifs
     * b) À la réception de la réponse, instancie initEcouteurs()
     * @param page = "connexion" ou "envoi", ajoute différents écouteurs selon la page
     */
    initEcouteurs :
    function(page) {
        // Ajout des écouteurs d'évènement selon la page
        document.getElementById("nom").addEventListener("blur", this.validation.bind(this));
        document.getElementById("sujet").addEventListener("blur", this.validation.bind(this));
        document.getElementById("courriel").addEventListener("blur", this.validation.bind(this));
        document.getElementById("text").addEventListener("blur", this.validation.bind(this));
    },

    /**
     * Appelé par le blur d'un champ
     * a) Va chercher l'attribut name de l'evenement declencheur
     * b) Va chercher l'attribut pattern de l'evenement declencheur
     * c) Valide le value du champ selon son pattern
     * b) Ajout un message retroactif ou non selon le résultat de c)
     */
    validation :
    function (evenement) {
        // Détermination du langage
        let lang = document.getElementById("body").getAttribute("data-lang");

        // Collecte des infos liés au champ
        let id = evenement.currentTarget.getAttribute('id');
        let refInput = document.getElementById(id.toString());
        let valeur = refInput.value;
        let pattern = new RegExp(refInput.getAttribute('pattern'));

        // Sélection de l'élément HTML contenant le message
        let refDiv = refInput.parentNode;
        let refChampMessage = refDiv.lastElementChild;

        // Validation
        if (valeur.trim().length == 0) {
            refDiv.classList.add("champErreur");
            refChampMessage.innerHTML = this.objMessages[lang][id]["vide"];
        }
        else {
            if (pattern.test(valeur) !== true) {
                refDiv.classList.add("champErreur");
                refChampMessage.innerHTML = this.objMessages[lang][id]["erreur_regexp"];
            }
            else {
                refDiv.classList.remove("champErreur");
                refChampMessage.innerHTML = "";
            }
        }
    }
};
console.log("Validation JS init");
window.addEventListener("load", validateur.init.bind(validateur));
