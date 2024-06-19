<nav>
    <!-- <a href="index.php" style="text-decoration: none; color: black"><h2>Logo</h2></a> -->
     <div class="logo">
            <?php
            include('./assets/logo-icon.php');
            ?>
     </div>
    <div class="nav_link">
        <a href="create.php">Home</a>
        <a href="read.php">Ticket</a>
        <a  href="update.php">Queue</a>
        <a href="delete.php">Settings</a>
    </div>

    <form action="index.php" method="post">
        <input type="submit"  value="Logout" name="logout">
    </form>
</nav>

<style>
    .logo{
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        background: #000;
        border: 1px solid #9A9A9A40;
        border-radius: 12px;
        height: 50px;
        width: 50px;
    }

</style>

<!-- navbar bg: #151515  -->