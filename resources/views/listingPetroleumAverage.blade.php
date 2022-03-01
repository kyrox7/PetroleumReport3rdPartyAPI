<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Total Sale of 4 Year Intervals</title>
</head>
<body>
    @php
        $maxValue = 8;
        $avg7_10 = $avgTotalSale[0];
        $avg11_14 = $avgTotalSale[1];
    @endphp
    <table border = "2">
        <tr>
            <th>Product</th>
            <th>Year</th>
            <th>Avg</th>
        </tr>  
        @for($i=0;$i<$maxValue;$i++)
            <tr>
                <td>{{ $avg7_10[$i]->petroleum_product }}</td>
                <td>2007-2010</td>
                <td>{{ $avg7_10[$i]->avgSale }}</td>
            </tr>
            <tr>
                <td>{{ $avg11_14[$i]->petroleum_product }}</td>
                <td>2011-2014</td>
                <td>{{ $avg11_14[$i]->avgSale }}</td>
            </tr>     
        @endfor
    </table>
</body>
</html>