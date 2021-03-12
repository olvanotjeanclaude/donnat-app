<form action="" class="contact-form overflow-auto py-2 pr-3">
    <div class="mt-5">
        <div class="section-title pt-5 pt-md-0">
            <h2 class="title-1">Hello</h2>
            <h2 class="title-2">let's work together <span class="point">.</span></h2>
            <h2 class="title-3">Donnez vie à vos idées<span class="point"> !</span> </h2>
        </div>
      
        <div class="mb-1">
            <label for="guest" class="form-label">Type <span class="star">*</span></label>
            <select class="form-select" id="guest">
            </select>
        </div>
        <div class="mb-1">
            <label for="lastName" class="form-label">PRÉNOM <span class="star">*</span></label>
            <input value="" type="text" class="form-control text-uppercase" id="lastName">
            <div class="text-danger error-lastName"></div>
        </div>
        <div class="mb-1">
            <label for="name" class="form-label">nom <span class="star">*</span></label>
            <input value="" type="text" class="form-control text-uppercase" id="name">
            <div class="text-danger error-name"></div>
        </div>
        <div class="mb-1">
            <label for="email" class="form-label">email <span class="star">*</span></label>
            <input value="" type="email" class="form-control" id="email">
            <div class="text-danger error-email"></div>
        </div>
        <div class="mb-1 d-flex flex-column  py-2">
            <label for="telephone" class="form-label">Téléphone <span class="star">*</span></label>
            <input type="tel" id="telephone" class="form-control text-capitalize my-2">
            <div class="text-danger error-telephone"></div>
        </div>
        <div class="mb-1">
            <label for="societe" class="form-label">société <span class="star">*</span></label>
            <input value="" type="text" class="form-control text-capitalize" id="societe">
            <div class="text-danger error-societe"></div>
        </div>
        <div class="mb-1">
            <label for="fonction" class="form-label">fonction</label>
            <input value="" type="text" class="form-control" id="fonction">
        </div>
        <div class="mb-1">
            <label for="messageObject" class="form-label">objet du message <span class="star">*</span></label>
            <select class="form-select" id="messageObject">
            </select>
        </div>
        <div class="mb-1">
            <label for="messageBody" class="form-label">message</label>
            <textarea class="form-control p-2" id="messageBody" rows="4" minlength="5" maxlength="200" required></textarea>
            <div class="text-danger error-messageBody"></div>
        </div>
        <div class="mb-1 mt-4">
            <button class="btn-action" id="cancelMessage">annuler</button>
            <button class="btn-action" id="sendMessage">envoyer</button>
        </div>
    </div>
</form>