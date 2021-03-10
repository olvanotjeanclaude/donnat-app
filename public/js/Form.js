class Form {
    constructor() {
        this.data = [];
        this.errors = [];
        this.message = "";
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
    print(array) {
        console.log(array);
    }

    setFormList(field, lists) {
        var html = ` <option selected>choisir</option>`;
        lists.forEach((list) => {
            list.toUpperCase();
            html += `<option value=${list}>${list}</option>`;
        });
        $(field).append(html);
    }

    valideNname(name) {
        var errorName = [];
        if (!this.valideInput(name)) {
            errorName.push("");
        }
    }
    valideInput(input) {
        if (input != "") {
            input.trim();
            return true;
        }
        return false;
    }
}