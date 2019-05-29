<div class="row">
    <div class="col-lg-3">
        <h3><?= $title; ?></h3>
        <h5>Tanggal : <?= $tgl['tanggal']; ?></h5>
    </div>
    <div class="col-lg-6">
        <form class="form-group" action="<?= base_url('pembangkit/labuhan'); ?>" method="post">
            <table>
                <th>Cari Data : </th>
                <td><input class="form-control" type="date" name="tanggal"></td>
                <td><button class="form-control btn btn-sm btn-primary">GO</button></td>
            </table>
        </form>
    </div>

</div>

<div class="table table-responsive">
    <table class="table table-bordered display" id="user_data" style="font-size: 12px;">
        <thead>
            <tr class="table-success">
                <th>Unit</th>
                <th>Mesin</th>
                <th>01:00</th>
                <th>02:00</th>
                <th>03:00</th>
                <th>04:00</th>
                <th>05:00</th>
                <th>06:00</th>
                <th>07:00</th>
                <th>08:00</th>
                <th>09:00</th>
                <th>10:00</th>
                <th>11:00</th>
                <th>12:00</th>
                <th>13:00</th>
                <th>14:00</th>
                <th>15:00</th>
                <th>16:00</th>
                <th>17:00</th>
                <th>18:00</th>
                <th>19:00</th>
                <th>20:00</th>
                <th>21:00</th>
                <th>22:00</th>
                <th>23:00</th>
                <th>24:00</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> 1. </th>
                <td>RUSTON</td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="satu"><?= $ruston1['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="dua"><?= $ruston1['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="tiga"><?= $ruston1['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="empat"><?= $ruston1['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="lima"><?= $ruston1['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="enam"><?= $ruston1['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="tujuh"><?= $ruston1['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="delapan"><?= $ruston1['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="sembilan"><?= $ruston1['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="sepuluh"><?= $ruston1['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="sebelas"><?= $ruston1['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duabelas"><?= $ruston1['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="tigabelas"><?= $ruston1['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="empatbelas"><?= $ruston1['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="limabelas"><?= $ruston1['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="enambelas"><?= $ruston1['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="tujuhbelas"><?= $ruston1['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="delapanbelas"><?= $ruston1['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="sembilanbelas"><?= $ruston1['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duanol"><?= $ruston1['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duasatu"><?= $ruston1['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duadua"><?= $ruston1['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duatiga"><?= $ruston1['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $ruston1['id']; ?>" data-column_name="duaempat"><?= $ruston1['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 2. </th>
                <td>SWD</td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="satu"><?= $swd2['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="dua"><?= $swd2['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="tiga"><?= $swd2['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="empat"><?= $swd2['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="lima"><?= $swd2['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="enam"><?= $swd2['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="tujuh"><?= $swd2['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="delapan"><?= $swd2['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="sembilan"><?= $swd2['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="sepuluh"><?= $swd2['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="sebelas"><?= $swd2['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duabelas"><?= $swd2['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="tigabelas"><?= $swd2['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="empatbelas"><?= $swd2['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="limabelas"><?= $swd2['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="enambelas"><?= $swd2['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="tujuhbelas"><?= $swd2['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="delapanbelas"><?= $swd2['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="sembilanbelas"><?= $swd2['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duanol"><?= $swd2['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duasatu"><?= $swd2['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duadua"><?= $swd2['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duatiga"><?= $swd2['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $swd2['id']; ?>" data-column_name="duaempat"><?= $swd2['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 3. </th>
                <td>DAIHATSU</td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="satu"><?= $daihatsu3['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="dua"><?= $daihatsu3['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="tiga"><?= $daihatsu3['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="empat"><?= $daihatsu3['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="lima"><?= $daihatsu3['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="enam"><?= $daihatsu3['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="tujuh"><?= $daihatsu3['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="delapan"><?= $daihatsu3['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="sembilan"><?= $daihatsu3['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="sepuluh"><?= $daihatsu3['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="sebelas"><?= $daihatsu3['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duabelas"><?= $daihatsu3['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="tigabelas"><?= $daihatsu3['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="empatbelas"><?= $daihatsu3['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="limabelas"><?= $daihatsu3['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="enambelas"><?= $daihatsu3['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="tujuhbelas"><?= $daihatsu3['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="delapanbelas"><?= $daihatsu3['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="sembilanbelas"><?= $daihatsu3['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duanol"><?= $daihatsu3['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duasatu"><?= $daihatsu3['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duadua"><?= $daihatsu3['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duatiga"><?= $daihatsu3['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $daihatsu3['id']; ?>" data-column_name="duaempat"><?= $daihatsu3['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 4. </th>
                <td>DEUTZ</td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="satu"><?= $deutz4['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="dua"><?= $deutz4['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="tiga"><?= $deutz4['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="empat"><?= $deutz4['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="lima"><?= $deutz4['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="enam"><?= $deutz4['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="tujuh"><?= $deutz4['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="delapan"><?= $deutz4['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="sembilan"><?= $deutz4['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="sepuluh"><?= $deutz4['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="sebelas"><?= $deutz4['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duabelas"><?= $deutz4['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="tigabelas"><?= $deutz4['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="empatbelas"><?= $deutz4['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="limabelas"><?= $deutz4['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="enambelas"><?= $deutz4['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="tujuhbelas"><?= $deutz4['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="delapanbelas"><?= $deutz4['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="sembilanbelas"><?= $deutz4['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duanol"><?= $deutz4['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duasatu"><?= $deutz4['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duadua"><?= $deutz4['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duatiga"><?= $deutz4['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz4['id']; ?>" data-column_name="duaempat"><?= $deutz4['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 5. </th>
                <td>DEUTZ</td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="satu"><?= $deutz5['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="dua"><?= $deutz5['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="tiga"><?= $deutz5['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="empat"><?= $deutz5['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="lima"><?= $deutz5['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="enam"><?= $deutz5['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="tujuh"><?= $deutz5['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="delapan"><?= $deutz5['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="sembilan"><?= $deutz5['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="sepuluh"><?= $deutz5['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="sebelas"><?= $deutz5['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duabelas"><?= $deutz5['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="tigabelas"><?= $deutz5['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="empatbelas"><?= $deutz5['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="limabelas"><?= $deutz5['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="enambelas"><?= $deutz5['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="tujuhbelas"><?= $deutz5['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="delapanbelas"><?= $deutz5['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="sembilanbelas"><?= $deutz5['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duanol"><?= $deutz5['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duasatu"><?= $deutz5['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duadua"><?= $deutz5['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duatiga"><?= $deutz5['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $deutz5['id']; ?>" data-column_name="duaempat"><?= $deutz5['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 6. </th>
                <td>NIIGATA</td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="satu"><?= $niigata6['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="dua"><?= $niigata6['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="tiga"><?= $niigata6['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="empat"><?= $niigata6['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="lima"><?= $niigata6['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="enam"><?= $niigata6['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="tujuh"><?= $niigata6['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="delapan"><?= $niigata6['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="sembilan"><?= $niigata6['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="sepuluh"><?= $niigata6['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="sebelas"><?= $niigata6['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duabelas"><?= $niigata6['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="tigabelas"><?= $niigata6['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="empatbelas"><?= $niigata6['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="limabelas"><?= $niigata6['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="enambelas"><?= $niigata6['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="tujuhbelas"><?= $niigata6['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="delapanbelas"><?= $niigata6['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="sembilanbelas"><?= $niigata6['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duanol"><?= $niigata6['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duasatu"><?= $niigata6['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duadua"><?= $niigata6['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duatiga"><?= $niigata6['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $niigata6['id']; ?>" data-column_name="duaempat"><?= $niigata6['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 7. </th>
                <td>ALLEN</td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="satu"><?= $allen7['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="dua"><?= $allen7['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="tiga"><?= $allen7['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="empat"><?= $allen7['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="lima"><?= $allen7['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="enam"><?= $allen7['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="tujuh"><?= $allen7['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="delapan"><?= $allen7['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="sembilan"><?= $allen7['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="sepuluh"><?= $allen7['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="sebelas"><?= $allen7['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duabelas"><?= $allen7['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="tigabelas"><?= $allen7['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="empatbelas"><?= $allen7['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="limabelas"><?= $allen7['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="enambelas"><?= $allen7['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="tujuhbelas"><?= $allen7['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="delapanbelas"><?= $allen7['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="sembilanbelas"><?= $allen7['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duanol"><?= $allen7['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duasatu"><?= $allen7['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duadua"><?= $allen7['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duatiga"><?= $allen7['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $allen7['id']; ?>" data-column_name="duaempat"><?= $allen7['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 8. </th>
                <td>ALLEN</td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="satu"><?= $allen8['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="dua"><?= $allen8['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="tiga"><?= $allen8['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="empat"><?= $allen8['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="lima"><?= $allen8['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="enam"><?= $allen8['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="tujuh"><?= $allen8['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="delapan"><?= $allen8['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="sembilan"><?= $allen8['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="sepuluh"><?= $allen8['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="sebelas"><?= $allen8['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duabelas"><?= $allen8['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="tigabelas"><?= $allen8['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="empatbelas"><?= $allen8['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="limabelas"><?= $allen8['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="enambelas"><?= $allen8['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="tujuhbelas"><?= $allen8['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="delapanbelas"><?= $allen8['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="sembilanbelas"><?= $allen8['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duanol"><?= $allen8['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duasatu"><?= $allen8['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duadua"><?= $allen8['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duatiga"><?= $allen8['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $allen8['id']; ?>" data-column_name="duaempat"><?= $allen8['duaempat']; ?></td>

            </tr>
            <tr>
                <th> 9. </th>
                <td>CATERPILAR</td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="satu"><?= $caterpilar9['satu']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="dua"><?= $caterpilar9['dua']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="tiga"><?= $caterpilar9['tiga']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="empat"><?= $caterpilar9['empat']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="lima"><?= $caterpilar9['lima']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="enam"><?= $caterpilar9['enam']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="tujuh"><?= $caterpilar9['tujuh']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="delapan"><?= $caterpilar9['delapan']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="sembilan"><?= $caterpilar9['sembilan']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="sepuluh"><?= $caterpilar9['sepuluh']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="sebelas"><?= $caterpilar9['sebelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duabelas"><?= $caterpilar9['duabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="tigabelas"><?= $caterpilar9['tigabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="empatbelas"><?= $caterpilar9['empatbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="limabelas"><?= $caterpilar9['limabelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="enambelas"><?= $caterpilar9['enambelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="tujuhbelas"><?= $caterpilar9['tujuhbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="delapanbelas"><?= $caterpilar9['delapanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="sembilanbelas"><?= $caterpilar9['sembilanbelas']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duanol"><?= $caterpilar9['duanol']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duasatu"><?= $caterpilar9['duasatu']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duadua"><?= $caterpilar9['duadua']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duatiga"><?= $caterpilar9['duatiga']; ?></td>
                <td class="table_data" data-row_id="<?= $caterpilar9['id']; ?>" data-column_name="duaempat"><?= $caterpilar9['duaempat']; ?></td>
            </tr>
            <tr class="table-info" style="font-size: 14px;">
                <th colspan="2">Total PLTD Labuhan</th>
                <td><?= $tot1; ?></td>
                <td><?= $tot2; ?></td>
                <td><?= $tot3; ?></td>
                <td><?= $tot4; ?></td>
                <td><?= $tot5; ?></td>
                <td><?= $tot6; ?></td>
                <td><?= $tot7; ?></td>
                <td><?= $tot8; ?></td>
                <td><?= $tot9; ?></td>
                <td><?= $tot10; ?></td>
                <td><?= $tot11; ?></td>
                <td><?= $tot12; ?></td>
                <td><?= $tot13; ?></td>
                <td><?= $tot14; ?></td>
                <td><?= $tot15; ?></td>
                <td><?= $tot16; ?></td>
                <td><?= $tot17; ?></td>
                <td><?= $tot18; ?></td>
                <td><?= $tot19; ?></td>
                <td><?= $tot20; ?></td>
                <td><?= $tot21; ?></td>
                <td><?= $tot22; ?></td>
                <td><?= $tot23; ?></td>
                <td><?= $tot24; ?></td>
            </tr>
        </tbody>
    </table>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        function load_data() {
            window.location.href = "<?= base_url('labuhan/realisasi'); ?>";
        }

        $(document).on('blur', '.table_data', function() {
            var id = $(this).data('row_id');
            var table_column = $(this).data('column_name');
            var value = $(this).text();
            $.ajax({
                url: "<?php echo base_url('labuhan/update_real'); ?>",
                method: "POST",
                data: {
                    id: id,
                    table_column: table_column,
                    value: value
                },
                success: function(data) {
                    load_data();
                }
            })
        })
    });
</script>