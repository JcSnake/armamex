<footer class="am-footer">
    <div class="uk-width-small-1-1 uk-width-medium-2-3 uk-width-large-2-3 uk-container-center">
        <div class="uk-grid uk-grid-collapse" data-uk-grid="{animation:false}">
            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-text-center">
                <p class="am-text-footer"><a href="tel:<?=$lng['linkPhoneNumber']?>"><?=$lng['phoneNumber']?></a></p>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-text-center uk-hidden-small">
                <p class="am-text-footer"><?=$lng['copyright']?></p>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-text-center">
                <p class="am-text-footer"><a href="mailto:<?=$lng['emailContacto']?>"><?=$lng['emailContacto']?></a></p>
            </div>
            <div class="uk-width-1-1 uk-text-center uk-visible-small">
                <p class="am-text-footer"><?=$lng['copyright']?></p>
            </div>
        </div>
    </div>
</footer>

<!-- Import UIKit 2.27.5 Framework for responsive design and utilities -->
<script src="/assets/frameworks/uikit-2.27.5/js/uikit.min.js" defer></script>
<script src="/assets/frameworks/uikit-2.27.5/js/components/grid.min.js" defer></script>
<script src="/assets/frameworks/uikit-2.27.5/js/components/sticky.min.js" defer></script>
<script src="/assets/frameworks/uikit-2.27.5/js/components/slideshow.min.js" defer></script>
<script src="/assets/frameworks/uikit-2.27.5/js/components/slideshow-fx.min.js" defer></script>
<script src="/assets/frameworks/uikit-2.27.5/js/components/notify.min.js" defer></script>

<!-- Import own styles and scripts -->
<script src="/assets/js/funcs.min.js?v=<?=$lng['version']?>_r<?=$lng['release']?>" defer></script>
    <script src="/assets/lang/<?=$lng['code']?>/init.js?v=<?=$lng['version']?>_r<?=$lng['release']?>" defer></script>