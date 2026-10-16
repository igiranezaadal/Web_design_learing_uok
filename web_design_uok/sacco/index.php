<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Ingenzi SACCO</title>
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
<h1>Dashboard</h1>
<!-- Sample figures: in 4.23 PHP computes them. -->
<div class="summary">
  <div><span>Members</span>
    <strong>8</strong></div>
  <div><span>Savings</span>
    <strong>885,000 RWF</strong></div>
  <div><span>Lent out</span>
    <strong>1,000,000 RWF</strong></div>
  <div><span>Repaid</span>
    <strong>156,000 RWF</strong></div>
  <div><span>Still owed (2 loans)</span>
    <strong>937,000 RWF</strong></div>
  <div><span>Interest expected</span>
    <strong>93,000 RWF</strong></div>
</div>
<p class="message">Cash in the till (savings − lent + repaid):
  <strong>41,000 RWF</strong></p>

<h2>Members and savings by district</h2>
<table>
  <tr>
    <th>District</th><th class="num">Members</th>
    <th class="num">Savings</th>
  </tr>
  <tr>
    <td>Huye</td>
    <td class="num">3</td>
    <td class="num">540,000 RWF</td>
  </tr>
  <tr>
    <td>Nyanza</td>
    <td class="num">2</td>
    <td class="num">120,000 RWF</td>
  </tr>
  <tr>
    <td>Gisagara</td>
    <td class="num">1</td>
    <td class="num">105,000 RWF</td>
  </tr>
  <tr>
    <td>Nyaruguru</td>
    <td class="num">1</td>
    <td class="num">100,000 RWF</td>
  </tr>
  <tr>
    <td>Nyamagabe</td>
    <td class="num">1</td>
    <td class="num">20,000 RWF</td>
  </tr>
</table>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
