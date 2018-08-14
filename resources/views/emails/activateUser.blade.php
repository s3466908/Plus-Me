<!DOCTYPE html>
<html>
<head>
    <title>Plus Me - Activation Link</title>
</head>
 
<body>
<h2>Welcome to the site {{$user['first_name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<!-- feel free to Delete everything else  but the line below-->
<a href="{{url('user/activate', $user->activateUser->token)}}">Verify Email</a>
</body>
 
</html>