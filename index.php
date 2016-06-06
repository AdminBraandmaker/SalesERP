<?php echo 'Hello how you are ';
 public function index()
 {
  $this->db->where('m00_config');
  $this->db->where('m01_location');
  $this->db->where('m02_location');
 }
?>
