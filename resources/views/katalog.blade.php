<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Catalog | Kim Denmas</title>
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
        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .product-card img {
            max-width: 100%;
            border-radius: 5px;
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
                    <a class="btn btn-primary" href="{{ route('login') }}">Login as Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<div class="header">
    <div class="container">
        <h1>Browse Our Exquisite Batik Collection</h1>
        <p>Explore a world of elegance and tradition</p>
    </div>
</div>

<!-- Catalog Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/20220205_104858-removebg-preview.png" alt="Batik Product 1">
                <h3>Stylish Batik Hand Bag</h3>
                <p>Handcrafted with precision, this beautiful batik Hand Bag showcases Indonesian artistry.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/20220205_104915-removebg-preview.png" alt="Batik Product 2">
                <h3>Stylish Batik Hand Bag</h3>
                <p>Wrap yourself in luxury with this exquisite Batik Hand Bag, perfect for any occasion.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/20220205_104929-removebg-preview.png" alt="Batik Product 3">
                <h3>Stylish Batik Hand Bag</h3>
                <p>Carry your essentials in style with this handcrafted batik bag.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/Katalog_1.jpg" alt="Batik Product 1">
                <h3>Jayabaya Agung Pattern</h3>
                <p>Extremely elegant hand painted batik</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/Katalog_2.jpg" alt="Batik Product 2">
                <h3>Turangga Langen Beksa Pattern</h3>
                <p>Extremely elegant hand painted batik.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/Katalog_3.jpg" alt="Batik Product 3">
                <h3>Tirta Kamandanu Pattern</h3>
                <p>Extremely elegant hand painted batik</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/wayang.jpg" alt="Batik Product 1">
                <h3>Wayang From local Artisans</h3>
                <p>made with premium ox leather</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="images/wayangkayu.jpg" alt="Batik Product 2">
                <h3>Kucingan Kayu Waru</h3>
                <p>Handcrafted using premium ox leather.</p>
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
