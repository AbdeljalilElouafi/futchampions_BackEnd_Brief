<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTBRIEF</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    

    <div class="container">


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
                Forms
            </a>
            
        </nav>
        <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Upgrade to Pro!
        </a>
    </aside>


        <div class="formation-field">

            <div id="player-card1" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">
                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="logos" id="logos">
                    <div class="country-logo">
                        <img src="" alt="">
                    </div>
                    <div class="team-logo">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button class="delete-btn" data-position="LW"><i class='fa fa-trash'></i></button>
                    <button class="modify-btn" data-position="LW"><i class='fa fa-pencil'></i></button>
                </div>
            </div>

            <div id="player-card2" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>
                <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>

            </div>
            <div id="player-card3" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>
                <div class="buttons">
                    <button class="delete-btn" data-position="RW"><i class='fa fa-trash'></i></button>
                    <button class="modify-btn" data-position="RW"><i class='fa fa-pencil'></i></button>
                    </div>

            </div>
            <div id="player-card4" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="LM"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="LM"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card5" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="CM"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="CM"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card6" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="RM"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="RM"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card7" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="LB"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="LB"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card8" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>
                <div class="buttons">
                <button class="delete-btn" data-position="CB"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="CB"><i class='fa fa-pencil'></i></button>
                </div>

            </div>
            <div id="player-card9" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="RCB"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="RCB"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card10" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>

                <div class="buttons">
                <button class="delete-btn" data-position="RB"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="RB"><i class='fa fa-pencil'></i></button>
                </div>
            </div>
            <div id="player-card11" class="player-card">
                <div class="rate-position">
                    <div class="player-rating" id="player-rating">
                        <p></p>
                    </div>
                    <div class="player-position" id="player-position">
                        <p></p>
                    </div>
                </div>
                <div class="player-photo" id="player-photo">
                    <img src="" alt="">
                </div>
                <div class="player-name" id="player-name">
                    <p></p>
                </div>
                <div class="player-stats" id="player-stats">


                    <div class="p-stats">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                    <div class="stats-num">

                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>


                    </div>




                </div>

                <div class="logos" id="logos">

                    <div class="country-logo">

                        <img src="" alt="">

                    </div>

                    <div class="team-logo">

                        <img src="" alt="">
                    </div>

                </div>
                <button class="delete-btn" data-position="GK"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="GK"><i class='fa fa-pencil'></i></button>

            </div>




        </div>


        


    </div>


    <div class="bench">


        <div id="player-card12" class="player-card">
            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>


        </div>
        <div id="player-card13" class="player-card">
            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>
            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card14" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card15" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card16" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card17" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card18" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card19" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card20" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card21" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card22" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>

            <div class="buttons">
                <button class="delete-btn" data-position="ST"><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position="ST"><i class='fa fa-pencil'></i></button>
                </div>
        </div>
        <div id="player-card23" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>
            <div class="buttons">
                <button class="delete-btn" data-position=""><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position=""><i class='fa fa-pencil'></i></button>
                </div>

        </div>
        <div id="player-card24" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>
            <div class="buttons">
                <button class="delete-btn" data-position=""><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position=""><i class='fa fa-pencil'></i></button>
                </div>

        </div>

        <div id="player-card25" class="player-card">

            <div class="rate-position">
                <div class="player-rating" id="player-rating">
                    <p></p>
                </div>
                <div class="player-position" id="player-position">
                    <p></p>
                </div>
            </div>
            <div class="player-photo" id="player-photo">
                <img src="" alt="">
            </div>
            <div class="player-name" id="player-name">
                <p></p>
            </div>
            <div class="player-stats" id="player-stats">


                <div class="p-stats">
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div class="stats-num">

                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p></p>
                    </div>


                </div>




            </div>

            <div class="logos" id="logos">

                <div class="country-logo">

                    <img src="" alt="">

                </div>

                <div class="team-logo">

                    <img src="" alt="">
                </div>

            </div>
            <div class="buttons">
                <button class="delete-btn" data-position=""><i class='fa fa-trash'></i></button>
                <button class="modify-btn" data-position=""><i class='fa fa-pencil'></i></button>
                </div>

        </div>


    </div>

    <script src="./assets/js/script.js"></script>


</body>

</html>