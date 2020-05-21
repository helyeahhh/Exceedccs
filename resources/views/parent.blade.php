<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arvin Espanto</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>

 </head>
 <body>
  <div class="ui container">    
     <br />
     <h3 align="center">Corona Virus Data</h3>
     <br />
     <div>
          <div>
           <h3 class="ui message header">Philippines</h3>
          </div>
          <div class="ui segment">
              @yield('csv_data')
          </div>
      </div>
  </div>
  

 </body>
</html>