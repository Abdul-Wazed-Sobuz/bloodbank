<?php include '../layouts/extlinks/cdn-css.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Search Blood</title>
</head>

<body>
    <?php include '../layouts/admin-nav.php'; ?>
    <div class="container-fluid">
        <div class="row" style="min-height: 550px;">
            <div class="col-2">
                <?php include '../layouts/sidebar.php' ?>
                <div class="col-10">
                    <nav class="navbar navbar-light bg-light justify-content-between p-3 my-3">
                        <a class="navbar-brand"><h4 style="color:red"><i style="font-size: 16pt;margin-right:10px" class="fa-solid fa-magnifying-glass"></i>Search Blood</h4></a>
                        <form class="form-inline" >
                            <input name="input" class="form-control mr-sm-2" id="bsearch" type="search" placeholder="Search" aria-label="Search">
                            <button id="btn-bsearch" class="btn btn-outline-danger my-2 my-sm-0">Search</button>
                        </form>
                    </nav>
                    </form>
                    <div id="searchresult">

                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $.ajax({
                                        url:"../../controller/showdonorController.php",
                                        method: "get",
                                        success:function(data){
                                            $("#searchresult").html(data)
                                        }
                                    })
                            $("#btn-bsearch").keydown(function(){
                                var input = $('input').val();
                                // alert(input);
                                if(input!=" "){
                                    $.ajax({
                                        url:"../../controller/bloodlivesearch.php",
                                        method: "post",
                                        data:{input:input},
                                        success:function(data){
                                            $("#searchresult").html(data)
                                        }
                                    })
                                }
                                else{
                                    $('#searchresult').css('display','none');
                                }
                            })
                            $("#bsearch").keyup(function(){
                                var input = $(this).val();
                                // alert(input);
                                if(input!=" "){
                                    $.ajax({
                                        url:"../../controller/bloodlivesearch.php",
                                        method: "post",
                                        data:{input:input},
                                        success:function(data){
                                            $("#searchresult").html(data)
                                        }
                                    })
                                }
                                else{
                                    $('#searchresult').css('display','none');
                                }
                            })
                        })
                    </script>

                </div>
            </div>
        </div>
        <div>
            <?php include '../layouts/footer.php' ?>
        </div>
        <?php include '../layouts/extlinks/cdn-js.php'; ?>

</body>

</html>