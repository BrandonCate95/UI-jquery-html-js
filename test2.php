<!DOCTYPE html>
<html>
<head>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
</head>

<body>

<form id="theForm">  

First name: <input type="text" name="firstName" value="">
<br>
Last name: <input type="text" name="lastName" value="">
<br>
Email: <input type="text" name="email" value="">
<br>
<input type="submit" id="submit" value="Submit">
</form>



<p></p>
<script type="text/javascript">
$("#theForm").submit(function(e) {

    //var url = "addEntry.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: "addEntry.php",
           data: $("#theForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("p").html(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>

</body>

</html>