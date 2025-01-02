<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeArt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <header class="bg-dark text-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>TradeArt</h1>
                    <p>Select your art</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="btn btn-outline-light"><i class="fas fa-shopping-cart"></i> Cart</a>
                    <a href="#" class="btn btn-outline-light"><i class="fas fa-user"></i></a> 
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <div class="row">
                <?php
                // ข้อมูลสินค้า (ตัวอย่าง)
                $products = [
                    [
                        'image' => 'assets/1.png',
                        'name' => 'Art1',
                        'price' => '#',
                       
                        'sale' => false,
                    ],
                    [
                        'image' => 'assets/2.png',
                        'name' => 'Art2',
                        'price' => '#',
                        
                        'sale' => false,
                    ],
                    [
                        'image' => 'assets/3.png',
                        'name' => 'Art3',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art4',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art5',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art6',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art7',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art8',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art4',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art5',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art6',
                        'price' => '#',
                      
                        'sale' => true,
                    ],
                    [
                        'image' => 'https://via.placeholder.com/450x300',
                        'name' => 'Art7',
                        'price' => '#',
                      
                        'sale' => true,
                    ]
                    // ... เพิ่มสินค้าอื่นๆ ...
                ];

                // วนลูปแสดงสินค้า
                foreach ($products as $product) {
                    echo '<div class="col-md-3 mb-4">';
                    echo '<div class="card ' . ($product['sale'] ? 'sale' : '') . '">'; 
                    echo '<img src="' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $product['name'] . '</h5>';
                    echo '<p class="card-text">' . $product['price'] . '</p>';
                    echo '<div class="rating">';
                    for ($i = 0; $i < $product['rating']; $i++) {
                        echo '<i class="fas fa-star text-warning"></i>';
                    }
                    echo '</div>';
                    echo '<a href="#" class="btn btn-primary">Add to cart</a>';
                    echo '</div>'; 
                    echo '</div>'; 
                    echo '</div>'; 
                }
                ?>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light py-3"> 
  <div class="container text-center"> 
    <p>&copy; 2023 My Website</p> 
  </div>
</footer>
</body>
</html>