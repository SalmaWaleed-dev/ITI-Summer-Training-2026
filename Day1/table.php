<?php

$students = [
    ["name" => "mahmoud",  "age" => 24],
    ["name" => "nada",     "age" => 26],
    ["name" => "yara",     "age" => 28],
    ["name" => "mohammed", "age" => 22],
];

$headers = array_keys($students[0]); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container mt-5">
    <h3 class="page-title">Students Data</h3>

    <div class="table-wrapper bg-white">
    <table class="table table-hover mb-0">
      <thead class="table-dark">
        <tr>
          <?php foreach ($headers as $head): ?>
            <th><?php echo ucfirst($head); ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
          <tr>
            <?php foreach (array_values($student) as $value): ?>
              <td><?php echo htmlspecialchars($value); ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>