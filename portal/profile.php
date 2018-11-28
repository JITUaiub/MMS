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
<title>Profile - MMS</title>
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
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a class="is-active" href="profile.php">Profile</a>
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
                <div class="column is-6 is-offset-1 has-text-centered">
                    <h3 class="title has-text-grey">User Profile</h3>
                    <div class="box ">
                        <div class="control">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><b>Name</b></td>
                                        <td><b>:</b></td>
                                        <td><?php echo $user['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td><b>:</b></td>
                                        <td><?php echo $user['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Meal Manager</b></td>
                                        <td><b>:</b></td>
                                        <td><?php if ($user['manager'] == 'i') {
                                            echo "No";
                                        }else{
                                            echo "Yes";
                                        } ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Account Status</b></td>
                                        <td><b>:</b></td>
                                        <td><?php if ($user['status'] == 'i') {
                                            echo "Inactive";
                                        }else if($user['status'] == 'a'){
                                            echo "Active";
                                        }else{
                                            echo "Active - Admin access";
                                        } ?></td>
                                    </tr>
                                </tbody>
                            </table>
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