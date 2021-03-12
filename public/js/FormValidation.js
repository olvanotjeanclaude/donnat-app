class FormValidation {
    constructor() {
        this.errors = {};
    }

    getGuestTypeList() {
        return ["un particulier", "une entreprise", "une institution", "autre"];
    }

    getMessageList() {
        return [
            "demande d' information",
            "demande de rdv",
            "demande de devis",
            "demande de recrutement",
            "autres",
        ];
    }

    setFormList(field, lists) {
        var html = ``;
        lists.forEach((list) => {
            html += `<option value=${list}>${list}</option>`;
        });
        $(field).append(html);
    }

    valideInput(field, fieldMessage) {
        var currentField = $(`#${field}`);
        var fieldVal = currentField.val();
        var message = "";

        if (this.isEmpty(fieldVal)) {
            message = `Champ non renseigné. Veuillez entrer ${fieldMessage}.`;
            this.errors[field] = message;
        } else {
            this.errors[field] = "";
            message = "";
        }

        //valide email
        if (currentField.attr("id") == "email") {
            if (!this.validEmail(fieldVal)) {
                message = "L'adresse e-mail saisie n'est pas valide.";
            }
            this.errors[field] = message;
        }

        //handle error
        this.handleClassError(field, message);

        return message;
    }

    isEmpty(input) {
        return input == "";
    }

    handleClassError(field, message) {
        if (this.errors[field]) {
            field == "messageBody" ?
                $(`#${field}`).addClass("errorMessage") :
                $(`#${field}`).addClass("error");
            $(`.error-${field}`).html(message);
        }
    }

    handleInputActive(e) {
        var input = e.target;
        var currentInputId = input.getAttribute("id");
        var currentFieldVal = $(`#${currentInputId}`).val();
        var maxLength = 50;

        if (currentFieldVal !== "") {
            //Name and surname
            if (currentInputId == "lastName" || currentInputId == "name") {
                var lastIndex = currentFieldVal.length - 1;
                var currentChar = currentFieldVal[lastIndex];
                if (!isValidString(currentChar)) {
                    stopTyping(currentInputId, currentFieldVal);
                }
            }

            //telephone
            if (currentInputId == "telephone") {
                if (!isValidPhoneNumber(currentFieldVal)) {
                    stopTyping(currentInputId, currentFieldVal);
                }
            }

            //societe
            if (currentInputId == "societe" || currentInputId == "fonction") {
                if (currentFieldVal.length > maxLength) {
                    stopTyping(currentInputId, currentFieldVal);
                }
            }

            //message
            if (currentInputId == "messageBody") {
                $(`#${currentInputId}`).addClass("messageActive");
            }

            //remove error on typing
            $(`.error-${currentInputId}`).html("");
            $(`#${currentInputId}`).addClass("inputActive");
        } else {
            if (currentInputId == "messageBody") {
                $(`#${currentInputId}`).removeClass("messageActive");
            }
            $(`#${currentInputId}`).removeClass("inputActive");
        }

        if ($(`#${currentInputId}`).hasClass("error")) {
            $(`#${currentInputId}`).removeClass("error");
        }
        if ($(`#${currentInputId}`).hasClass("errorMessage")) {
            $(`#${currentInputId}`).removeClass("errorMessage");
        }
    }

    validEmail(email) {
        var regex = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/gim;
        if (regex.test(email)) {
            return true;
        }
        return false;
    }

    sendForm(e) {
        e.preventDefault();
        this.valideInput("lastName", "votre prenom");
        this.valideInput("name", "votre nom");
        this.valideInput("email", "votre email");
        this.valideInput("telephone", "le numero de telephone");
        this.valideInput("societe", "le societe");
        this.valideInput("messageBody", "le message");
        console.log(this.errors);
        return false;
    }
}

function stopTyping(field, string) {
    var lastIndex = string.length - 1;
    $(`#${field}`).val(string.slice(0, lastIndex));
}

function isValidString(string) {
    return /^[a-zA-Z ]+$/.test(string);
}

function isValidPhoneNumber(inputPhone) {
    var regex = /^([0-9])+$/;
    if (regex.test(inputPhone)) {
        if (inputPhone.length < 15) {
            return true;
        }
    }
    return false;
}