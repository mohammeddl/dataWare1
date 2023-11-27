<?php


include 'config.php';
$sqlEquipe = "SELECT * FROM equipes";
$reqEquipes = mysqli_query($conn, $sqlEquipe);
$dataE = array();


$sqlpesron = "SELECT * FROM persons";
$reqPersons = mysqli_query($conn,$sqlpesron);
$dataP =array();

while ($rowP = mysqli_fetch_assoc($reqPersons)){
  $dataP[]= $rowP;
}

while ($rowE = mysqli_fetch_assoc($reqEquipes)){
  $dataE[]= $rowE;
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["submitName"])) {
      $teamName = $_POST["teamName"];

      $sqlAddName="INSERT INTO equipes ( nameTeams)
    VALUES('$teamName')";
    mysqli_query($conn,$sqlAddName);
  }

  // if (isset($_POST["submitAddMember"])) {
  //     $teamName = $_POST["teamNameSelect"];
  //     $memberName = $_POST["memberName"];
  //     // $sqlAddMember = "INSERT INTO persons (nameTeams, memberName) VALUES ('$teamName', '$memberName')";
  //     mysqli_query($conn, $sqlAddMember);
      
  // }

  // if (isset($_POST["submitRemove"])) {
  //     $teamName = $_POST["teamNameSelect"];
  //     $memberName = $_POST["memberName"];
  //     $sqlRemoveMember = "DELETE FROM  WHERE teamName = '$teamName' AND memberName = '$memberName'";
  //   mysqli_query($conn, $sqlRemoveMember);
  // }
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
<body>
<nav class="flex justify-between bg-[#24698b] text-white w-full">
        <div class="xl:px-11 justify-between flex w-full items-center">
            <a class="text-3xl font-bold font-heading" href="#">
            <img class="h-[70px] logo" src="img/logo.png" alt="logo"></a>
          <!-- Nav Links  -->
            <ul class="hidden md:flex px-10 ml-auto font-semibold font-heading space-x-12 max-md:gap-80 max-md:absolute max-md:right-0 max-md:top-[84px] max-md:bg-gray-950 max-md:h-[400px] max-md:w-[200px]"
                id="nav-links">
                <li class="max-md:my-8"><a class="hover:text-gray-200 max-md:ml-[50px] ">Member</a></li>
                <li class="max-md:my-8"><a class="hover:text-gray-200" >Teams</a></li>

            </ul>
            
        </div>
          <!-- Responsive navbar  -->
        <button class="md:hidden flex items-center cursor-pointer ml-2" id="burger-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-300" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav> 

    <div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Team Management</h1>
   <!-- Add Team Form -->
    <form action="ScrumMaster.php" method="post" class="mb-6">
        <label for="teamName" class="block text-sm font-medium text-gray-700">Team Name:</label>
        <input type="text" id="teamName" name="teamName" class="mt-1 p-2 w-full border rounded-md">

        <div class="flex justify-between mt-4">
            <button type="submit" name="submitName" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Team</button>
        </div>
    </form>

    <!-- Manage Team Members Form -->
    <form action="ScrumMaster.php" method="post">
        <label for="teamNameSelect" class="block text-sm font-medium text-gray-700">Select Team:</label>
        <select id="teamNameSelect" name="teamNameSelect" class="mt-1 p-2 w-full border rounded-md">
    <?php
    foreach($dataE as $equipe ){
      ?>
        <option value="<?=$equipe['id']?> "><?=$equipe['nameTeams']?></option>
    <?php
  } ?>
        </select>

        <label for="memberName" class="block mt-4 text-sm font-medium text-gray-700">Member Name:</label>
        <select id="memberName" name="memberName" class="mt-1 p-2 w-full border rounded-md">
        <?php
    foreach($dataP as $personn ){
      ?>
        <option value="<?=$personn['id']?> "><?=$personn['Nom']?></option>
    <?php
  } ?>
        <div class="flex justify-between mt-4">
            <button type="submit" name="submitAddMember" class="bg-green-500 text-white px-4 py-2 rounded-md">Add Member</button>
            <button type="submit" name="submitRemove" class="bg-red-500 text-white px-4 py-2 rounded-md">Remove Member</button>
        </div>
    </form>
</div>

<!-- cards -->
<h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide ">Teams</h2>
<?php

foreach($dataE as $equipe ){
  ?>
  <div>
    <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <li class="col-span-1 flex shadow-sm rounded-md">
          <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
          <?php $test=$equipe['nameTeams'] ; 
          $firstCharacter = $test[0];
          echo $firstCharacter;?>
          </div>
          <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
            <div class="flex-1 px-4 py-2 text-sm truncate">
              <a href="#" class="text-gray-900 font-medium hover:text-gray-600"><?=$equipe['nameTeams']?></a>
              <p class="text-gray-500">16 Members</p>
            </div>
            <div class="flex-shrink-0 pr-2">
              <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Open options</span>
                <svg class="w-5 h-5" x-description="Heroicon name: solid/dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
</svg>
              </button>
            </div>
          </div>
        </li>
      </ul>
      </div>
      <?php
}
?>

<div class="bg-gray-100 h-[100vh] py-10">
    <div class="mx-auto max-w-7xl">
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                
              <?php
            foreach($dataP as $personn ){
                ?>
                <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                <?php
                $free=" ";
                echo $personn['Nom'] ,$free,  $personn['Prenom']
                ?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                    <?php
                    echo $personn['Telephone']
                    ?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                <?php
                    echo $personn['Email']
                    ?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>

                  <?php
               }
               ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
</body>
</html>