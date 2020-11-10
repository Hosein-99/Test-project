<div class="col-xs-36 col-sm-24 mright-top-left text-justify" >
    {foreach $section3 as $news}

        <div class="col-xs-36  mrt-l">
            <a href="#">
                <img class="mrtl-pic" src="{$news.img}" alt="">
            </a>
            <div class="mrtl-padd"></div>
            <div class="mrtl-ptitr">
                <a href="#">{$news.rutitr}</a>
            </div>
            <div class="mrtl-titr">
                <i class="fa fa-caret-left " aria-hidden="true"></i>
                <a href="#">{$news.titr}</a>
            </div>
            <div class="mrtl-matn">
                <p>{$news.subtitle}</p>
            </div>
        </div>

    {/foreach}




</div>