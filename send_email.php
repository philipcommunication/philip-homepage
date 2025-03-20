<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = htmlspecialchars($_POST['company']);
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ndk0929@gmail.com";
    $subject = "새로운 문의가 접수되었습니다!";
    $body = "업체명: $company\n담당자명: $name\n연락처: $phone\n문의사항: $message";
    $headers = "From: no-reply@philip.kr";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('문의가 정상적으로 접수되었습니다. 빠르게 답변드리겠습니다!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('문의 접수 중 오류가 발생했습니다. 다시 시도해주세요.'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
}
?>
