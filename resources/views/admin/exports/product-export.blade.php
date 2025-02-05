<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Desc</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        {{ $item->category->company_name }}
                    </td>
                    <td>
                        <img src="{{ asset($item->image) }}" width="100">
                    </td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->desc }}</td>
                    <td>{{ $item->status == 1 ? 'Còn hàng' : 'Hết hàng' }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
