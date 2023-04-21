<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Style Loaded From CDN(Content Delivery Network) -->

  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>

<body>
  <main class="flex h-[100vh] bg-base-200 w-[100%] items-center justify-center">
    <div class="card w-96 bg-base-100 shadow-xl">
      <form class="card-body" method="POST" action="/loginPost">
        <h2 class="card-title">Welcome User!</h2>
        <p>Login to continue</p>
        <?php

          if(isset($error)) {
              ?>
            <div class="alert alert-error shadow-lg">
              <div>
                <span><?= $error ?></span>
              </div>
            </div>
        <?php
          }
        ?>
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">Username</span>
          </label>
          <input type="text" name="username" placeholder="Your Username" class="input input-bordered input-primary w-full max-w-xs" />
        </div>
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" name="password" placeholder="Your Password" class="input input-bordered input-primary w-full max-w-xs" />
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-primary">Login</button>
        </div>
        <div class="label">
          <span class="label-text">
            Don't have an account? <a class="link link-primary" href="register">Register</a>
          </span>
        </div>
      </form>
    </div>
  </main>
</body>

</html>