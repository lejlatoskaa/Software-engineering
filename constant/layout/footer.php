<!-- footer -->
           <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #3a4651;
  color: white;
  text-align: center;
}
</style>
             <?php
             include('../constant/connect.php');
            $sql_footer = "select * from manage_website"; 
             $result_footer = $con->query($sql_footer);
             $row_footer = mysqli_fetch_array($result_footer);
             ?>
            
          
        </div>
         
    </div>
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Viti', 'Të ardhurat', 'Antarët', 'Antarët e rinj'],
          ['2023', 900, 300, 300],
          ['2022', 900, 300, 300],
          ['2021', 900, 300, 300],
          ['2020', 900, 300, 300]
        ]);

        var options = {
          chart: {
            title: 'Të dhënat',
            subtitle: 'Të ardhurat, Antarët, antarët e rinj: 2020-2023',
          },
          bars: 'horizontal' 
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <!-- All Jquery -->
    <script src="../assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    
    
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="../assets/js/custom.min.js"></script>


 
</body>

</html>

