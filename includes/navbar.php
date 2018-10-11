
<nav class="navbar navbar-expand-xl navbar-dark bg-custom fixed-top">
    <div class="container">
        <a class="navbar-brand navTxt" href="index.php">
            <i class="fas fa-camera-retro"> Website Name</i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link navTxt" href="aboutus.php">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link navTxt" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Curation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item navTxt" href="posts.php?cat=weekly">Weekly</a>
                        <a class="dropdown-item navTxt" href="posts.php?cat=monthly">Monthly</a>
                        <a class="dropdown-item navTxt" href="posts.php?cat=yearly">Yearly</a>
                        <a class="dropdown-item navTxt" href="posts.php">All Time</a>
                    </div>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="https://www.facebook.com/" target="_blank" class="nav-link" style="font-size: 2em"> 
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="https://www.instagram.com/" target="_blank" class="nav-link" style="font-size: 2em"> 
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="includes/login.php" class="nav-link" style="font-size: 2em" data-toggle="modal" data-target="#exampleModalCenter"> 
                        <i class="fas fa-poo"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
