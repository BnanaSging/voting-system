<?php
  // index.php
  $cards = [
      ['title' => 'user', 'description' => 'Description for Card 1', 'link' => 'page1.php'],
      ['title' => 'vote result', 'description' => 'Description for Card 2', 'link' => 'page2.php'],
      ['title' => 'candidates', 'description' => 'Description for Card 3', 'link' => 'page3.php']
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            cursor: pointer;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
            text-align: center;
        }
    </style>
</head>
<body>
    

<div class="container mt-5">
    <div class="row">
        <?php foreach ($cards as $card): ?>
            <div class="col-md-4 mb-4">
                <div class="card" onclick="window.location.href='<?php echo $card['link']; ?>'">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $card['title']; ?></h5>
                        <p class="card-text"><?php echo $card['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
