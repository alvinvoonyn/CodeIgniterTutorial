<!DOCTYPE html>
<html>
<head>
    <title>Testing</title>
</head>
<body>
    <h1>Hello World!</h1>

    <table>
        <thead>
            <th>Book No.</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Place</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Booked Time</th>
            <th>status</th>
        </thead>
        <tbody>
            <?php foreach ($booking as $booking_item): ?>
            <tr>
                <td><?php echo $booking_item['book_num']; ?></td>
                <td><?php echo $booking_item['id']; ?></td>
                <td><?php echo $booking_item['name']; ?></td>
                <td><?php echo $booking_item['type']; ?></td>
                <td><?php echo $booking_item['place']; ?></td>
                <td><?php echo $booking_item['start_time']; ?></td>
                <td><?php echo $booking_item['end_time']; ?></td>
                <td><?php echo $booking_item['booked_time']; ?></td>
                <td><?php echo $booking_item['status']; ?></td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

</body>
</html>
