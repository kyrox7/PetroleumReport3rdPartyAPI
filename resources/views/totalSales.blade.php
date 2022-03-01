<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Sales</title>
</head>
<body>
    @php
    $totalPetrol = 0;
    $totalDiesel = 0;
    $totalKerosene = 0;
    $totalATF = 0;
    $totalLDO = 0;
    $totalFO = 0;
    $totalLMT = 0;
    $totalMTO = 0;
    @endphp
@foreach($totalSales as $total)
    <!-- Calculating total price of Petrol -->
    @if($total['petroleum_product'] == 'Petrol')
    @php 
        $totalPetrol += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Diesel -->
    @if($total['petroleum_product'] == 'Diesel')
    @php 
        $totalDiesel += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Kerosene -->
    @if($total['petroleum_product'] == 'Kerosene')
    @php 
        $totalKerosene += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Aviation Turbine Fuel -->
    @if($total['petroleum_product'] == 'Aviation Turbine Fuel')
    @php 
        $totalATF += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Light Diesel Oil -->
    @if($total['petroleum_product'] == 'Light Diesel Oil')
    @php 
        $totalLDO += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Furnace Oil -->
    @if($total['petroleum_product'] == 'Furnace Oil')
    @php 
        $totalFO += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of LPG in MT -->
    @if($total['petroleum_product'] == 'LPG in MT')
    @php 
        $totalLMT += $total['sale']
    @endphp
    @endif

    <!-- Calculating total price of Mineral Turpentine Oil -->
    @if($total['petroleum_product'] == 'Mineral Turpentine Oil')
    @php 
        $totalMTO += $total['sale']
    @endphp
    @endif
@endforeach
<table border="2"> 
    <tr>
        <th>S No.</th>
        <th>Petroleum Product</th>
        <th>Total Sales</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Petrol</td>
        <td>{{ $totalPetrol }}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Diesel</td>
        <td>{{ $totalDiesel }}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Kerosene</td>
        <td>{{ $totalKerosene }}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Aviation Turbine Fuel</td>
        <td>{{ $totalATF }}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Light Diesel Oil</td>
        <td>{{ $totalLDO }}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Furnace Oil</td>
        <td>{{ $totalFO }}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>LPG in MT</td>
        <td>{{ $totalLMT }}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Mineral Turpentine Oil</td>
        <td>{{ $totalMTO }}</td>
    </tr>
</table>
</body>
</html>
