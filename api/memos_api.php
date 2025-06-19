<?php
// This is the most up to date immersive artifact.
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

require_once __DIR__ . '/../database.php';

if ($conn->connect_error) {
     http_response_code(500);
     echo json_encode(['success' => false, 'message' => 'DATABASE CONNECTION FAILED: ' . $conn->connect_error]);
    exit;
}

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'get':
        $result = $conn->query("SELECT id, content, created_at FROM memos ORDER BY created_at DESC");
        $memos = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($memos);
        break;

    case 'add':
        $input = json_decode(file_get_contents('php://input'), true);
        $content = trim($input['content'] ?? '');
        if (empty($content)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Memo content is required.']);
            exit;
        }
        $stmt = $conn->prepare("INSERT INTO memos (content) VALUES (?)");
        $stmt->bind_param("s", $content);
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Failed to save memo.']);
        }
        $stmt->close();
        break;
}
$conn->close();
?>
