<!DOCTYPE html>
<html>
<head>
    <title>Plus Me - Activation Link</title>
</head>
 
<body>
<h2>Welcome to the site {{$user['first_name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to account your email account
<br/>
<!-- feel free to Delete everything elsebut the line below-->
<a href="{{url('user/activate', $user->activateUser->token)}}">Activate Email</a>
</body>
 
</html>