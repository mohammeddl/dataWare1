<?php


include 'config.php';

$sql = "SELECT * FROM persons";
$req = mysqli_query($conn, $sql);
$sqlP = "SELECT * FROM projects";
$reqP = mysqli_query($conn, $sqlP);
$dataP = array();
$data = array();

// Fetch each row as an associative array
while ($row = mysqli_fetch_assoc($req)) {
    $data[] = $row;
}

while ($rowP = mysqli_fetch_assoc($reqP)) {
  $dataP[] = $rowP;
}

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit; 
}

// dd($data);


if(isset($_POST['toggleRole'])) {
  $id = $_POST['id'];
  $role = $_POST['role'];
  $newRole = ($role == 'member') ? 'ScrumMaster' : 'member';
  $sqlUpDate = "UPDATE persons SET Role = '$newRole' WHERE id = $id";

mysqli_query($conn, $sqlUpDate);
header("refresh:0.1"); 
  
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
    <nav class=" fixed flex justify-between bg-[#24698b] text-white w-full">
        <div class="xl:px-11 justify-between flex w-full items-center">
            <a class="text-3xl font-bold font-heading" href="#">
                <img class="h-[70px] logo" src="img/logo.png" alt="logo"></a>
             <!-- Nav Links  -->
            <ul class="hidden md:flex px-10 ml-auto font-semibold font-heading space-x-12 max-md:gap-80 max-md:absolute max-md:right-0 max-md:top-[84px] max-md:bg-gray-950 max-md:h-[400px] max-md:w-[200px]"
                id="nav-links">
                <li class="max-md:my-8"><a class="hover:text-gray-200 max-md:ml-[50px] " href="#">Member</a></li>
                <li class="max-md:my-8"><a class="hover:text-gray-200" href="#">Project</a></li>

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


    <!-- Card -->
    <div class="bg-gray-100 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    
      <?php
      $editId= '';
      $editName = '';
      $editDateStart = '';
      $editDateEnd = '';
      
    if(isset($_POST['submitProject'])) {
    $projectName = $_POST['name_project'];
    $dateS = $_POST['Start_date'];
    $dateE = $_POST['End_date'];

    if($editId){
      $sqlEditProject = "UPDATE projects SET nom ='$editName', date_Debut='$editDateStart', End_date='$editDateEnd' WHERE id = $editId";

      $result = mysqli_query($conn, $sqlEditProject);
      $editId= '';
      $editName = '';
      $editDateStart = '';
      $editDateEnd = '';
    }else{
    $sqlAddProject="INSERT INTO projects (nom, date_Debut, date_Fin )
    VALUES('$projectName','$dateS','$dateE')";

    $result = mysqli_query($conn, $sqlAddProject);
    }

}

if(isset($_POST['editProject'])){
  $editId= $_POST ['idProject'];
  $editName = $_POST['name_project'];
  $editDateStart = $_POST ['Start_date'];
  $editDateEnd =  $_POST ['End_date'];

}
?>
    <div class="my-20 flex justify-center ">
      <form class="w-2/3" method="POST" action="">
    <div class="relative z-0 w-full mb-6 group">
        <input value=<?=$editName?> type="text" name="name_project"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
        <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Neme Project</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input value=<?=$editDateStart?> type="date" name="Start_date"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
        <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Start date </label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input value=<?=$editDateEnd?> type="date" name="End_date"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
        <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">End date </label>
    </div>
    <button type="submit"  name="submitProject" class="text-white bg-[#24698b] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

  </form>

</div>
      <div class="-mx-4 overflow-x-auto sm:-mx-6 my-20 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Projects</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Start date</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">End date</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              <?php
              
              foreach($dataP as $project){
                  ?>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                
                <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  <?=$project['nom']  ?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                  <?=$project['date_Debut']?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                  <?=$project['date_Fin']?>
                </td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <form method="post">
                    <input type="text" name="idProject" value=<?=$project['id']?> class='hidden'>
                    <input type="text" name="name_project" value=<?=$project['nom']?> class='hidden'>
                    <input type="text" name="Start_date" value=<?=$project['date_Debut']?> class='hidden'>
                    <input type="text" name="End_date" value=<?=$project['date_Fin']?> class='hidden'>
                    <button type='submit' name='editProject' class="editButton text-indigo-600 hover:text-indigo-900">Edit</button>
                  </form>
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

      
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    
  <?php
              
            foreach($data as $person){
              if($person['Role'] === 'member'){
                ?>

      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="img/daali.jpg" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">
            <?=$person['Nom'] . " " .  $person['Prenom']?>
          </h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">
                <?=$person['Role']?></span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:<?=$person['Email']?>" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                <span class="ml-3">Email</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:<?=$person['Telephone']?> " class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span class="ml-3">Call</span>
              </a>
            </div>
          </div>
        </div>
      </li>

      <?php
          }
            }
            ?>
      </ul>
            


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
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">phone</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                
              <?php
            foreach($data as $person){
                ?>
                <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  <?=$person['Nom'] . " " .  $person['Prenom']?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                  <?=$person['Telephone']?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                  <?=$person['Email']?>
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?=$person['Role']?></td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <form method="post">
                    <input type="text" name="id" value=<?=$person['id']?> class='hidden'>
                    <input type="text" name="role" value=<?=$person['Role']?> class='hidden'>
                    <button type='submit' name='toggleRole' class="editButton text-indigo-600 hover:text-indigo-900">Edit</button>
                  </form>
                </td>
              </tr>
                  <?php
              }?>

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