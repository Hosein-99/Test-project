<div class="col-xs-35 mtm-5" >
    <div class="col-xs-36 mtm-2">

        <li class="p1"><span id="page3">پربازدید ها  </span> </li>
        <li class="mtm2-khat"></li>
        <li class="p2"><span id="page4">پر بحث ها</span></li>

    </div>
    <div class="col-xs-36" id="page-3">
        <div class="page-3">
            {foreach $section16 as $news}
                <div class="page-1-in text-right">
                    <i class="fa fa-square fa-xs  " aria-hidden="true"></i>
                    <a href="#" >

                                        <span>
                                           {$news.titr}
                                        </span>


                    </a>

                </div>
            {/foreach}

            <div class="wrapper"></div>
        </div>
    </div>
    <div class="col-xs-36" id="page-4">
        <div class="page-4">

        </div>
    </div>
</div>