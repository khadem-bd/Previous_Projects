<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/postlogin-header.php"; ?>

    <div class="container">
        <div class="tile">
            <div class="d-flex justify-content-between reward-promotion mt-2">
              
                <div class="form-group search ml-2">
                            <span class="ss-search icon"></span>
                            <input class="form-control" placeholder="Search">
                </div>
                <div class="form-group  mt-2 d-flex">
                    <div class="mr-2">
                        <select name="" id="" class="form-control">
                            <option value="">
                                All
                            </option>
                        </select>
                    </div>
                    <a href="" class="btn btn-primary mr-2"><span class="ss-square-plus icon"></span> Add New</a>
                </div>                  
            </div>

            <table class="t-align-top">
                                <tr class="pt-2 text-center">
                                    <th>Reward For</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Promotion %</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        <p>Passenger</p>
                                    </td>
                                    <td>
                                        <p>mm/dd/yyyyy</p>
                                    </td>
                                    <td>
                                        <p>mm/dd/yyyyy</p>
                                    </td>
                                    <td>
                                        <p>10</p>
                                    </td>
                                    <td>Y</td>
                                    <td>
                                        <a href=""><span class="ss-action ml-2"></span></a>
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td>
                                        <p>Account</p>
                                    </td>
                                    <td>
                                        <p>mm/dd/yyyyy</p>
                                    </td>
                                    <td>
                                        <p>mm/dd/yyyyy</p>
                                    </td>
                                    <td>
                                        <p>10</p>
                                    </td>
                                    <td>Y</td>
                                    <td>
                                        <a href=""><span class="ss-action ml-2"></span></a>
                                    </td>
                                </tr>
                            </table>
        </div>       
    </div>        
</body>

</html>