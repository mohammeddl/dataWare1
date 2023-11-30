<?php
session_start();
include 'config.php';

$error = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM persons WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Error in the query: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['Nom'];
        $_SESSION['user_role'] = $row['Role'];
       

        echo "Login successful. Welcome, {$_SESSION['user_name']}!";
        


        if($_SESSION['status']= 'ProductOwner'){
          header("Location: ProductOwner.php");
        }

        switch ($_SESSION['user_role']) {
            case "ScrumMaster":
              $_SESSION['status']= 'ScrumMaster';
                header("Location: ScrumMaster.php");
                exit;
                case "member":
                  $_SESSION['status']= 'user';
                  header("Location: user.php");
                  exit;
                case "productOwner":
                  $_SESSION['status']= 'ProductOwner';
                    header("Location: ProductOwner.php");
                    exit;
        }
    } else {
        $error = "Email or password is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f4f4f4]">

<div style="background-image: url(img/login.png);" class="bg-gray-50 h-screen bg-cover bg-center w-full ">
    <div class="min-h-full w-2/3 flex flex-col  justify-center py-12 sm:px-6 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-[100px] w-auto" src="img/logo2.png" alt="Workflow">
      </div>
      
      <div class=" sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <h2 class="my-14 text-center text-3xl font-extrabold text-gray-900">
            Sign in to your account
          </h2>
          <form class="space-y-6" action="" method="POST">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">
                Email address
              </label>
              <div class="mt-1">
                <input id="email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div>
              <label for="password" class="block text-sm font-medium text-gray-700">
                Password
              </label>
              <div class="mt-1">
                <input id="password" name="pass" type="password"  required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>
  
              <div class="text-sm">
                <a href="create.php" class="font-medium text-[#24698b] hover:text-indigo-500">
                Create an account 
                </a>
              </div>
  
            <div>
              <input type="submit" name="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#24698b] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <?='<span class="bg-red-500/30 text-red-600">'.$error.'</span>'?>
            </div>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    </div>
</body>
</html>