<?php
session_start();

if ($_SESSION['logged2'] != true) {
	header('Location: login.php', true, 302);
	exit;
}

if (isset($_POST['logout'])) {
	session_destroy();
	header('Location: login.php', true, 302);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VulnMachines CORS Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  body {
  margin-top: 20px;
}

// Bootstrap resets
.card {
  border: none;
}
.card-img {
  border-radius: 0;
}

.vgr-cards {
  .card {
    display: flex;
    flex-flow: wrap;
    flex: 100%;
    margin-bottom: 40px;

    &:nth-child(even) .card-img-body {
      order: 2;
    }

    &:nth-child(even) .card-body {
      padding-left: 0;
      padding-right: 1.25rem;
    }

    @media (max-width: 576px) {
      display: block;
    }

  }

  .card-img-body {
    flex: 1;
    overflow: hidden;
    position: relative;

    @media (max-width: 576px) {
      width: 100%;
      height: 200px;
          margin-bottom: 20px;
    }

  }

  .card-img {
    width: 100%;
    height: auto;
    position: absolute;
    margin-left: 50%;
    transform: translateX(-50%);

    @media (max-width: 1140px) {
          margin: 0;
    transform: none;
    width: 100%;
    height: auto;
    }

  }

  .card-body {
    flex: 2;
    padding: 0 0 0 1.25rem;

    @media (max-width: 576px) {
      padding: 0;
    }

  }
}

</style>
<body>
<form method=POST>

    <input type=submit name=logout value="Logout"></form>
<div class="container">
  <h2>VulnMachines CORS Labs</h2>
  <p>Cross-Origin Resource Sharing (CORS) is a mechanism that uses additional HTTP headers to tell browsers to give a web application running at one origin, access to selected resources from a different origin.</p>
  <div class="card-group vgr-cards">
    <div class="card">
      <div class="card-img-body">
      <img class="card-img" src="https://picsum.photos/500/230" alt="Card image cap">
      </div>
      <div class="card-body">
        <h4 class="card-title">Arbitrary Origin Trusted</h4>
        <p class="card-text">Trusting arbitrary origins effectively disables the same-origin policy, allowing two-way interaction by third-party web sites. Unless the response consists only of unprotected public content, this policy is likely to present a security risk.
        If the site specifies the header Access-Control-Allow-Credentials: true, third-party sites may be able to carry out privileged actions and retrieve sensitive information. Even if it does not, attackers may be able to bypass any IP-based access controls by proxying through users' browsers</p>
        <a href="#" class="btn btn-outline-primary">Primary</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img-body">
        <img class="card-img" src="https://picsum.photos/400/200" alt="Card image cap"></div>
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This card has supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-outline-primary">Primary</a>
      </div>
    </div>
    <div class="card">
      <div class="card-img-body">
        <img class="card-img" src="https://picsum.photos/450/250" alt="Card image cap"></div>
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action. This is a wider card with supporting text below as a natural lead-in
          to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-outline-primary">Primary</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>