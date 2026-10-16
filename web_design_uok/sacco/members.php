<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Members</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="top">
  <a class="brand" href="index.php">Ingenzi SACCO</a>
  <nav>
    <a href="members.php">Members</a>
    <a href="register.php">Register</a>
    <a href="deposit.php">Deposit</a>
    <a href="loan.php">Loan</a>
    <a href="repay.php">Repay</a>
    <a href="loans.php">Loans</a>
  </nav>
</header>
<main>
<h1>Members (8)</h1>
<form class="search">
  <input name="q" value="" placeholder="Name…">
  <button>Search</button>
</form>
<!-- When nothing matches:
<p class="muted">No member matches “zzz”.</p>
-->
<table>
  <tr>
    <th>No.</th><th>Name</th>
    <th>Phone</th><th>District</th>
  </tr>
  <!-- Sample rows: in 4.16 PHP prints one row per member. -->
  <tr>
    <td>5</td>
    <td><a href="member.php?id=5">Aline Uwimana</a></td>
    <td>0789001122</td>
    <td>Nyamagabe</td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="member.php?id=3">Claudine Mukamana</a></td>
    <td>0738456789</td>
    <td>Gisagara</td>
  </tr>
  <tr>
    <td>7</td>
    <td><a href="member.php?id=7">Diane Ingabire</a></td>
    <td>0781234987</td>
    <td>Huye</td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="member.php?id=2">Emmanuel Habimana</a></td>
    <td>0722334455</td>
    <td>Nyanza</td>
  </tr>
  <tr>
    <td>8</td>
    <td><a href="member.php?id=8">Eric Mugisha</a></td>
    <td>0733445566</td>
    <td>Nyanza</td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="member.php?id=4">Jean Bosco Niyonzima</a></td>
    <td>0783987654</td>
    <td>Huye</td>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="member.php?id=1">Jeanne d&#039;Arc Uwase</a></td>
    <td>0788123456</td>
    <td>Huye</td>
  </tr>
  <tr>
    <td>6</td>
    <td><a href="member.php?id=6">Patrick Nshimiyimana</a></td>
    <td>0728765432</td>
    <td>Nyaruguru</td>
  </tr>
</table>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
