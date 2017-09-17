<!DOCTYPE html >

<head>
<title>Pirmas puslapis</title>
<meta content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css.css" type="text/css" />
</head>

<body>
  <div class="center">
    <img src="images/product.png"/>
  </div>

  <p>Component Order Form</p>

  <FORM ACTION="apdoroti.php" method=post>
    <table border=0>
      <tr>
        <td width=150>Item<br>
        &nbsp;</td>
        <td width=15>Quantity<br>
        &nbsp;</td>
      </tr>
      <tr>
        <td>Vardas</td>
        <td align="center"><input type="text" name="vardas" size="3" maxlength="3"></td>
      </tr>
      <tr>
        <td>Pavarde</td>
        <td align="center"><input type="text" name="pavarde" size="3" maxlength="3"></td>
      </tr>
      <tr>
        <td>Adresas</td>
        <td align="center"><input type="text" name="adresas" size="3"
        maxlength="3"></td>
      </tr>
      <tr>
        <td>Kiekis</td>
        <td align="center"><input type="text" name="kiekis" size="3"
        maxlength="3"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><br>
        <input type="submit" value="Uzsakyti"></td>
      </tr>
    </table>
  </form>

</body>

</html>