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
                <li class="max-md:my-8"><a class="hover:text-gray-200 max-md:ml-[50px] " href="#">Member</a></li>
                <li class="max-md:my-8"><a class="hover:text-gray-200" href="#">Teams</a></li>

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
      
  <div>
    <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Teams</h2>
    <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
      
        <li class="col-span-1 flex shadow-sm rounded-md">
          <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
            GA
          </div>
          <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
            <div class="flex-1 px-4 py-2 text-sm truncate">
              <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Graph API</a>
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
      
        <li class="col-span-1 flex shadow-sm rounded-md">
          <div class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm font-medium rounded-l-md">
            CD
          </div>
          <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
            <div class="flex-1 px-4 py-2 text-sm truncate">
              <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Component Design</a>
              <p class="text-gray-500">12 Members</p>
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
      
        <li class="col-span-1 flex shadow-sm rounded-md">
          <div class="flex-shrink-0 flex items-center justify-center w-16 bg-yellow-500 text-white text-sm font-medium rounded-l-md">
            T
          </div>
          <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
            <div class="flex-1 px-4 py-2 text-sm truncate">
              <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Templates</a>
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


<div class="bg-gray-100 py-10">
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
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">9887320990</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                    </td>
                  </tr>
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Courtney Henry</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">98873234</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">courtney.henry@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Courtney Henry</span></a>
                    </td>
                  </tr>
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Tom Cook</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">9023448390</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">tom.cook@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Tom Cook</span></a>
                    </td>
                  </tr>
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Whitney Francis</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">98430853498</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">whitney.francis@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Whitney Francis</span></a>
                    </td>
                  </tr>
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Leonard Krasner</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">2348985498</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">leonard.krasner@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Leonard Krasner</span></a>
                    </td>
                  </tr>
                
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Floyd Miles</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">4323877854</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">floy.dmiles@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Floyd Miles</span></a>
                    </td>
                  </tr>
                
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