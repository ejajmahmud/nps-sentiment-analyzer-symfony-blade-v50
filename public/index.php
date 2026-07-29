<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'nps-sentiment-analyzer-symfony-blade-v50',
    'category' => 'Customer Feedback & NPS Sentiment Engine',
    'tech' => 'PHP / Symfony & Twig',
    'status' => 'operational'
]);
