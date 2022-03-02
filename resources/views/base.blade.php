<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base File</title>
    <style>
      table{
        margin-left:50;
      }
       ul {
  list-style-type: none;
  margin: 0;
  margin-bottom: 30;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
    </style>
</head>
<body>
<ul>
  <li><a href="{{ route('OverallData') }}">Viewing Overall Data</a></li>  
  <li><a href="{{ route('ListingTotalSales') }}">Total Sales of Each Petroleum Product</a></li>
  <li><a href="{{ route('ListingCountries') }}">Top 3 Countries according to Petroleum Product</a></li>
  <li><a href="{{ route('ListingPetroleumAverage') }}">Average sales of each petroleum product</a></li>
</ul>
</body>
</html>