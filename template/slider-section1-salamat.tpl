<div class="row">
    <div class="col-xs-36  salamat_slider" >
        <div class="owl-carousel owl-theme">
            {foreach $section1 as $news}


            <div class="item">
                <div class="col-xs-36">
                    <img src="img/sa1.jpg" alt="">
                </div>
                <div class="col-xs-36 s-matn-pad">
                    <div class="s-rutitr">
                        {$news.rutitr}
                    </div>
                    <div class="s-titr">
                        <a href="">
                            {$news.titr}
                        </a>
                    </div>
                    <div class="s-sub">
                        {$news.subtitle}
                    </div>
                </div>
            </div>
            {/foreach}

        </div>

    </div>
</div>