<?php

require_once 'includes/functions.php';

$players = display_players();
$countries = display_countries();
$clubs = display_clubs();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futchampions Dashboard</title>
    <meta name="author" content="AbdeljalilElouafi">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <a href="forms.php" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Add Player
            </a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Players
            </a>
            
            <a href="field.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Field
            </a>
            <a href="forms.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Player Form
            </a>
            <a href="nationalities.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Nationality Form
            </a>
            <a href="clubs.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Club Form
            </a>
            
        </nav>
        <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Upgrade to Pro!
        </a>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Players
                </a>
                
                <a href="field.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Field
                </a>
                <a href="forms.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
    
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Players
                    </p>
                    <div class="bg-white overflow-auto"> 
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white ">
                                <tr>
                                    <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Player ID</th>
                                    <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Photo</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Position</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">rating</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">pace</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">shooting</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">passing</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">dribbling</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">defending</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">physical</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            
                         <?php    foreach( $players as $row ) : ?>
                                        <tr>
                                            <td class='w-1/8 text-left py-3 px-4'><?=($row['player_id'])?></td>
                                            <td class='w-1/8 text-left py-3 px-4'><?=($row['player_name'])?></td>
                                            <td class='w-1/8 text-left py-3 px-4'>
                                            <img src="assets/img/playerIMG/<?= ($row['photo_url']) ?>" alt="Player Photo"
                                                      class="rounded-full h-15 w-15">
                                            </td>
                                            <td class='text-left py-3 px-4'><?=($row['player_position'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['rating'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['pace'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['shooting'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['passing'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['dribbling'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['defending'])?></td>
                                            <td class='text-left py-3 px-4'><?=($row['physical'])?></td>
                                            <td class='flex'>
                                                    <a href='/futchampions_BackEnd_Brief/edit.php?id=<?=($row['player_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2'>Edit</a>
                                                    <a href='/futchampions_BackEnd_Brief/delete.php?id=<?=($row['player_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2'>Delete</a>
                                            </td>
                                        </tr>
                                        
                                    
                                    <?php endforeach; ?>


                                <!-- <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                    <td class="flex">
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Edit</button>
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">delete</button>
                                    </td>
                                </tr> -->
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Countries
                    </p>
                    <div class="bg-white overflow-auto"> 
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white ">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Country ID</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Country</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Flag</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            
                         <?php    foreach( $countries as $row ) : ?>
                                        <tr>
                                            <td class='w-1/3 text-left py-3 px-4'><?=($row['country_id'])?></td>
                                            <td class='w-1/3 text-left py-3 px-4'><?=($row['country_name'])?></td>
                                            <td class='w-1/8 text-left py-3 px-4'>
                                            <img src="assets/img/ar.webp"
                                            class="rounded-full h-8 w-8"> 
                                            </td>                                            <td class='flex'>
                                                    <a href='/futchampions_BackEnd_Brief/edit.php?id=<?=($row['country_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2'>Edit</a>
                                                    <a href='/futchampions_BackEnd_Brief/delete.php?id=<?=($row['country_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2'>Delete</a>
                                            </td>
                                        </tr>
                                        
                                    
                                    <?php endforeach; ?>


                                <!-- <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                    <td class="flex">
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Edit</button>
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">delete</button>
                                    </td>
                                </tr> -->
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Clubs
                    </p>
                    <div class="bg-white overflow-auto"> 
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white ">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Club ID</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Club</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Logo</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            
                         <?php    foreach( $clubs as $row ) : ?>
                                        <tr>
                                            <td class='w-1/8 text-left py-3 px-4'><?=($row['club_id'])?></td>
                                            <td class='w-1/8 text-left py-3 px-4'><?=($row['club_name'])?></td>
                                            <td class='w-1/8 text-left py-3 px-4'>
                                            <img src="assets/img/120.webp"
                                            class="rounded-full h-8 w-8"> 
                                            </td>                                            <td class='flex'>
                                                    <a href='/futchampions_BackEnd_Brief/edit.php?id=<?=($row['club_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2'>Edit</a>
                                                    <a href='/futchampions_BackEnd_Brief/delete.php?id=<?=($row['club_id'])?>' class='mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2'>Delete</a>
                                            </td>
                                        </tr>
                                        
                                    
                                    <?php endforeach; ?>


                                <!-- <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                    <td class="flex">
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-green-600 px-8 py-3 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Edit</button>
                                    <button type="submit" class="mt-10 flex w-10 items-center justify-center rounded-md border border-transparent bg-red-600 px-8 py-3 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">delete</button>
                                    </td>
                                </tr> -->
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
            Built by <a target="_blank" href="https://github.com/AbdeljalilElouafi" class="underline">AbdeljalilElouafi</a>.
            </footer>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>