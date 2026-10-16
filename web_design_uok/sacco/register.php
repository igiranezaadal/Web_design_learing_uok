<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Register a member</title>
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
<h1>Register a member</h1>
<!-- Shown only when there are errors (sample):
<ul class="errors">
  <li>Enter the full name.</li>
</ul>
-->

<form method="post" class="card">
  <label for="full_name">Full name</label>
  <input id="full_name" name="full_name">

  <label for="national_id">National ID (16 digits)</label>
  <input id="national_id" name="national_id">

  <label for="phone">Phone</label>
  <input id="phone" name="phone" type="tel">

  <label for="district">District</label>
  <select id="district" name="district">
    <option value="">Choose…</option>
    <option>Gisagara</option>
    <option>Huye</option>
    <option>Nyamagabe</option>
    <option>Nyanza</option>
    <option>Nyaruguru</option>
  </select>

  <fieldset>
    <legend>Gender</legend>
    <label>
      <input type="radio" name="gender" value="F"> Female
    </label>
    <label>
      <input type="radio" name="gender" value="M"> Male
    </label>
  </fieldset>

  <div class="buttons"><button>Register</button></div>
</form>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
