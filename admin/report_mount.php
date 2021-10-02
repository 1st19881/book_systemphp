<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $query = "
            SELECT DATE_FORMAT(date, '%M-%Y') AS date,SUM(price) AS total        
            FROM transection
            WHERE 	status_book IN(2)
            GROUP BY DATE_FORMAT(date, '%Y-%m')
            ORDER BY DATE_FORMAT(date, '%Y-%m') DESC
            ";
            $result = mysqli_query($conn, $query);
            $resultchart = mysqli_query($conn, $query);
            //for chart
            $date = array();
            $total = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $date[] = "\"".$rs['date']."\"";
            $total[] = "\"".$rs['total']."\"";

            // echo '<hr>';
            // echo $rs['total'].',';
            

            }
            $date = implode(",", $date);
            $total = implode(",", $total);
            
            // echo $total;

            ?>
            <h3 align="center">รายงานยอดฝากขายรายเดือน</h3>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js">
            </script>
            <hr>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="300px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $date;?>

                        ],
                        datasets: [{
                            label: 'รายงานยอดฝากขาย แยกตามเดือน (บาท)',
                            data: [<?php echo $total;?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </p>
            <div class="col-sm-12">
                <h3>รายการ</h3>
                <table class=" table table-bordered" border="1" cellpadding="0" cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="20%">เดือน</th>
                            <th width="10%">
                                <center>ยอดฝากขาย</center>
                            </th>
                        </tr>
                    </thead>


                    <?php 
                $price=0;
					while($row2 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row2['date'];?></td>
                        <td align="right"><?php echo number_format($row2['total'],2);?></td>
                    </tr>
                    <?php $price += $row2['total'];
                } ?>
                    <tr class=" table-danger">
                        <td align="center">รวม</td>
                        <td align="right"><b>
                                <?php echo number_format($price,2);?></b></td>
                        </td>
                    </tr>
                </table>
            </div>
            <?php mysqli_close($conn);?>
        </div>
    </div>
</div>