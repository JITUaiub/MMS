<?php include 'action/checkSession.php'; ?>
<?php include 'action/getUser.php'; $user = getUser($_SESSION['loggedUser']);?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
<script type="text/javascript">
    function validate(){
        
    }
</script>
<title>Dashboard - MMS</title>
</head>
<body>
    <!-- Top Menu -->
    <div class="block" style="padding-left: 40px; padding-right: 40px">
    <nav class="level">
        <div class="level-left">
            <a href="dashboard.php" class="is-primary"
                style="padding-top: 20px;"><b class="title is-3">
                    <b>Meal Management System<b class="subtitle is-5">Portal</b></b>
                </b></a>
        </div>
        <div class="level-right">
            <div style="padding-top: 30px;">Logged In as &nbsp;</div>
            <a href="profile.php" style="padding-top: 30px;"
                class="is-block is-primary is-large is-inverted"><b><?php echo $user['name']; ?></b></a>
            <div style="padding-top: 30px; padding-right: 60px;">
                &nbsp;·&nbsp;<a href="logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div>
        <hr size="2" />
    </div>
</div>
    <!-- Body -->
    <section class="hero ">
        <div class="hero-body">
            <div class="columns">
                <!-- Left Menu -->
                <div class="column is-3" style="padding-left: 40px;">
                <aside class="menu">
                    <p class="menu-label">General</p>
                    <ul class="menu-list">
                        <li><a class="is-active" href="/SharkToothCC/user/dashboard">Dashboard</a></li>
                        <li><a href="profile.php">Profile</a>
                            <ul>
                                <li><a href="/SharkToothCC/user/profile/edit">Edit Profile</a></li>
                                <li><a href="/SharkToothCC/user/profile/changePassword">Change Password</a></li>
                            </ul></li>
                    </ul>
                    <p class="menu-label">Scores</p>
                    <ul class="menu-list">
                        <li><a>Personal Scores</a>
                        <li><a>Guild Scores</a>
                    </ul>
                    <p class="menu-label">Reports</p>
                    <ul class="menu-list">
                        <li><a>Guild Wars</a></li>
                        <li><a>Torch Battle</a></li>
                        <li><a>Fortress Feud</a></li>
                    </ul>
                    <p class="menu-label">Gameplay &amp; Issues</p>
                    <ul class="menu-list">
                        <li><a>Hero Review</a></li>
                        <li><a>Game Mode Review</a></li>
                        <li><a>Others</a></li>
                        <li><a>Poll</a></li>
                    </ul>
                    <p class="menu-label">Manage Team</p>
                    <ul class="menu-list">
                        <li><a>Upload Scores</a></li>
                        <li><a>Update Scores</a></li>
                        <li><a>Create New Review</a></li>
                        <li><a>Create new Poll</a></li>
                    </ul>
                    <p class="menu-label">Public Relation</p>
                    <ul class="menu-list">
                        <li><a>Reply Query From Public</a></li>
                        <li><a>Feedback</a></li>
                    </ul>
                    <p class="menu-label">Administration</p>
                    <ul class="menu-list">
                        <li><a>Pending Account Action</a></li>
                        <li><a>Block/Unblock User</a></li>
                        <li><a>User Access Settings</a></li>
                    </ul>

                    

                </aside>
            </div>

                <div class="column is-9" style="padding-right: 40px;">
                <div class="block">
                            <div class="notification is-warning">Your account seems
                                inactive. Please contact Guild admin to use all features , or you can wait until
                                they make your account active.</div>
                        </div>
                    <section class="hero is-info welcome is-small">
                        
                        <div class="hero-body">
                            <div class="container">
                                <h1 class="title" style="padding-left: 20px">Hello,
                                    ${loggedUser.name }.</h1>
                                <h2 class="subtitle" style="padding-left: 20px">I hope you
                                    are having a great day!</h2>
                            </div>
                        </div>
                    </section>
                    <section class="info-tiles"
                        style="padding-top: 20px; padding-bottom: 20px;">
                        <div class="tile is-ancestor has-text-centered">
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">
                                        <a href="#">0</a>
                                    </p>
                                    <p class="subtitle">Joining Request</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">
                                        <a href="#">3</a>
                                    </p>
                                    <p class="subtitle">Scores Added</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">
                                        <a href="#">5</a>
                                    </p>
                                    <p class="subtitle">Query From Public</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">
                                        <a href="#">1</a>
                                    </p>
                                    <p class="subtitle">Score Update Request</p>
                                </article>
                            </div>
                        </div>
                    </section>
                    <div class="columns">
                        <div class="column is-6">
                            <div class="card events-card">
                                <header class="card-header">
                                    <p class="card-header-title">Notifications</p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                                        <span class="icon"> <i class="fa fa-angle-down"
                                            aria-hidden="true"></i>
                                    </span>
                                    </a>
                                </header>
                                <div class="card-table">
                                    <div class="content">
                                        <table class="table is-fullwidth is-striped">
                                            <tbody>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>ABC changed his username</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>New Guild Wars Score Added</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>XYZ claimed his scores are wrong.</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <a href="#" class="card-footer-item">View All</a>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">User Search</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input is-large" placeholder="username"
                                                type="text"> <span class="icon is-medium is-left">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">User Details</p>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <table class="table is-striped">
                                            <tbody>
                                                <tr>
                                                    <td><b>Name</b></td>
                                                    <td>Md. Nashid Kamal</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Might</b></td>
                                                    <td>102354</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Donation</b></td>
                                                    <td>45684</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Average Guild Wars Score</b></td>
                                                    <td>3456</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Overall Performance</b></td>
                                                    <td>Good</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Torch Battle Haul</b></td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Last Fortress Feud Score</b></td>
                                                    <td>125</td>
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

        </div>
    </section>
    <!-- Footer -->
    <div class="block">
        <div class="box is-green">
            <div class="columns is-centered">
                Developed by - <a href="https://www.facebook.com/nashid.jitu">Md. Nashid Kamal (Jitu)</a>
            </div>
        </div>

    </div>
    <div style="margin-top: 50px"></div>
</body>
</html>