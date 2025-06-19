<?php
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
$input = json_decode(file_get_contents('php://input'), true);

switch ($action) {
    case 'get':
        $result = $conn->query("SELECT id, name, status FROM projects ORDER BY created_at DESC");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        break;

    case 'add':
        $name = trim($input['name'] ?? '');
        if (empty($name)) { exit; }
        $stmt = $conn->prepare("INSERT INTO projects (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
        $stmt->close();
        break;

    case 'update':
        $id = intval($input['id'] ?? 0);
        $status = trim($input['status'] ?? '');
        if (empty($id) || empty($status)) { exit; }
        $stmt = $conn->prepare("UPDATE projects SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        $stmt->execute();
        echo json_encode(['success' => true]);
        $stmt->close();
        break;

    case 'delete':
        $id = intval($input['id'] ?? 0);
        if (empty($id)) { exit; }
        $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo json_encode(['success' => true]);
        $stmt->close();
        break;
}
$conn->close();
?>
