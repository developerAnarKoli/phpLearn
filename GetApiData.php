<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   
    <script>
         $.ajax({
        type: 'GET',
        url: 'https://jsonplaceholder.typicode.com/posts',
        datatype: 'json',
        success: function(data){
            //alert(data);
            for(var i=0; i<data.length; i++){
                var userId = data[i].userId; 
                var id = data[i].id;
                var title = data[i].title;
                var body = data[i].body;

                console.log(body);
            }
        }
    });
    </script>
</body>
</html>