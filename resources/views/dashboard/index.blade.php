<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data Corona</title>
  </head>
  <body>
  <div class="container">
      <div class="row mt-5">
          <div class="col">
            <div class="card" style="height: 190px;">
                <div class="card-header">
                  Positif
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <p>{{ $data['data_i'][0]['positif'] }}</p>
                    <footer class="blockquote-footer">Jumlah orang yang terkena corona</footer>
                  </blockquote>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="height: 190px;">
                <div class="card-header">
                  Sembuh
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <p>{{ $data['data_i'][0]['sembuh'] }}</p>
                    <footer class="blockquote-footer">Jumlah orang yang sudah sembuh dari corona</footer>
                  </blockquote>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="height: 190px;">
                <div class="card-header">
                  Meninggal
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <p>{{ $data['data_i'][0]['meninggal'] }}</p>
                    <footer class="blockquote-footer">Jumlah orang menginggal karena corona</footer>
                  </blockquote>
                </div>
              </div>
          </div>
      </div>
      <div class="row mt-5">
          <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data['data'] as $dc)
                        <tr>
                        <th scope="row">1</th>
                        <td>{{ $dc['attributes']['Provinsi'] }}</td>
                        <td>{{ $dc['attributes']['Kasus_Posi'] }}</td>
                        <td>{{ $dc['attributes']['Kasus_Semb'] }}</td>
                        <td>{{ $dc['attributes']['Kasus_Semb'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>