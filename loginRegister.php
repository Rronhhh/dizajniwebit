<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f0f2f5;
      }

      nav {
        background-color: #171c24;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }

      .logo {
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
      }

      .nav-items {
        list-style: none;
        display: flex;
        gap: 20px;
      }

      .nav-items a {
        color: white;
        text-decoration: none;
      }

      .nav-items a:hover {
        text-decoration: underline;
      }

      .container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        margin: 20px auto;
        text-align: center;
      }

      form {
        display: flex;
        flex-direction: column;
      }

      h2 {
        margin-bottom: 20px;
        color: #1877f2;
      }

      label {
        margin-bottom: 6px;
      }

      input {
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      button {
        background-color: #1877f2;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
        background-color: #0e5a8a;
      }

      p {
        margin-top: 16px;
        text-align: center;
        color: #555;
      }

      a {
        color: #1877f2;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }
      /* Footer styles */
.FooterSection {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

.footer-links a {
  color: #fff;
  margin: 0 10px;
  text-decoration: none;
}
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Navigation styles */
    nav {
      background-color:  #171c24;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }
    </style>
    <title>Login/Register Page</title>
  </head>

  <body>
    <nav>
      <a href="home.html" class="logo">CodingNepal</a>
      <div class="nav-items">
        <a href="#">Home</a>
        <a href="./about.html">About</a>
        <a href="#">Contact</a>
        <a href="login.html" class="loginregister">Login/Register</a>
      </div>
    </nav>

    <div class="container" id="loginContainer">
      <form id="loginForm" onsubmit="validateLogin(); return false;">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">Login</button>
      </form>
      <p>
        Don't have an account?
        <a href="javascript:void(0);" onclick="toggleForms()">Register here</a>
      </p>
    </div>

    <div class="container" id="registerContainer" style="display: none">
      <form id="registerForm" onsubmit="validateRegister(); return false;">
        <h2>Create an Account</h2>
        <label for="regUsername">Username:</label>
        <input type="text" id="regUsername" name="regUsername" required />

        <label for="regEmail">Email:</label>
        <input type="email" id="regEmail" name="regEmail" required />

        <label for="regPassword">Password:</label>
        <input type="password" id="regPassword" name="regPassword" required />

        <button type="submit">Register</button>
      </form>
      <p>
        Already have an account?
        <a href="javascript:void(0);" onclick="toggleForms()">Login here</a>
      </p>
    </div>
    <!-- Footer Section -->
  <section class="FooterSection">
    <footer class="footer-distributed">
      <div class="footer-centered">
        <div class="footer-left">
          <h3>Coding<span>Nepal</span></h3>
          <p class="footer-links">
            <a href="index.html" class="link-1">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="./loginRegister.html">Login/Register</a>
          </p>
          <p class="footer-company-name">CodingNepal © 2023</p>
        </div>
        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Kathmandu, Nepal</span></p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@codingnepal.com">info@codingnepal.com</a></p>
          </div>
        </div>
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About CodingNepal</span>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim cumque animi, soluta id omnis sint nulla quidem nisi rerum neque earum eius adipisci commodi. Vitae iusto doloribus sed ex accusamus.
          </p>
        </div>
      </div>
    </footer>
  </section>

    <script>
      function toggleForms() {
        var loginContainer = document.getElementById("loginContainer");
        var registerContainer = document.getElementById("registerContainer");

        // Toggle the display property of the login and register containers
        if (loginContainer.style.display === "none") {
          loginContainer.style.display = "block";
          registerContainer.style.display = "none";
        } else {
          loginContainer.style.display = "none";
          registerContainer.style.display = "block";
        }
      }
    </script>
  </body>
</html>