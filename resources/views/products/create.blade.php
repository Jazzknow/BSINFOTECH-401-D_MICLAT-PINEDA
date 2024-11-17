<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('images/product_logo_tab.png') }}">
</head>

<body>
    <section class="section edit-form bg-black-10" aria-label="create-form">
        <div class="container">
            <p class="section-subtitle label-2 text-center">Create</p>
            <h2 class="section-title headline-1 text-center">New Product</h2>

            <div class="form-container">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="product_name" class="label-2">Product Name</label>
                        <input type="text" name="product_name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="sub_name" class="label-2">Sub-name</label>
                        <input type="text" name="sub_name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="description" class="label-2">Description</label>
                        <textarea name="description" class="form-input" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price" class="label-2">Price</label>
                        <input type="text" name="price" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="photo" class="label-2">Photo</label>
                        <input type="file" name="photo" class="form-input file-input" accept="image/*" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        <a href="{{route('products.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


<style>
    /* Inherit the root variables from your view.blade.php */
    :root {
        --gold-crayola: hsl(38, 61%, 73%);
        --quick-silver: hsla(0, 0%, 65%, 1);
        --smoky-black-1: hsla(40, 12%, 5%, 1);
        --smoky-black-2: hsla(30, 8%, 5%, 1);
        --smoky-black-3: hsla(0, 3%, 7%, 1);
        --eerie-black-1: hsla(210, 4%, 9%, 1);
        --eerie-black-2: hsla(210, 4%, 11%, 1);
        --white: hsla(0, 0%, 100%, 1);
        --white-alpha-20: hsla(0, 0%, 100%, 0.2);
        --white-alpha-10: hsla(0, 0%, 100%, 0.1);

        --fontFamily-forum: "Forum", cursive;
        --fontFamily-dm_sans: "DM Sans", sans-serif;

        --fontSize-label-2: 1.2rem;
        --transition-1: 250ms ease;
        --transition-2: 500ms ease;
    }

    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }



    body {
        background-color: var(--eerie-black-1);
        color: var(--white);
        font-family: var(--fontFamily-dm_sans);
        line-height: 1.5;
    }

    .form-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 40px;
        background-color: var(--smoky-black-2);
        border-radius: 8px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .label-2 {
        display: block;
        margin-bottom: 8px;
        color: var(--gold-crayola);
        font-weight: 500;
    }

    .form-input {
        width: 100%;
        padding: 12px 15px;
        background-color: var(--white-alpha-10);
        border: 1px solid var(--white-alpha-20);
        border-radius: 4px;
        color: var(--white);
        transition: var(--transition-1);
    }

    .form-input:focus {
        border-color: var(--gold-crayola);
        outline: none;
    }

    .file-input {
        padding: 8px;
    }

    .current-photo {
        margin-top: 15px;
    }

    .current-photo img {
        max-width: 200px;
        border-radius: 4px;
    }

    .form-actions {
        display: flex;
        gap: 15px;
        justify-content: flex-end;
        margin-top: 40px;
    }



    .section-subtitle {
        color: var(--gold-crayola);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4em;
        text-align: center;
        margin-bottom: 12px;
    }

    .section-title {
        margin-bottom: 40px;
        text-align: center;
    }
</style>

</html>