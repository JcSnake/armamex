<section id="am-contacto" class="uk-container-center uk-margin-large-top am-terminal-container">
    <div id="contactForm">
        <h1 class="uk-text-center"><?=$lng['contacto']?></h1>
        <div class="am-head-terminal-title uk-contrast">
            <h2><?=$lng['headContact']?></h2>
        </div>
        <div class="am-block-parent uk-contrast">
            <div class="am-block">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-margin-bottom">
                        <form id="contactFrm" class="uk-form uk-form-horizontal">
                            <div class="uk-form-row">
                                <label class="uk-form-label uk-hidden-small" for="name"><?=$lng['contactName']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="name" name="name" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactName']?>">
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <label class="uk-form-label uk-hidden-small" for="email"><?=$lng['contactMail']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="email" name="email" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactMail']?>">
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <label class="uk-form-label uk-hidden-small" for="phone"><?=$lng['contactPhone']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="phone" name="phone" class="uk-width-1-1" type="number" placeholder="<?=$lng['contactPhone']?>">
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <label class="uk-form-label uk-hidden-small" for="message"><?=$lng['contactMessage']?>:</label>
                                <div class="uk-form-controls">
                                    <textarea id="message" name="message" cols="50" rows="5" placeholder="<?=$lng['contactMessage']?>"></textarea>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-form-controls">
                                    <button id="am-send-contact" type="button" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-button uk-button-primary"><?=$lng['sendButton']?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2 uk-margin-bottom uk-text-right">
                        <h2 class="uk-margin-remove am-text-white"><?=$lng['infoContact1']?></h2>
                        <p class="uk-text-large uk-margin-large-bottom am-line-height-zero am-text-white"><?=$lng['infoContact2']?></p>
                        <h2 class="uk-margin-remove am-text-white"><?=$lng['infoContact3']?></h2>
                        <p class="uk-text-large uk-margin-bottom am-line-height-zero am-text-white"><?=$lng['infoContact4']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contactSuccess" class="uk-hidden">
        <h1 class="uk-text-center"><?=$lng['contactoSuccess']?></h1>
        <div class="am-head-terminal-title uk-contrast">
            <h2><?=$lng['headContact']?></h2>
        </div>
        <div class="am-block-parent uk-contrast">
            <div class="am-block">
                <h2 class="uk-marign-large-top uk-margin-large-bottom uk-text-center am-text-white"><?=$lng['contactoSuccessMsg']?></h2>
            </div>
        </div>
    </div>
</section>