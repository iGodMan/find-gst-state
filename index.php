<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//arunpandiyan.in/assets/css/bootstrap.css">
    <title>GST Check</title>
</head>
<body>
    <div class="container text-center">
        <div class="form mt-5 pt-5 col-6 m-auto">
            <input type="text" class="gst form-control">
            <input type="button" value="Get" id="get-state" class="btn btn-primary mt-3 col-3">
        </div>
    
        <div class="result text-center mt-5">
            
        </div>
    </div>

<script src="//arunpandiyan.in/assets/js/jquery.js"></script>
<script>
	$(document).ready(function(){
		
		$("#get-state").click(function(){
			var str = $('.gst').val();
			
			var s1 = str.charAt(0);
			var s2 = str.charAt(1);
			
			var check_gst = s1+s2;

			if(check_gst == '33')
			{
				$('.result').html('This GST State is : Tamil Nadu');
			}
			else
			{
				$('.result').html('Out Side of Tamil Nadu');
			}

	});
	});

</script>
</body>
</html>