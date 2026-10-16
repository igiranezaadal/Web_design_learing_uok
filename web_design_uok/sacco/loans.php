<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Loans</title>
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
<h1>Loans</h1>
<table>
  <tr>
    <th>Member</th><th class="num">Amount</th>
    <th class="num">Months</th><th class="num">Monthly</th>
    <th class="num">Paid</th><th class="num">Balance</th>
    <th>Status</th>
  </tr>
  <!-- Sample rows: in 4.20 PHP prints one row per loan. -->
  <tr>
    <td><a href="member.php?id=7">Diane Ingabire</a></td>
    <td class="num">100,000 RWF</td>
    <td class="num">3</td>
    <td class="num">34,334 RWF</td>
    <td class="num">103,000 RWF</td>
    <td class="num">0 RWF</td>
    <td><span class="badge paid">Paid</span></td>
  </tr>
  <tr>
    <td><a href="member.php?id=1">Jeanne d&#039;Arc Uwase</a></td>
    <td class="num">600,000 RWF</td>
    <td class="num">12</td>
    <td class="num">56,000 RWF</td>
    <td class="num">0 RWF</td>
    <td class="num">672,000 RWF</td>
    <td><span class="badge active">Active</span></td>
  </tr>
  <tr>
    <td><a href="member.php?id=4">Jean Bosco Niyonzima</a></td>
    <td class="num">300,000 RWF</td>
    <td class="num">6</td>
    <td class="num">53,000 RWF</td>
    <td class="num">53,000 RWF</td>
    <td class="num">265,000 RWF</td>
    <td><span class="badge active">Active</span></td>
  </tr>
  <tr class="total">
    <td>Total</td><td class="num">1,000,000 RWF</td>
    <td></td><td></td><td></td>
    <td class="num">937,000 RWF</td><td></td>
  </tr>
</table>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
