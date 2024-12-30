<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- programs pdf -->
    <td class="text-center text-capitalize text-wrap">
        <?php
        // Check if there is an updated PDF
        $updatedPdfPath = 'public/uploads/updateProgramsPdf/' . $key['progPdf'];
        $isUpdatedPdfAvailable = !empty($key['progPdf']) && file_exists($updatedPdfPath);
        if ($isUpdatedPdfAvailable): ?>
            <!-- Display the updated PDF -->
            <button type="button" class="btn btn-outline-primary"
                style="padding: 8px 16px; font-size: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
                onclick="window.open('<?= base_url($updatedPdfPath); ?>', '_blank');" title="Click to view the updated PDF">
                View PDF <i class="fa fa-eye"></i>
            </button>
            <?php
            // Extract the username from the updated file name
            $fileName = $key['progPdf'];
            $fileParts = explode(' by ', $fileName); // Split the filename at ' by '
            $uploadedBy = isset($fileParts[1]) ? $fileParts[1] : 'Unknown'; // Extract username or set as 'Unknown'
            ?>
            <span class="text-primary">
                <?= 'updated by ' . $uploadedBy; ?>
            </span>
        <?php elseif (!empty($key['progPdf'])): ?>
            <!-- If no updated PDF exists, display the original PDF -->
            <button type="button" class="btn btn-outline-primary"
                style="padding: 8px 16px; font-size: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
                onclick="window.open('<?= base_url('public/uploads/programsPdf/' . $key['progPdf']); ?>', '_blank');"
                title="Click to view the original PDF">
                View PDF <i class="fa fa-eye"></i>
            </button>
            <?php
            // Extract the username from the original file name
            $fileName = $key['progPdf'];
            $fileParts = explode(' by ', $fileName); // Split the filename at ' by '
            $uploadedBy = isset($fileParts[1]) ? $fileParts[1] : 'Unknown'; // Extract username or set as 'Unknown'
            ?>
            <span class="text-primary">
                <?= 'uploaded by ' . $uploadedBy; ?>
            </span>
        <?php else: ?>
            <!-- If no PDF available -->
            <span class="text-danger font-italic">No PDF Available</span>
        <?php endif; ?>
        <!-- Display the Program Logs Link in both cases (whether updated or original) -->
        <span class="programsPdf_history_log">
            <a href="#" class="badge badge-outline-success float-right programs_pdf_history" id="programs_pdf_history"
                data-toggle="modal" data-target="#programs_pdf_history_modal" data-id="<?php echo $key['prog_id']; ?>"
                value="<?php echo $key['prog_id']; ?>" title="History log of program pdf">
                <u><span class="text-success">Programme Logs <i class="fa fa-history" aria-hidden="true"></i></span></u>
            </a>
        </span>
    </td>
    <!-- attendance pdf -->
    <td class="text-center text-capitalize text-wrap">
        <?php
        // Check if there is an updated PDF
        $updatedAttendancePdfPath = 'public/uploads/updateAttendancePdf/' . $key['attendancePdf'];
        $isUpdatedAttendancePdfAvailable = !empty($key['attendancePdf']) && file_exists($updatedAttendancePdfPath);
        if ($isUpdatedAttendancePdfAvailable): ?>
            <!-- Display the updated PDF -->
            <button type="button" class="btn btn-outline-primary"
                style="padding: 8px 16px; font-size: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
                onclick="window.open('<?= base_url($updatedAttendancePdfPath); ?>', '_blank');"
                title="Click to view the updated PDF">
                View PDF <i class="fa fa-eye"></i>
            </button>
            <?php
            // Extract the username from the updated file name
            $fileName = $key['attendancePdf'];
            $fileParts = explode(' by ', $fileName); // Split the filename at ' by '
            $uploadedBy2 = isset($fileParts[1]) ? $fileParts[1] : 'Unknown'; // Extract username or set as 'Unknown'
            ?>
            <span class="text-primary">
                <?= 'updated by ' . $uploadedBy2; ?>
            </span>
        <?php elseif (!empty($key['attendancePdf'])): ?>
            <!-- If no updated PDF exists, display the original PDF -->
            <button type="button" class="btn btn-outline-primary"
                style="padding: 8px 16px; font-size: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
                onclick="window.open('<?= base_url('public/uploads/attendancePdf/' . $key['attendancePdf']); ?>', '_blank');"
                title="Click to view the original PDF">
                View PDF <i class="fa fa-eye"></i>
            </button>
            <?php
            // Extract the username from the original file name
            $fileName = $key['progPdf'];
            $fileParts = explode(' by ', $fileName); // Split the filename at ' by '
            $uploadedBy2 = isset($fileParts[1]) ? $fileParts[1] : 'Unknown'; // Extract username or set as 'Unknown'
            ?>
            <span class="text-primary">
                <?= 'uploaded by' . $uploadedBy2; ?>
            </span>
        <?php else: ?>
            <!-- If no PDF available -->
            <span class="text-danger font-italic">No PDF Available</span>
        <?php endif; ?>
        <!-- Display the Program Logs Link in both cases (whether updated or original) -->
        <span class="attendancePdf_history_log">
            <a href="#" class="badge badge-outline-success float-right attendance_pdf_history"
                id="attendance_pdf_history" data-toggle="modal" data-target="#attendance_pdf_history_modal"
                data-id="<?php echo $key['prog_id']; ?>" value="<?php echo $key['prog_id']; ?>"
                title="History log of attendance pdf">
                <u><span class="text-success">Attendance Logs <i class="fa fa-history"
                            aria-hidden="true"></i></span></u></a></span>
    </td>
    <!-- /attendance pdf end -->
</body>

</html>