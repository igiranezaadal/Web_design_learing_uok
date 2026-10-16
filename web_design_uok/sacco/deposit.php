<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Record a deposit</title>
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
<h1>Record a deposit</h1>
<!-- Shown only when there are errors (sample):
<ul class="errors">
  <li>Enter a whole amount of 500 RWF or more.</li>
</ul>
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
  <input id="amount" name="amount" type="number" min="500"
         required>

  <label for="deposited_on">Date</label>
  <input id="deposited_on" name="deposited_on" type="date"
         value="2026-10-15" required>

  <label for="note">Note (optional)</label>
  <input id="note" name="note">

  <div class="buttons"><button>Record deposit</button></div>
</form>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
