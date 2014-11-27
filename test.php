
<html>
<head>
     <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('#rest-submit').click(function(){
      $.ajax({
        type: "POST",
        url: "index.php",
        data: $('#rest-form').serialize(),
        dataType: "json",
        beforeSend: function() {  },
        success: function(response) {
        alert(JSON.stringify(response));
          $("#response-block").html(JSON.stringify(response));
        }
        
      });
   });
});
</script>
</head>
  <body>
     <form id="rest-form" method="POST">
      <label>roomId</label>
      <input  type="text" name="roomId"  value="" />
      <br/>
      <label>userId</label>
      <input  type="text" name="userId"  value="" />
      <br/>
      <input id="rest-submit" value="Submit" type="button"  onclick="Javascript:"/>
    </form>
    
  </body>
</html>