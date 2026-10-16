<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Apply for a loan</title>
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
<h1>Apply for a loan</h1>
<!-- Shown only when there are errors (sample):
<ul class="errors">
  <li>The loan is more than 3 times the savings: at most 360,000 RWF.</li>
</ul>
-->

<!-- Shown only after Calculate (sample: 600,000 RWF for 12 months):
<div class="summary">
  <div><span>Interest at 12% a year</span>
    <strong>72,000 RWF</strong></div>
  <div><span>Total to pay back</span>
    <strong>672,000 RWF</strong></div>
  <div><span>Every month, 12 months</span>
    <strong>56,000 RWF</strong></div>
</div>
<p class="muted">Savings: 250,000 RWF.
  The SACCO can lend up to 750,000 RWF.</p>
-->

<form method="post" class="card">
  <label for="member_id">Member</label>
  <select id="member_id" name="member_id" required>
    <option value="">Choose…</option>
    <option value="5">Aline Uwimana</option>
    <option value="3">Claudine Mukamana</option>
    <option value="7">Diane Ingabire</option>
    <option value="2">Emmanuel Habimana</option>
    <option value="8">Eric Mugisha</option>
    <option value="4">Jean Bosco Niyonzima</option>
    <option value="1">Jeanne d&#039;Arc Uwase</option>
    <option value="6">Patrick Nshimiyimana</option>
  </select>

  <label for="amount">Amount (RWF)</label>
  <input id="amount" name="amount" type="number" min="10000"
         required>

  <label for="months">Months to repay</label>
  <select id="months" name="months" required>
    <option value="">Choose…</option>
    <option>3</option>
    <option>6</option>
    <option>12</option>
    <option>18</option>
    <option>24</option>
  </select>

  <label for="purpose">Purpose</label>
  <input id="purpose" name="purpose" required>

  <div class="buttons">
    <button name="action" value="calculate" class="light">
      Calculate</button>
    <button name="action" value="apply">Apply</button>
  </div>
</form>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
