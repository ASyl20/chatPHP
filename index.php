<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax basics</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:50px">
    <form>
        <div class="form-group">
            <input type="text" id="name" class="form-control" placeholder="Enter Name...">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-success" id="btn">Enter</button>
        </div>
    </form>
    <div class="msg"></div>
</div>
  <script src="assets/js/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#btn').click(function(){
          var name = $("#name").val()
        //   $.get('ajax.php',{ajax_name:name},function(response) {
        //       $('.msg').html(response)
        //   })
        //   .fail(function(error){
        //       alert(error.statusText)
        //   })

        $.ajax({
            type: 'GET',
            url: 'ajax.php',
            data: {ajax_name:name},
            success: function(res){
                $('.msg').html(res)
            }
        })
        .fail(function(error){
            alert(console.error(.statusText);
            )
        })
      })

  })
  </script>
</body>
</html>