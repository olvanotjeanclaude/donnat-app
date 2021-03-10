<form action="" class="py-2 pr-3">
    <div class="mb-1">
        <label for="guest" class="form-label">Type <span class="star">*</span></label>
        <select class="form-select" id="guest">
        </select>
    </div>
    <div class="mb-1">
        <label for="lastName" class="form-label">PRÉNOM <span class="star">*</span></label>
        <input type="text" class="form-control" id="lastName">
    </div>
    <div class="mb-1">
        <label for="name" class="form-label">nom <span class="star">*</span></label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-1">
        <label for="email" class="form-label">email <span class="star">*</span></label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-1">
        <label for="telephone" class="form-label">Téléphone <span class="star">*</span></label>
        <input type="tel" class="form-control" id="telephone">
    </div>
    <div class="mb-1">
        <label for="societe" class="form-label">société <span class="star">*</span></label>
        <input type="text" class="form-control" id="societe">
    </div>
    <div class="mb-1">
        <label for="fonction" class="form-label">fonction</label>
        <input type="text" class="form-control" id="fonction">
    </div>
    
    <div class="mb-1">
        <label for="messageObject" class="form-label">objet du message</label>
        <select class="form-select" id="messageObject">
    
        </select>
    </div>
    <div class="mb-1">
        <label for="message-body" class="form-label">message</label>
        <textarea class="form-control" id="message-body" rows="3"></textarea>
    </div>
    <div class="mb-1 mt-4">
        <button class="btn-action" id="cancelMessage">annuler</button>
        <button class="btn-action" id="sendMessage">envoyer</button>
    </div>
</form>