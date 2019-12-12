<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.4.1.js"></script>
</head>
<body>

<a id="url_id" href="<?php echo $_GET['url']?>"></a>
<div id="frame">


</div>

<script>
    $(document).ready(function () {

       var url =  $('#url_id').attr('href');

       callWebsite(url);





        function callWebsite(url) {

            $.ajax({
                type: "GET",
                data:{url:url},
                url: "getting_website.php",

                success: function (rooms) {

                    $('#frame').html(rooms);

                    var frame = $('#frame');


                    $('#frame a').each(function (e) {

                        $(this).on('click',function (e) {

                            e.preventDefault();

                            location.reload("http://localhost/out_sourcing/test_iframe/index.php?url="+$(this).prop('href'));



                        })
                    });

                    $("#frame #add-to-cart-button").on('click',function () {

                       $(this).preventDefault();
                       console.log($(this))
                    })


                }
            });

        }





    })
</script>
</body>
</html>

