@include('base')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Countires</title>
</head>
<body>
    <h1>Top 3 countries having highest total sales till date</h1>
   <table border="2">
       <tr>
           <th>S No.</th>
           <th>Country</th>
           <th>Total Sales</th>
       </tr>
       @php
        $maxValue = 3;
       @endphp
            @for($i=0; $i<$maxValue; $i++)
                <tr>
                    <td>{{ $i+1}}</td>
                    <td>{{ $countries[$i]->country }}</td>
                    <td>{{ $countries[$i]->totalSale }}</td>
                </tr>
            @endfor
        
   </table>
   <h1>Top 3 countries having lowest total sales till date</h1>
   <table border="2">
       <tr>
           <th>S No.</th>
           <th>Country</th>
           <th>Total Sales</th>
       </tr>
       @php
        $maxValue = 3;
       @endphp
            @for($i=$maxValue; $i>0; $i--)
                <tr>
                    <td>{{ $i+1}}</td>
                    <td>{{ $countries[$i]->country }}</td>
                    <td>{{ $countries[$i]->totalSale }}</td>
                </tr>
            @endfor
        
   </table> 
</body>
</html>