<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <main>
    <div class="err-succ_disp">
      <p></p>
    </div>
    <div class="form-container">
      <img src="https://images.unsplash.com/photo-1673720436356-8af2190c9c06?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="welcome img">
      <form action="./logic.php" method="post">
        <h1>Sign Up</h1>
        <div class="field-container">
          <div class="input-container">
            <label for="first_name">First name</label>
            <input name="first_name" type="text">
          </div>
          <div class="input-container">
            <label for="second_name">Second Name</label>
            <input name="second_name" type="text">
          </div>
        </div>
        <div class="field-container">
          <div class="input-container">
            <label for="phone">phone</label>
            <input name="phone" type="text">
          </div>
          <div class="input-container">
            <label for="email">email</label>
            <input name="email" type="text">
          </div>
        </div>
        <div class="field-container">
          <div class="input-container">
            <label for="password">password</label>
            <input name="password" type="text">
          </div>
          <div class="input-container">
            <label for="con_password">Confirm password</label>
            <input name="con_password" type="password">
          </div>
        </div>
        <div class="field-container_checkbox">
          <div class="input-container_checkbox">
            <input type="checkbox" name="terms">
            <p>I accept the terms and conditions</p>
          </div>
          <div class="input-container_checkbox">
            <input type="checkbox" name="news">
            <p>I want
              to receive news about products and
              offers.</p>
          </div>
        </div>
        <button class="btn" type="submit">SIGN UP</button>
      </form>
    </div>
  </main>
</body>

</html>