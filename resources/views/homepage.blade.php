<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
  <li><a href="{{ route('OverallData') }}">Click Here to Fetch data and store in database</a></li>
</ul>
</body>
</html>