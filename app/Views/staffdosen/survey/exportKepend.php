<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition:attachment;filename=SurveyKependidikan_' . $timeNow . '.xls');
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Pertanyaan</th>
        <th>NIP</th>
        <th>Nama Lengkap Dosen</th>
        <th>Sangat Baik</th>
        <th>Baik</th>
        <th>Cukup</th>
        <th>Buruk</th>
        <th>Sangat Buruk</th>
        <th>Created At</th>
    </tr>
    <?php $numbering = 1;
    foreach ($hasilSurveyKependModel as $key => $value) : ?>
        <tr>
            <td><?= $numbering++; ?></td>
            <td><?= $value->pertanyaan; ?></td>
            <td><?= $value->nip; ?></td>
            <td><?= $value->nama_lengkap; ?></td>
            <td><?= $value->sangat_baik; ?></td>
            <td><?= $value->baik; ?></td>
            <td><?= $value->cukup; ?></td>
            <td><?= $value->buruk; ?></td>
            <td><?= $value->sangat_buruk; ?></td>
            <td><?= $value->created_at; ?></td>
        </tr>
    <?php endforeach; ?>
</table>