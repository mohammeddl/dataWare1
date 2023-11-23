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
            <a class="text-3xl font-bold font-heading" href="index.html">
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

    <div class="bg-gray-100 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       <div class="my-10 ">
        <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#24698b] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Create Project</button>
        <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#24698b] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Edit Project</button>
      </div>
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">ScrumMaster</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
</svg>
                <span class="ml-3">Email</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
</svg>
                <span class="ml-3">Call</span>
              </a>
            </div>
          </div>
        </div>
      </li>
    
      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-8">
          <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
          <h3 class="mt-6 text-gray-900 text-sm font-medium">Cody Fisher</h3>
          <dl class="mt-1 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Title</dt>
            <dd class="text-gray-500 text-sm">Lead Security Associate</dd>
            <dt class="sr-only">Role</dt>
            <dd class="mt-3">
              <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">ScrumMaster</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class="-mt-px flex divide-x divide-gray-200">
            <div class="w-0 flex-1 flex">
              <a href="mailto:codyfisher@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
</svg>
                <span class="ml-3">Email</span>
              </a>
            </div>
            <div class="-ml-px w-0 flex-1 flex">
              <a href="tel:+1-202-555-0114" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                <svg class="w-5 h-5 text-gray-400" x-description="Heroicon name: solid/phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
</svg>
                <span class="ml-3">Call</span>
              </a>
            </div>
          </div>
        </div>
      </li>
      </ul>



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
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Jane Cooper</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">9887320990</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">ScrumMaster</td>
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
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Cody Fisher</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">4323877854</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">floy.dmiles@example.com</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">ScrumMaster</td>
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