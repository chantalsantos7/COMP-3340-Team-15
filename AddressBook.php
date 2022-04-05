<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Shipping Address</h2>
    <form action="SaveAddressToDB.php" method="post">
        <input type="text" name="fname" id="fname" placeholder="First Name">
        <input type="text" name="lname" id="lname" placeholder="Last Name">
        <textarea name="address" id="address" cols="30" rows="10"></textarea>
        <input type="text" name="zipcode" id="zipcode">
        <label>Country</label>
          <div id="country_select">
            <select name="country" id="country" required>
              <option value="">Country</option>
              <option value="Canada">Canada</option>
              <option value="USA">United States of America</option>
              <option value="UK">United Kingdom</option>
              <option value="France">France</option>
              <option value="Spain">Spain</option>
              <option value="Germany">Germany</option>
              <option value="Mexico">Mexico</option>
            </select>
          </div>
          <input type="submit" value="Save Address">
          <input type="button" value="Clear Address">
    </form>
</body>
</html>