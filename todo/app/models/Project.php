<?php
class Project
{
 public static function all()
 {
 $db = Database::getInstance()->getPdo();
 $stmt = $db->query("SELECT * FROM project ORDER BY created_at DESC ");
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
}