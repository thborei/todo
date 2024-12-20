<?php
class Task
{
 public static function all()
 {
 $db = Database::getInstance()->getPdo();
 $stmt = $db->query("SELECT * FROM tasks ORDER BY created_at DESC");
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public static function create($title, $project)
 {
    $db = Database::getInstance()->getPdo();
    $stmt = $db->query("INSERT INTO tasks (title, project_id) VALUES ('$title','$project')");
 }
 public static function markAsCompleted($id)
 {
    $db = Database::getInstance()->getPdo();
    $stmt = $db->query("UPDATE tasks SET is_completed=1 WHERE id=$id");
 }
 public static function delete($id)
 {
    $db = Database::getInstance()->getPdo();
    $stmt = $db->query("DELETE FROM tasks WHERE id=$id");
 }
 public static function getProject($id)
 {
      $db = Database::getInstance()->getPdo();
      $stmt = $db->query("SELECT title FROM project WHERE id=$id");
 }
}