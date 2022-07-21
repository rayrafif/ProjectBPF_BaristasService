<script src="<?php echo base_url('assets/plugins') ?>/jquery/jquery.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/jquery-ui/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?php echo base_url('assets/plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/sparklines/sparkline.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/daterangepicker/daterangepicker.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/summernote/summernote-bs4.min.js"></script>

<script src="<?php echo base_url('assets/plugins') ?>/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="<?php echo base_url('assets/template/backend/dist') ?>/js/adminlte.js?v=3.2.0"></script>

<script src="<?php echo base_url('assets/template/backend/dist') ?>/js/demo.js"></script>

<script src="<?php echo base_url('assets/template/backend/dist') ?>/js/pages/dashboard.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/template/backend/dist') ?>/js/demo.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/plugins') ?>vendor/chart.js/Chart.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#dataTable').DataTable();
    });
</script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/plugins') ?>js/demo/datatables-demo.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
    $(document).ready(function() {
        $("#jumlah").on('keydown keyup change blur', function() {
            var harga = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
            if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
                reset()
            }
        });

        function reset() {
            $('input[name="jumlah"]').val('')
            $('input[name="total"]').val('')
        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                foreach ($totalb as $data) {
                    echo "'" . $data['coffee'] . "',";
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Coffee Terjual',
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [
                    <?php
                    foreach ($totalb as $data) {
                        echo $data['jum'] . ", ";
                    }
                    ?>
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'coffee'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 20
                    },
                    maxBarThickness: 50,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
        }
    });
</script>