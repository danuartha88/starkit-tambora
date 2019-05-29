<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="table table-responsive">
    <table class="table table-stripted table-bordered">
        <thead>
            <tr>

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

        </tbody>
    </table>
</div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        function load_data() {
            $.ajax({
                url: "<?= base_url('pembangkit/realisasi_lb'); ?>",
                dataType: "JSON",
                success: function(data) {
                    var html = '<tr>';
                    html += '<td id="mesin" contenteditable ></td>';
                    html += '<td id="satu" contenteditable ></td>';
                    html += '<td id="dua" contenteditable ></td>';
                    html += '<td id="tiga" contenteditable ></td>';
                    html += '<td id="empat" contenteditable ></td>';
                    html += '<td id="lima" contenteditable ></td>';
                    html += '<td id="enam" contenteditable ></td>';
                    html += '<td id="tujuh" contenteditable ></td>';
                    html += '<td id="delapan" contenteditable ></td>';
                    html += '<td id="sembilan" contenteditable ></td>';
                    html += '<td id="sepuluh" contenteditable ></td>';
                    html += '<td id="sebelas" contenteditable ></td>';
                    html += '<td id="duabelas" contenteditable ></td>';
                    html += '<td id="tigabelas" contenteditable ></td>';
                    html += '<td id="empatbelas" contenteditable ></td>';
                    html += '<td id="limabelas" contenteditable ></td>';
                    html += '<td id="enambelas" contenteditable ></td>';
                    html += '<td id="tujuhbelas" contenteditable ></td>';
                    html += '<td id="delapanbelas" contenteditable ></td>';
                    html += '<td id="sembilanbelas" contenteditable ></td>';
                    html += '<td id="duanol" contenteditable ></td>';
                    html += '<td id="duasatu" contenteditable ></td>';
                    html += '<td id="duadua" contenteditable ></td>';
                    html += '<td id="duatiga" contenteditable ></td>';
                    html += '<td id="duaempat" contenteditable ></td>';
                    html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><i class="fas fa-plus-square"></i></button></td>';
                    html += '</tr>';
                    for (var count = 0; count < data.length; count++) {
                        html = '<tr>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="mesin" contenteditable>' + data[count].mesin + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="satu" contenteditable>' + data[count].satu + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="dua" contenteditable>' + data[count].dua + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="tiga" contenteditable>' + data[count].tiga + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="empat" contenteditable>' + data[count].empat + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="lima" contenteditable>' + data[count].lima + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="enam" contenteditable>' + data[count].enam + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="tujuh" contenteditable>' + data[count].tujuh + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="delapan" contenteditable>' + data[count].delapan + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="sembilan" contenteditable>' + data[count].sembilan + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="sepuluh" contenteditable>' + data[count].sepuluh + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="sebelas" contenteditable>' + data[count].sebelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duabelas" contenteditable>' + data[count].duabelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="tigabelas" contenteditable>' + data[count].tigabelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="empatbelas" contenteditable>' + data[count].empatbelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="limabelas" contenteditable>' + data[count].limabelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="enambelas" contenteditable>' + data[count].enambelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="tujuhbelas" contenteditable>' + data[count].tujuhbelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="delapanbelas" contenteditable>' + data[count].delapanbelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="sembilanbelas" contenteditable>' + data[count].sembilanbelas + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duanol" contenteditable>' + data[count].duanol + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duasatu" contenteditable>' + data[count].duasatu + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duadua" contenteditable>' + data[count].duadua + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duatiga" contenteditable>' + data[count].duatiga + '</td>';
                        html += '<td class="table_data" data-row_id="' + data[count].id + '" data-column_name="duaempat" contenteditable>' + data[count].duaempat + '</td></tr>';
                    }
                    $('tbody').html(html);
                }
            })
        }
        load_data();
    });
</script>