

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse justify-content-space-between container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"><i id="logo" class="fas fa-paw pr-2"></i>Paws to Care</a>
            </div>
            <ul class="navbar-nav">
            <?php if(isAdmin()) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/adminHome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminContact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminAbout.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dogs.php">Dogs</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/admin/cats.php">Cats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/exotics.php">Exotics</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php">About</a>
                </li>
                
            <?php endif; ?>
            <?php if(isLoggedIn()): ?>
                <?php if(!isAdmin()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/ownerPets.php" ><span>My Pets</span></a>
                    </li>
                <?php endif; ?>
                <li class="nav-item" id="loginLink">
                    <a class="nav-link" href="/logout.php" ><i id="loginIcon" class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                </li>

            <?php else: ?>
                 <li class="nav-item" id="loginLink">
                    <a class="nav-link" href="/login.php" ><i id="loginIcon" class="fas fa-sign-in-alt"></i><span>Login</span></a>
                </li>
            <?php endif; ?>

            </ul>
        </div>

    </nav>