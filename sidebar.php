

<div id="footer-sidebar" class="secondary black-bg foreground-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-2 footer-sidebar">
                <ul>
                    <?php
                    if(is_active_sidebar('footer-widget-1')){
                        dynamic_sidebar('footer-widget-1');
                    }
                    ?>
                </ul>
            </div>
            <div class="col-12 col-md-2 footer-sidebar">
                <ul>
                    <?php
                    if(is_active_sidebar('footer-widget-2')){
                    dynamic_sidebar('footer-widget-2');
                    }
                    ?>
                <ul>
            </div>
            <div class="col-12 col-md-2 footer-sidebar">
                <ul>
                    <?php
                    if(is_active_sidebar('footer-widget-3')){
                    dynamic_sidebar('footer-widget-3');
                    }
                    ?>
                </ul>
            </div>
            <div class="col-12 col-md-2 footer-sidebar">
                <ul>
                    <?php
                    if(is_active_sidebar('footer-widget-4')){
                    dynamic_sidebar('footer-widget-4');
                    }
                    ?>
                </ul>
            </div>
            <div class="col-12 col-md-2 footer-sidebar">
                <ul>
                    <?php
                    if(is_active_sidebar('footer-widget-5')){
                    dynamic_sidebar('footer-widget-5');
                    }
                    ?>
                </ul>
            </div>
     
        </div>
        
    </div>
    
</div>


