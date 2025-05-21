<?php

interface PaymentMethod {
    public function QRCode();
    public function Card();
}

class FirstTerminal implements PaymentMethod {
    public function QRCode() {
        return "Order has been paid by QR on the first terminal";
    }
    public function Card() {
        return "Order has been paid by Card on the first terminal";
    }
}

class SecondTerminal implements PaymentMethod {
    public function QRCode() {
        return "Order has been paid by QR on the second terminal";
    }

    public function Card() {
        return "Order has been paid by card on the second terminal";
    }
}

class PaymentProcessor {
    public function payByQR(PaymentMethod $paymentMethod) {
        return $paymentMethod->QRCode();
    }

    public function payByCard(PaymentMethod $paymentMethod) {
        return $paymentMethod->Card();
    }
}

$paymentProcessor = new PaymentProcessor();
$firstTerminal = new FirstTerminal();
$secondTerminal = new SecondTerminal();
echo $paymentProcessor->payByQr($secondTerminal);



