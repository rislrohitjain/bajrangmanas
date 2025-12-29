<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) { header("Location: index.php"); exit; }

// Using the same credentials from your front-end
$host = "localhost"; $user = "Admin"; $pass = "Admin@123"; $dbname = "bajrang_manas";
$conn = new mysqli($host, $user, $pass, $dbname);

$sql = "SELECT * FROM contact_inquiries ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">श्री बजरंग मानस सेवा मण्डल समिति Admin</a>
        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0">Recent Bookings/Inquiries: हालिया बुकिंग / पूछताछ/ हाल की बुकिंग</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Event Details / Message</th>
                                <th>Date Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo nl2br($row['message']); ?></td>
                                <td><small class="text-muted">
									<?php 
									$raw_date = $row['created_at'];
									$date = new DateTime($raw_date);

									echo $date->format('F j, Y, g:i a');

									?> 
									</small></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>