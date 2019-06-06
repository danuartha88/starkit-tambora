<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <br>
    <div class="container-fluid">
        <table id="assetreg" class="table table-dark" width="100%" cellspacing="0">
            <thead style="background-color:rgb(8, 6, 142); color:white; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
                <tr>

                    <th>No</th>
                    <th>KKS</th>
                    <th>EQUIPMENT</th>

                </tr>
            </thead>

            <tbody style="background-color:rgb(154, 152, 245);">
                <?php $i = 1; ?>
                <?php
                foreach ($asset as $row) { ?>

                    <tr>

                        <td><?= $i++; ?></td>
                        <td><?= $row['kks']; ?></td>
                        <td><?= $row['equipment']; ?></td>

                    </tr>

                <?php } ?>


            </tbody>
        </table>

    </div>
    <!-- filtering table -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#assetreg').DataTable();
        });
    </script>
    </body>

    </html>

</div>