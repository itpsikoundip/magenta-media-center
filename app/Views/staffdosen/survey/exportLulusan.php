<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition:attachment;filename=SurveyLulusan_' . $timeNow . '.xls');
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Pertanyaan</th>
        <th>Sangat Baik</th>
        <th>Baik</th>
        <th>Cukup</th>
        <th>Buruk</th>
        <th>Sangat Buruk</th>
        <th>Created At</th>
    </tr>
    <?php $numbering = 1;
    foreach ($hasilSurveyLulusanModel as $row) : ?>
        <tr>
            <td><?= $numbering++; ?></td>
            <td><?= $row["pertanyaan"]; ?></td>
            <td><?= $row["sangat_baik"]; ?></td>
            <td><?= $row["baik"]; ?></td>
            <td><?= $row["cukup"]; ?></td>
            <td><?= $row["buruk"]; ?></td>
            <td><?= $row["sangat_buruk"]; ?></td>
            <td><?= $row["created_at"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>