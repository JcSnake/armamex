<section id="am-cotizacion" class="uk-container-center uk-margin-large-top am-terminal-container">
    <div id="cotizacionFrm">
        <h1 class="uk-text-center"><?=$lng['cotizacionTitle']?></h1>
        <div class="am-head-terminal-title uk-contrast">
            <h2><?=$lng['headCotizacion']?></h2>
        </div>
        <div class="am-block-parent uk-contrast">
            <div class="am-block">
                <p class="uk-hidden-small uk-text-medium"><?=$lng['messageFormCot']?></p>
                <p class="uk-visible-small uk-text-center uk-text-small"><?=$lng['messageFormCot']?></p>
                <form id="solicitanteFrm" class="uk-block uk-form uk-form-horizontal">
                    <div class="uk-form-row">
                        <div class="uk-grid">
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-bottom">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionName"><?=$lng['contactName']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="cotizacionName" name="cotizacionName" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactName']?>">
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-bottom">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionEmail"><?=$lng['contactMail']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="cotizacionEmail" name="cotizacionEmail" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactMail']?>">
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionService"><?=$lng['contactService']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="cotizacionService" name="cotizacionService" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactService']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-grid">
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-bottom">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionPhone"><?=$lng['contactPhone']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="cotizacionPhone" name="cotizacionPhone" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactPhone']?>">
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-bottom">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionFletador"><?=$lng['contactFletador']?>:</label>
                                <div class="uk-form-controls">
                                    <input id="cotizacionFletador" name="cotizacionFletador" class="uk-width-1-1" type="text" placeholder="<?=$lng['contactFletador']?>">
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                                <label class="uk-form-label uk-hidden-small" for="cotizacionType"><?=$lng['contactType']?>:</label>
                                <div class="uk-form-controls">
                                    <select id="cotizacionType" name="cotizacionType" class="uk-width-1-1">
                                        <option value=""><?=$lng['contactTypeEmtpy']?></option>
                                        <option value="<?=$lng['contactTypeOpt1']?>"><?=$lng['contactTypeOpt1']?></option>
                                        <option value="<?=$lng['contactTypeOpt2']?>"><?=$lng['contactTypeOpt2']?></option>
                                        <option value="<?=$lng['contactTypeOpt3']?>"><?=$lng['contactTypeOpt3']?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="cotizacionOpt1" class="uk-hidden">
            <div class="am-head-terminal-title uk-contrast">
                <h2><?=$lng['contactTypeOpt1']?></h2>
            </div>
            <div class="am-block-parent uk-contrast">
                <div class="am-block">
                    <form id="cotizacionOpt1Frm" class="uk-block uk-form uk-form-horizontal">
                        <div class="uk-grid">
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Quantity"><?=$lng['opt1Field01']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Quantity" name="cotOpt1Quantity" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field01']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Type"><?=$lng['opt1Field02']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Type" name="cotOpt1Type" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field02']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Capacity"><?=$lng['opt1Field03']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Capacity" name="cotOpt1Capacity" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field03']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Area"><?=$lng['opt1Field04']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Area" name="cotOpt1Area" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field04']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Entrega"><?=$lng['opt1Field05']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Entrega" name="cotOpt1Entrega" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field05']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Principal"><?=$lng['opt1Field06']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Principal" name="cotOpt1Principal" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field06']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Extension"><?=$lng['opt1Field07']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt1Extension" name="cotOpt1Extension" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt1Field07']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt1Especificaciones"><?=$lng['opt1Field08']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <textarea id="cotOpt1Especificaciones" name="cotOpt1Especificaciones" class="uk-width-1-1" rows="5" cols="10" placeholder="<?=$lng['fieldOptional']?>"></textarea>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-text-right">
                                        <button type="button" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-button uk-button-primary am-send-cotizacion"><?=$lng['sendButton']?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cotizacionOpt2" class="uk-hidden">
            <div class="am-head-terminal-title uk-contrast">
                <h2><?=$lng['contactTypeOpt2']?></h2>
            </div>
            <div class="am-block-parent uk-contrast">
                <div class="am-block">
                    <form id="cotizacionOpt2Frm" class="uk-block uk-form uk-form-horizontal">
                        <div class="uk-grid">
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Salida"><?=$lng['opt2Field01']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Salida" name="cotOpt2Salida" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field01']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Peso"><?=$lng['opt2Field02']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Peso" name="cotOpt2Peso" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field02']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Esolra"><?=$lng['opt2Field03']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Esolra" name="cotOpt2Esolra" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field03']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Calado"><?=$lng['opt2Field04']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Calado" name="cotOpt1Quantity" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field04']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOptTRB"><?=$lng['opt2Field05']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOptTRB" name="cotOptTRB" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field05']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Entrada"><?=$lng['opt2Field06']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Entrada" name="cotOpt2Entrada" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field06']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt2Field07']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Desplazamiento" name="cotOpt2Desplazamiento" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field07']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt2Field08']?>:</label>
                                    <div class="uk-form-controls am-relative am-form-controls">
                                        <span class="am-form-yes am-text-white"><?=$lng['fieldOptYes']?></span>&nbsp;
                                        <input id="cotOpt2TripulacionYes" name="cotOpt2TripulacionYes" type="radio" class="uk-margin-left">
                                        <span class="am-form-no am-text-white"><?=$lng['fieldOptNo']?></span>&nbsp;
                                        <input id="cotOpt2TripulacionNo" name="cotOpt2TripulacionNo" type="radio" class="uk-margin-large-left">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Condicion"><?=$lng['opt2Field09']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Condicion" name="cotOpt2Condicion" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt2Field09']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Especificaciones"><?=$lng['opt2Field10']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                    <textarea id="cotOpt2Especificaciones" name="cotOpt2Especificaciones" class="uk-width-1-1" rows="5" cols="10" placeholder="<?=$lng['fieldOptional']?>"></textarea>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-text-right">
                                        <button type="button" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-button uk-button-primary am-send-cotizacion"><?=$lng['sendButton']?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cotizacionOpt3" class="uk-hidden">
            <div class="am-head-terminal-title uk-contrast">
                <h2><?=$lng['contactTypeOpt3']?></h2>
            </div>
            <div class="am-block-parent uk-contrast">
                <div class="am-block">
                    <form id="cotizacionOpt3Frm" class="uk-block uk-form uk-form-horizontal">
                        <div class="uk-grid">
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Salida"><?=$lng['opt3Field01']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Salida" name="cotOpt2Salida" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field01']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Peso"><?=$lng['opt3Field02']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Peso" name="cotOpt2Peso" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field02']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Esolra"><?=$lng['opt3Field03']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Esolra" name="cotOpt2Esolra" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field03']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Calado"><?=$lng['opt3Field04']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Calado" name="cotOpt1Quantity" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field04']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOptTRB"><?=$lng['opt3Field05']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOptTRB" name="cotOptTRB" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field05']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Entrada"><?=$lng['opt3Field06']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                        <input id="cotOpt2Entrada" name="cotOpt2Entrada" class="uk-width-1-1" type="text" placeholder="<?=$lng['opt3Field06']?>">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt3Field07']?>:</label>
                                    <div class="uk-form-controls am-relative am-form-controls">
                                        <input id="cotOpt2TripulacionYes" name="cotOpt2TripulacionYes" type="radio" class="uk-margin-left">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt3Field08']?>:</label>
                                    <div class="uk-form-controls am-relative am-form-controls">
                                        <input id="cotOpt2TripulacionYes" name="cotOpt2TripulacionYes" type="radio" class="uk-margin-left">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt3Field09']?>:</label>
                                    <div class="uk-form-controls am-relative am-form-controls">
                                        <input id="cotOpt2TripulacionYes" name="cotOpt2TripulacionYes" type="radio" class="uk-margin-left">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Desplazamiento"><?=$lng['opt3Field10']?>:</label>
                                    <div class="uk-form-controls am-relative am-form-controls">
                                        <input id="cotOpt2TripulacionYes" name="cotOpt2TripulacionYes" type="radio" class="uk-margin-left">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label uk-text-right uk-hidden-small am-form-label" for="cotOpt2Especificaciones"><?=$lng['opt3Field11']?>:</label>
                                    <div class="uk-form-controls am-form-controls">
                                    <textarea id="cotOpt2Especificaciones" name="cotOpt2Especificaciones" class="uk-width-1-1" rows="5" cols="10" placeholder="<?=$lng['fieldOptional']?>"></textarea>
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-text-right">
                                        <button type="button" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-button uk-button-primary am-send-cotizacion"><?=$lng['sendButton']?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>