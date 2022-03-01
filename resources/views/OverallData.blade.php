<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall Report</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Year</th>
            <th>Petroleum_Product</th>
            <th>Sale</th>
            <th>Country</th>
        </tr>
        @foreach($collection as $data)
            <tr>
                <td>{{ $data['year'] }}</td>
                <td>{{ $data['petroleum_product'] }}</td>
                <td>{{ $data['sale'] }}</td>
                <td>{{ $data['country'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>