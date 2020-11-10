<div class="col-xs-35 mtm-4" >
    <div class="col-xs-36 mtm3-in">
        <span class="mtm3-titr">مطبوعات</span>
    </div>
    {foreach $section15 as $news}
        {if $news@first }
            <div class="col-xs-36 mtm4-in text-center">

                <a href="#"><figure>
                        <img src="{$section15.img}" alt="" style="width: 100%; height: 216px;margin-bottom: 10px;">
                        <figcaption>{$section15.titr}</figcaption>

                    </figure></a>


            </div>
        {/if}

    {/foreach}

</div>