<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>Edit Emmanuel Habimana</title>
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
<h1>Edit member 2</h1>
<!-- Shown only when there are errors (sample):
<ul class="errors">
  <li>National ID already registered.</li>
</ul>
-->

<form method="post" class="card">
  <label for="full_name">Full name</label>
  <input id="full_name" name="full_name"
         value="Emmanuel Habimana" required>

  <label for="national_id">National ID (16 digits)</label>
  <input id="national_id" name="national_id"
         value="1198580023456789" required
         pattern="[0-9]{16}" inputmode="numeric">

  <label for="phone">Phone</label>
  <input id="phone" name="phone" type="tel"
         value="0722334455" required>

  <label for="district">District</label>
  <select id="district" name="district" required>
    <option value="">Choose…</option>
    <option>Gisagara</option>
    <option>Huye</option>
    <option>Nyamagabe</option>
    <option selected>Nyanza</option>
    <option>Nyaruguru</option>
  </select>

  <fieldset>
    <legend>Gender</legend>
    <label>
      <input type="radio" name="gender" value="F"> Female
    </label>
    <label>
      <input type="radio" name="gender" value="M" checked> Male
    </label>
  </fieldset>

  <div class="buttons"><button>Save changes</button></div>
</form>
</main>
<footer class="foot">Ingenzi SACCO · Huye</footer>
</body>
</html>
