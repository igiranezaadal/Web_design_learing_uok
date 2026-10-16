<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Jean Bosco Niyonzima</title>
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
<!-- After saving, other pages send a message here (sample):
<p class="flash">Deposit of 50,000 RWF recorded.</p>
-->
<h1>Jean Bosco Niyonzima</h1>
<dl class="card details">
  <dt>Member number</dt><dd>4</dd>
  <dt>National ID</dt><dd>1198880045678901</dd>
  <dt>Phone</dt><dd>0783987654</dd>
  <dt>District</dt><dd>Huye</dd>
  <dt>Gender</dt><dd>Male</dd>
  <dt>Joined on</dt><dd>3 September 2026</dd>
</dl>
<p class="actions">
  <a class="button light" href="edit.php?id=4">Edit details</a>
  <a class="button light" href="delete.php?id=4">Delete</a>
</p>

<h2>Savings: 200,000 RWF</h2>
<table>
  <tr>
    <th>Date</th><th class="num">Amount</th><th>Note</th>
  </tr>
  <tr>
    <td>2026-09-03</td>
    <td class="num">150,000 RWF</td>
    <td>Opening deposit</td>
  </tr>
  <tr>
    <td>2026-10-01</td>
    <td class="num">50,000 RWF</td>
    <td>—</td>
  </tr>
  <tr class="total">
    <td>Total</td><td class="num">200,000 RWF</td>
    <td></td>
  </tr>
</table>
<!-- When there are no deposits:
<p class="muted">No deposits yet.</p>
-->
<p class="actions">
  <a class="button" href="deposit.php?member=4">New deposit</a>
</p>

<h2>Loans</h2>
<table>
  <tr>
    <th>Issued</th><th class="num">Amount</th>
    <th class="num">Monthly</th><th class="num">Total</th>
    <th class="num">Paid</th><th class="num">Balance</th>
  </tr>
  <tr>
    <td>2026-09-20</td>
    <td class="num">300,000 RWF</td>
    <td class="num">53,000 RWF</td>
    <td class="num">318,000 RWF</td>
    <td class="num">53,000 RWF</td>
    <td class="num">265,000 RWF</td>
  </tr>
</table>
<!-- A fully repaid loan row has class="paid" (grey).
     When there are no loans:
<p class="muted">No loans.</p>
-->
<p class="actions">
  <a class="button" href="loan.php?member=4">Apply for a loan</a>
</p>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
