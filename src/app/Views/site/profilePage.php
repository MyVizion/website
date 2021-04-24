<?php
    include_once "header.php"; // late in ci controller
?> 

<link rel="stylesheet" href="css/profilePage.css">
<link rel="shortcut icon" href="#" type="image/x-icon">
<link rel="stylesheet" href="css/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a8f313f46f.js" crossorigin="anonymous"></script>
<script src="js/darkMode.js"></script>


<main>
    <button id = "DarkMode" onclick="DarkMode()">darkMode</button>

    <section id="wrapper" class="container p-5">
        <section class="row">
                <section class="col middle"> <!-- this the profile section -->
                    <div class = "trim">
                        <img class="img-fluid profileImage"src="testImg.jpg" alt="porfile Picture" class = "profilePic h-50 img-thumbnail">
                    </div>
                </section>
                <section class="col">
                    <h1 class = "userName"><?= $username ?></h1>
                    <button id="addFriendBtn" onClick = "<?= base_url(); ?> ProfileFrom">Edit Profile</button>
                </section>
                <section class="col">
                    <table> <!-- table with User info for other users to see -->
                        <tr>
                            <td>age</td>
                            <td id="tableData"><?= $age ?></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td id="tableData"><?= $Location ?></td>
                        </tr>
                        <tr>
                            <td>University</td>
                            <td id="tableData"><?= $Uni ?></td>
                        </tr>
                        <tr>
                            <td>Study program</td>
                            <td id="tableData"><?= $studyProgram ?></td>
                        </tr>
                    </table>
                
                    <ul class = "socialsList list-inline"> <!-- List of socials -->
                        <?= $socials ?>
                    </ul>
                </section>
            </section>
        </section>
    </section>
    <!-- about -->
    <section id = "wrapper" class  = "container mt-5 p-1">
        <section class = "row">
            <section class = "col">
                <h3>About</h3>
                <?= $about ?>
            </section>
        </section>
    </section>
<?php
    include_once "cookies.php"; // late in ci controller
?> 

</main>