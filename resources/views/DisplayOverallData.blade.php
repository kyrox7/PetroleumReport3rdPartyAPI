<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Data Display</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Year</th>
            <th>Petroleum_Product</th>
            <th>Sale</th>
            <th>Country</th>
        </tr>
        @foreach($totalDataDisplay as $total)
            <tr>
                <td>{{ $total['id'] }}</td>
                <td>{{ $total['year'] }}</td>
                <td>{{ $total['petroleum_product'] }}</td>
                <td>{{ $total['sale'] }}</td>
                <td>{{ $total['country'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>