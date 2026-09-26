<!DOCTYPE html>
<html>
<head>
    <title>Edit Food</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>✏️ Edit Food</h1>

    <form action="/foods/{{ $food->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Food Name</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ $food->name }}"
        >

        <label for="category">Category</label>
        <input
            type="text"
            id="category"
            name="category"
            value="{{ $food->category }}"
        >

        <label for="price">Price</label>
        <input
            type="number"
            id="price"
            name="price"
            step="0.01"
            value="{{ $food->price }}"
        >

        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
        >{{ $food->description }}</textarea>

        <label for="quantity">Quantity</label>
        <input
            type="number"
            id="quantity"
            name="quantity"
            value="{{ $food->quantity }}"
        >

        <button type="submit">
            Save Changes
        </button>

    </form>

    <a href="/foods" class="back">
        ← Back to Food Menu
    </a>

</div>

</body>
</html>