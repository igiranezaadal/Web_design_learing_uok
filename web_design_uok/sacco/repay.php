<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Record a repayment</title>
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
<h1>Record a repayment</h1>
<!-- Shown only when there are errors (sample):
<ul class="errors">
  <li>That is more than the balance of 265,000 RWF.</li>
</ul>
-->

<form method="post" class="card">
  <label for="loan_id">Loan</label>
  <select id="loan_id" name="loan_id" required>
    <option value="">Choose…</option>
    <!-- Sample: only loans that still have a balance -->
    <option value="1">Jeanne d&#039;Arc Uwase: owes 672,000 RWF,
      56,000 RWF a month</option>
    <option value="2">Jean Bosco Niyonzima: owes 265,000 RWF,
      53,000 RWF a month</option>
  </select>

  <label for="amount">Amount paid (RWF)</label>
  <input id="amount" name="amount" type="number" min="1"
         required>

  <label for="paid_on">Date</label>
  <input id="paid_on" name="paid_on" type="date"
         value="2026-10-15" required>

  <div class="buttons"><button>Record payment</button></div>
</form>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
