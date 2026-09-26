<!DOCTYPE html>
<html>
<head>
    <title>Food Menu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        .food-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .food-card {
            background: white;
            width: 250px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
        }

        .food-card h2 {
            margin-top: 0;
        }

        .price {
            font-weight: bold;
            color: green;
        }

        .category {
            color: #666;
        }
    </style>
</head>

<body>

    <h1>🍔 Food Menu</h1>

    <div style="text-align: center; margin-bottom: 30px;">
    <a href="/foods/create"
       style="display: inline-block;
              padding: 10px 20px;
              background-color: #222;
              color: white;
              text-decoration: none;
              border-radius: 6px;">
        + Add Food
    </a>
</div>

    @if ($foods->count() > 0)

        <div class="food-container">

            @foreach ($foods as $food)

                <div class="food-card">

                    <h2>{{ $food->name }}</h2>

                    <p class="category">
                        Category: {{ $food->category }}
                    </p>

                    <p>
                        {{ $food->description }}
                    </p>

                    <p class="price">
                        ₱{{ number_format($food->price, 2) }}
                    </p>

                    <p>
                        Available: {{ $food->quantity }}
                    </p>
                        <a href="/foods/{{ $food->id }}/edit">Edit</a>

                                <form action="/foods/{{ $food->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this food?')">
                            Delete
    </button>
</form>
                </div>

            @endforeach

        </div>

    @else

        <p style="text-align: center;">
            No food items available yet.
        </p>

    @endif

</body>
</html>