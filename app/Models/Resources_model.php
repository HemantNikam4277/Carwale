<?php 
namespace App\Models;
use CodeIgniter\Model;
class Resources_model extends Model
{
    protected $table = 'whiteauo_resources';
    protected $primaryKey = 'r_id';
    protected $allowedFields = ['r_title', 'r_url','r_author','r_content','r_img','date_created'];
}

?>