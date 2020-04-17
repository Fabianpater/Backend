<?php
require 'themplate.php';
?>
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Orders</h3>

        </div>
        <div class="card-body">
            <?php
require 'orders/index.php';
?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<?php
require 'themfooter.php';
?>
