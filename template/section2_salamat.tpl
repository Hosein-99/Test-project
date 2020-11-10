<div class="row">
    <div class="col-xs-36 text-center mright-mid">

        <div class="row" style="margin-right: 2%;">
            {foreach $section2 as $news}
                <div class="col-xs-17 col-ms-8 col-xs-offset-1 mrm-pics" >
                    <h3>

                        <a href="col-xs-36">
                            <figure>
                                <img src="{$news.img}" alt="" class="mrm-pic"  >
                                <figcaption class="fig-c" >{$news.titr} </figcaption>
                            </figure>
                        </a>
                    </h3>

                </div>
            {/foreach}


        </div>
    </div>