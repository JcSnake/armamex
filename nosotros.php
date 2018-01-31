<section id="am-nosotros" class="uk-margin-large-top uk-text-center am-padding-block">
    <h1><?=$lng['nosotros']?></h1>
    <div class="uk-width-small-1-1 uk-width-medium-4-5 uk-width-large-2-3 uk-container-center uk-contrast am-relative">
        <div class="uk-hidden-small">
            <img src="assets/images/nosotros_page.svg" width="450" height="450">
            <div id="am-us-block-01"><?=$lng['usText01']?></div>
            <div id="am-us-block-02"><?=$lng['usText02']?></div>
            <div id="am-us-block-03"><?=$lng['usText03']?></div>
            <div id="am-us-block-04"><?=$lng['usText04']?></div>
        </div>
        <div class="uk-visible-small">
            <img src="assets/images/nosotros_page.svg" width="450" height="450">
            <div class="uk-text-left">
                <img src="/assets/images/dot-list.png" width="50" height="50" alt="List">&nbsp;
                <span><?=str_replace('<br>', ' ', $lng['usText01'])?></span>
            </div>
            <div class="uk-text-left">
                <img src="/assets/images/dot-list.png" width="50" height="50" alt="List">&nbsp;
                <span><?=str_replace('<br>', ' ', $lng['usText02'])?></span>
            </div>
            <div class="uk-text-left">
                <img src="/assets/images/dot-list.png" width="50" height="50" alt="List">&nbsp;
                <span><?=str_replace('<br>', ' ', $lng['usText03'])?></span>
            </div>
            <div class="uk-text-left">
                <img src="/assets/images/dot-list.png" width="50" height="50" alt="List">&nbsp;
                <span><?=str_replace('<br>', ' ', $lng['usText04'])?></span>
            </div>
        </div>
    </div>
</section>