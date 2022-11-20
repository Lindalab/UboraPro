<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ticket</td>
      <td>$150</td>
      <td>
        <ul style="list-style-type: none" class="d-flex ms-0">
            <li>
                <button class="btn btn-warning">Change option</button>
            </li>
            <li class="mx-5">
                <button class="btn btn-danger">Remove</button>
            </li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>