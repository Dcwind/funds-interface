<?php
include('header.php');
?>


<div class="container content">
    <!-- Begin Service Block -->

    <!--=== End Content Part ===-->

    <div class="bg-color-white"> 
        <div class="container content-md" >
            <ul class="row list-row margin-bottom-30" >

            <?php for($i=0; $i<3 ; $i++ ){ ?>
                <li class="col-md-4 md-margin-bottom-30"  >
                    <div class="content-boxes-v2 text-center block-grid-v1 rounded" >
                        <i class="icon-custom rounded-x icon-bg-blue fa fa-dollar"></i>
                        <div class="content-boxes-in-v3">

                            <h3><a href="#">Business &amp; Finance</a></h3>


                            <div class="row" >
                                <!--Basic Table-->
                                <table class="table list-row ">
                                    <thead class="block-grid-1">
                                    <tr >
                                        <th class="td-left">Description</th>
                                        <th class="td-right">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr >
                                        <td class="td-left" >Mark</td>
                                        <td class="td-right">@mdo</td>
                                    </tr>
                                    <tr>

                                        <td class="td-left">Jacob</td>
                                        <td class="td-right">@fat</td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Larry</td>
                                        <td class="td-right">@twitter</td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">htmlstream</td>
                                        <td class="td-right">@htmlstream</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--End Basic Table-->
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
            </ul>


        </div>
    </div>
</div>

<?php
include('footer.php');
// began using laravel which does a much better work with it's blade templating engine 
?>
//interface design
