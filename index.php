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
        <td>Bases</td>
        <td align="center"><input type="text" name="qtybases" size="3" maxlength="3"></td>
      </tr>
      <tr>
        <td>Stems</td>
        <td align="center"><input type="text" name="qtystems" size="3" maxlength="3"></td>
      </tr>
      <tr>
        <td>Tops</td>
        <td align="center"><input type="text" name="qtytops" size="3"
        maxlength="3"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><br>
        <input type="submit" value="Enter Order"></td>
      </tr>
    </table>
  </form>

</body>

</html>