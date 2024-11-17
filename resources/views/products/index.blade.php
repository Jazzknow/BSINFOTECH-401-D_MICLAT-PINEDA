<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP Restaurant - Dashboard</title>
    <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('images/product_logo_tab.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="dashboard-body">
    <!-- Header section similar to landing -->
    <header class="header" data-header>
        <div class="header-container">
            <a href="#" class="logo">
                <img src="{{ asset('images/product_logo.png') }}" style="height: 60px; width: 240px;"
                    alt="MP Restaurant">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#" class="navbar-link hover-underline">Dashboard</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('products.view') }}" class="navbar-link hover-underline">View Product</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('products.create') }}" class="navbar-link hover-underline">Add Product</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link hover-underline">Settings</a>
                    </li>
                </ul>
            </nav>

            <a href="{{ route('products.landing') }}" class="btn btn-secondary">
                <span class="text text-1">View Website</span>
            </a>
        </div>
    </header>

    <!-- Main content -->
    <div class="container">
        <?php if (session('success')): ?>
        <div class="alert alert-success"><?= htmlspecialchars(session('success')) ?></div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Sub-name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $products): ?>
                <tr>
                    <td style="text-align: center;">
                        <img src="{{ asset($products->photo) }}" alt="{{ $products->product_name }}"
                            style="max-width: 100px; height: auto;">
                    </td>
                    <td class="text-center">{{ $products->product_name }}</td>
                    <td class="text-center">{{ $products->sub_name }}</td>
                    <td class="text-center">{{ $products->description }}</td>
                    <td class="text-center">{{ $products->price }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('products.show', $products->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('products.edit', $products->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('products.destroy', $products->id) }}" method="POST"
                            style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    :root {
        /* Colors */
        --gold-crayola: hsl(38, 61%, 73%);
        --quick-silver: hsla(0, 0%, 65%, 1);
        --davys-grey: hsla(30, 3%, 34%, 1);
        --smoky-black-1: hsla(40, 12%, 5%, 1);
        --smoky-black-2: hsla(30, 8%, 5%, 1);
        --smoky-black-3: hsla(0, 3%, 7%, 1);
        --eerie-black-1: hsla(210, 4%, 9%, 1);
        --eerie-black-2: hsla(210, 4%, 11%, 1);
        --white: hsla(0, 0%, 100%, 1);

        /* Typography */
        --fontFamily-forum: "Forum", cursive;
        --fontFamily-dm_sans: "DM Sans", sans-serif;

        /* Spacing */
        --section-space: 70px;
    }

    /* Base Styles */
    .dashboard-body {
        color: var(--white);
        font-family: var(--fontFamily-dm_sans);
        line-height: 1.6;
    }

    table {
        border: 1px solid black;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    table td {
        text-align: center;
    }

    td,
    th {
        text-align: center;
    }

    .container {
        margin-top: 80px;
        overflow-y: auto;
    }

    /* Header Styles */
    .header {
        background-color: var(--eerie-black-2);
        padding: 15px 20px;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 100;
    }

    .navbar {
        margin-right: 70px;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-list {
        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .navbar-link {
        color: var(--white);
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 500;
        transition: color 0.3s;
    }

    .navbar-link:hover {
        color: var(--gold-crayola);
    }

    /* Main Content Styles */
    .dashboard-main {
        padding-top: 120px;
        padding-bottom: var(--section-space);
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .headline-1 {
        color: var(--gold-crayola);
        font-family: var(--fontFamily-forum);
        font-size: 2.5rem;
    }

    /* Table Styles */
    .product-table {
        border-radius: 10px;
        overflow: hidden;
    }

    .table {
        width: 100%;
        color: var(--white);
        margin-bottom: 0;
    }

    .table th {
        background-color: var(--smoky-black-2);
        color: var(--gold-crayola);
        font-family: var(--fontFamily-forum);
        font-weight: bold;
        padding: 15px;
        letter-spacing: 1px;
    }

    .table td {
        padding: 15px;
        vertical-align: middle;
        border-bottom: 1px solid var(--smoky-black-3);
    }

    .product-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
    }

    /* Button Styles */
    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 500;
        text-transform: uppercase;
        transition: all 0.3s;
        border: none;
    }

    .btn-view {
        background-color: var(--gold-crayola);
        color: var(--smoky-black-1);
    }

    .btn-edit {
        background-color: #4CAF50;
        color: white;
    }

    .btn-delete {
        background-color: #f44336;
        color: white;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        background-color: var(--white);
    }

    .delete-form {
        margin: 0;
    }

    /* Alert Styles */
    .alert {
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 5px;
    }

    .alert-success {
        background-color: #4CAF50;
        color: white;
    }

    /* Footer Styles */
    .dashboard-footer {
        background-color: var(--eerie-black-2);
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .copyright {
        color: var(--quick-silver);
        text-align: center;
        margin: 0;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .dashboard-header {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        .action-buttons {
            flex-direction: column;
        }

        .table {
            display: block;
            overflow-x: auto;
        }
    }

    /* Hover Effects */
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .product-img:hover {
        transform: scale(1.1);
        transition: transform 0.3s;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--smoky-black-2);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--gold-crayola);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--quick-silver);
    }
</style>

</html>