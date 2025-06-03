<?php
include 'config.php';
$title = 'حجز موعد';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $date = $_POST['date'] ?? '';
    if ($name && $date) {
        $stmt = $conn->prepare("INSERT INTO appointments (name, appointment_date) VALUES (?, ?)");
        $stmt->bind_param('ss', $name, $date);
        $stmt->execute();
        $stmt->close();
        echo '<p>تم الحجز بنجاح!</p>';
    } else {
        echo '<p>الرجاء إدخال جميع البيانات</p>';
    }
}
?>
<form method="post">
  <label for="name">الاسم:</label>
  <input type="text" id="name" name="name">
  <label for="date">التاريخ:</label>
  <input type="date" id="date" name="date">
  <button type="submit">حجز</button>
</form>
<?php
include 'footer.php';
?>
