<?php 
namespace App\Models;
use CodeIgniter\Model;
class Admin_model extends Model
{
    protected $table = 'whiteauo_admin';
    protected $primaryKey = 'admin_id';
    protected $allowedFields = ['admin_email', 'admin_password','last_login'];
}

?>