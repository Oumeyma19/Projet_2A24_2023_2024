
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Inscription</title>
    
</head>
<body>
    <h1>Inscription au site</h1>
    <form id="inscriptionForm" action="Verification.php" method="POST">
        <table >
            <tr>
                <td><label for="">FirstName :</td>
                <td><input type="text" name="FirstName" id="firstName"/></td>
            </tr>
            <tr>
                <td><label for="">LastName :</td>
                <td><input type="text" name="LastName" id="LastName"/></td>
            </tr>
            <tr>
                <td><label for="">email :</td>
                <td><input type="email" name="email" id="phone"/></td>
            </tr>
            <tr>
                <td><label for="">telephone :</td>
                <td><input type="tel" name="telephone" id="email"/></td>
            </tr>
                <tr>
                    <td><label for="">DateOfBirth:</td>
                    <td><input type="text" name="DateOfBirth" id="dob" /></td>
                
            </tr>
            <tr>
                <td><label for="">Password1:</td>
                <td><input type="password" name="password1" id="pass1"/></td>
            
        </tr>
        <tr>
                <td><label for="">Password2:</td>
                <td><input type="password" name="password2" id="pass2"/></td>
            
        </tr>
            <tr>
                <td><button type="submit">S'inscrire</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

