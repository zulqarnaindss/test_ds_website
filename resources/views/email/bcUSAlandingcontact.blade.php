<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>Contact Form Data</h2>
       <h2> Name: <strong>{{ $data['name'] }}</strong></h2> 
      <h2> Email: <strong>{{ $data['email'] }}</strong></h2>  
       <h2> Phone: <strong>{{ $data['phone'] }}</strong></h2> 
       <h2>Company: <strong>{{ $data['company'] }}</strong></h2>  
       <h2>Solution: <strong>{{ $data['solutions'] }}</strong></h2> 
      <h2> Services: <strong>{{ $data['services'] }} </strong></h2> 
       <h2> Message: <strong>{{ $data['message'] }}</strong></h2>
</body>
</html>
  
