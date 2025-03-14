<header>
    <!-- <div class="collapse bg-lavender" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="font-white">About</h4>
                    <p class="font-white">Add some information about the album below, the author, or any other
                        background
                        context. Make it a few sentences long so folks can pick up some informative tidbits. Then,
                        link them off
                        to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <?if(Session::isAuthenticated()) {?>
                        <li><a href="/profile" class="text-white">Edit profile</a></li>
                        <li><a href="/?logout" class="text-white">Logout</a></li>
                        <?} else {?>
                        <li><a href="/login.php" class="text-white">Login</a></li>
                        <?}?>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <div class="navbar navbar-dark bg-lavender shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                    viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
                <strong>Photozard</strong>
            </a>
            <?php if(Session::isAuthenticated()) {?>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div>
                <a href="/profile" class="grey-shining-button">Edit Profile</a>
                <a href="/?logout" class="red-shining-button">Logout</a>
            </div>
            <?php }?>
        </div>
    </div>
</header>