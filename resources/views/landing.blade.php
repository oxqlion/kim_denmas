<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Batik World</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add custom styles here */
        body {
            background-color: #f4f4f4;
        }
        .header {
            background-image: url('images/DJIB4444.JPG');
            background-size: cover;
            color: #fff;
            padding: 150px 0;
            text-align: center;
        }
        .header h1 {
            font-size: 3rem;
        }
        .header p {
            font-size: 1.5rem;
        }
        .features {
            padding: 50px 0;
            text-align: center;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/reallogo.png" alt="Company Logo" width="120"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="#">Login as Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    
    
    
    

<!-- Header Section -->
<div class="header">
    <div class="container">
        <h1>Welcome to Our Batik World</h1>
        <p>Discover the beauty and artistry of Indonesian Batik</p>
        <a href="{{ route('katalog') }}" class="btn btn-primary btn-lg">Explore More</a>
    </div>
</div>

<!-- Features Section -->
<div id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-paint-brush feature-icon"></i>
                <h3>Exquisite Designs</h3>
                <p>Explore our collection of intricate and unique batik designs handcrafted with precision.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-globe feature-icon"></i>
                <h3>Indonesian Heritage</h3>
                <p>Discover the rich cultural heritage of Indonesian Batik and its historical significance.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shopping-cart feature-icon"></i>
                <h3>Shop Now</h3>
                <p>Shop for authentic batik products and add a touch of elegance to your wardrobe.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="text-center py-4">
    <p>&copy; 2023 Kim Denmas</p>
</footer>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
